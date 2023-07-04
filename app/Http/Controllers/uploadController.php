<?php

namespace App\Http\Controllers;

use App\Models\Detail_Laporan;
use App\Models\Direktorat;
use App\Models\Rekap_Laporan;
use App\Models\Riwayat_Laporan;
use App\Models\Riwayat_Laporan_Satker;
use App\Models\Satker;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column;

class uploadController extends Controller
{


    public function index(Request $request){
        set_time_limit(180);

        $tanggal = $request->filled('tanggalRL') ? $request->input('tanggalRL') : Carbon::now();

        $idRLTerakhir = Riwayat_Laporan::max('id_riwayat_laporan'); // ambil id terakhir riwayat_laporan

        if ($idRLTerakhir) {
            $numericRL = intval(substr($idRLTerakhir, 2));
            $numericRL++;
            $RLId = "RL" . str_pad($numericRL, 8, "0", STR_PAD_LEFT);
        } else {
            // Tabel kosong, ID baru dimulai dari "D001"
            $RLId = "RL00000001";
        }
        Riwayat_Laporan::create([
            'id_riwayat_laporan'=> $RLId,
            'tanggal'=> $tanggal
        ]);

        $file = $request->file('excel_file');
        $spreadsheet = IOFactory::load($file->getPathname());
        $worksheet = $spreadsheet->getActiveSheet();

        $this->cekSatker($worksheet);
        $this->cekDirektorat($worksheet);
        $this->insertRLS($worksheet,$RLId);
        
        return redirect('dashboard');

    }

    // memasukkan nilai id_riwayat_laporan ke tabel riwayat_laporan_satker
    public function insertRLS($excel,$RLId){
        
        $worksheet = $excel;

        $startRow = 9; 
        $currentRow = $startRow;
        $columnEnd = 'A';
        $column = 'B'; 
        
        while(true){

            $idRLSTerakhir = Riwayat_Laporan_Satker::max('id_riwayat_laporan_satker');

            if ($idRLSTerakhir) {
                $numericRL = intval(substr($idRLSTerakhir, 3));
                $numericRL++;
                $RLSId = "RLS" . str_pad($numericRL, 7, "0", STR_PAD_LEFT);
            } else {
            
                $RLSId = "RLS0000001";
            }
            
            $namaSatker = Str::lower($worksheet->getCell($column . $currentRow)->getValue()); 
            $idSatker = Satker::where('nama_satker','like','%'.Str::lower($namaSatker).'%')->value('id_satker');
            Riwayat_Laporan_Satker::create([
                'id_riwayat_laporan_satker' => $RLSId,
                'satker_id_satker' => $idSatker,
                'riwayat_laporan_id_riwayat_laporan'=>$RLId
            ]);

            // Mulai dari baris ke-7
            
            
            $this->insertDetail($worksheet,$RLSId,$currentRow);
           

            $cellEnd = Str::lower($worksheet->getCell($columnEnd.$currentRow + 1)->getValue());
            if ($cellEnd == 'total' || $cellEnd == null) {
                break; // Jika ditemukan sel dengan nilai 'total', keluar dari loop
            }
            $currentRow++;
        }

        
    }
    

    public function insertDetail($excel,$RLSId,$paguRow){
        $worksheet=$excel;
        $startRow = 7; 
        $column = ord('C');
        // Mulai dari kolom C

        while (true) {
            
            $namaDirektorat = Str::lower($worksheet->getCell(chr($column) . $startRow)->getValue());
            $pagu = $worksheet->getCell(chr($column).($paguRow))->getCalculatedValue();
            if($pagu == null){
                $pagu = 0;
            }
            $realisasi = $worksheet->getCell(chr($column+1).($paguRow))->getCalculatedValue();
            if($realisasi == null){
                $realisasi = 0;
            }

            if ($namaDirektorat == 'total pagu') {
                break; // Jika ditemukan sel dengan nilai 'total pagu', keluar dari loop
            }
            $IdDirektorat = Direktorat::where('nama_direktorat', 'like','%'.Str::lower($namaDirektorat).'%')->value('id_direktorat');

             // ambil id direktorat terakhir
           
            // insert nama direktorat ke tabel direktorat
            Detail_Laporan::create([
                'riwayat_laporan_satker_id_riwayat_laporan_satker'=>$RLSId,
                'direktorat_id_direktorat'=> $IdDirektorat,
                'pagu'=>$pagu,
                'realisasi'=>$realisasi
            ]);

            // Pindah ke kolom direktorat berikutnya
            $column = $column + 2;
            

        }
        $this->insertRekap($worksheet,$RLSId,$column,$paguRow);

    }



    public function insertRekap($excel,$RLSId,$colTotalPagu,$startRowPagu){
        $worksheet=$excel;

        $startColPagu = $colTotalPagu;
        
        $totalPagu = $worksheet->getCell(chr($startColPagu).$startRowPagu)->getCalculatedValue();
        $totalBlokir = $worksheet->getCell(chr($startColPagu+1).$startRowPagu)->getCalculatedValue();
        $totalRealisasi = $worksheet->getCell(chr($startColPagu+2).$startRowPagu)->getCalculatedValue();
        $totalPersentase = round(100*($worksheet->getCell(chr($startColPagu+3).$startRowPagu)->getCalculatedValue()),2);
            
        $totalPagu = preg_replace("/[^0-9.]/", "", $totalPagu);
        $totalBlokir = preg_replace("/[^0-9.]/", "", $totalBlokir);
        $totalRealisasi = preg_replace("/[^0-9.]/", "", $totalRealisasi);

            Rekap_Laporan::create([
                'total_pagu'=>$totalPagu,
                'total_blokir'=>$totalBlokir,
                'total_realisasi'=>$totalRealisasi,
                'total_persentase'=>$totalPersentase,
                'riwayat_laporan_satker_id_riwayat_laporan_satker'=>$RLSId
            ]);


    }

    public function cekSatker($excel){

        $worksheet = $excel;

        $startRow = 9; 
        $currentRow = $startRow;
        $columnEnd = 'A';
        $column = 'B'; 
        $keywords = ['propinsi','profinsi', 'provinsi', 'kabupaten', 'kab.', 'kota', 'prov.'];
        $lokasi = '';
        while (true) {
            $cellValue = Str::lower($worksheet->getCell($column . $currentRow)->getValue()); 
            $satker = Satker::where('nama_satker','like','%'.Str::lower(ltrim($cellValue)).'%')->first();
            
            
            if($satker == null){
           
                foreach ($keywords as $keyword) {
                    if (str_contains($cellValue, $keyword)) {
                        $parts = explode($keyword, $cellValue);
                        $lokasi = trim($parts[1]);
                        break;
                    }else{
                        $lokasi = 'other';
                    }
                }

                $idTerakhir = Satker::max('id_satker'); //ambil id satker terakhir
                if ($idTerakhir) {
                    $numericPart = intval(substr($idTerakhir, 1));
                    $numericPart++;
                    $newId = "S" . str_pad($numericPart, 3, "0", STR_PAD_LEFT);
                } else {
                    // Tabel kosong, ID baru dimulai dari "D001"
                    $newId = "S001";
                }
            
                Satker::create([
                    'id_satker' => $newId,
                    'nama_satker' => Str::upper($cellValue),
                    'lokasi'=> ltrim($lokasi) 
                ]);
            }

            // Pindah ke baris berikutnya
            $cellEnd = Str::lower($worksheet->getCell($columnEnd.$currentRow + 1)->getValue());
            if ($cellEnd == 'total' || $cellEnd == null) {
                break; // Jika ditemukan sel dengan nilai 'total', keluar dari loop
            }

            $currentRow++;
        }
       
    }

    public function cekDirektorat($excel)
    {
        $worksheet = $excel;

        $startRow = 7; // Mulai dari baris ke-7
        $column = ord('C'); // Mulai dari kolom C

        while (true) {
            
            $cellValue = Str::lower($worksheet->getCell(chr($column) . $startRow)->getValue());
            if ($cellValue == 'total pagu') {
                break; // Jika ditemukan sel dengan nilai 'total pagu', keluar dari loop
            }
            $direktorat = Direktorat::where('nama_direktorat', 'like','%'.Str::lower(ltrim($cellValue)).'%')->first();

            if($direktorat == null){
                $idTerakhir = Direktorat::max('id_direktorat'); // ambil id direktorat terakhir
                if ($idTerakhir) {
                    $numericPart = intval(substr($idTerakhir, 1));
                    $numericPart++;
                    $newId = "D" . str_pad($numericPart, 3, "0", STR_PAD_LEFT);
                } else {
                    // Tabel kosong, ID baru dimulai dari "D001"
                    $newId = "D001";
                }
                //insert nama direktorat ke tabel direktorat
                    Direktorat::create([
                        'id_direktorat' => $newId,
                        'nama_direktorat' => Str::upper($cellValue)
                    ]);

                }

                
                // Pindah ke kolom berikutnya
                $column = $column + 2;

        }
        
           
        

    }

 

    

   
}
