<?php

namespace App\Http\Controllers;

use App\Models\Detail_Laporan;
use App\Models\Direktorat;
// use App\Models\Rekap_Laporan;
// use App\Models\Riwayat_Laporan;
// use App\Models\Riwayat_Laporan_Satker;
use App\Models\Satker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($tanggal,$id,$satker)
    {
        
        $tanggalAwal = Carbon::parse($tanggal)->startOfMonth();
        $tanggalAkhir = Carbon::parse($tanggal)->endOfMonth();
        
        $nama_satker = Satker::where('id_satker',$satker)->select('nama_satker')->first();
        $tampilDirektorat = Direktorat::all();
        $jumlahDirektorat = Direktorat::count();

        $persentase = DB::table('riwayat__laporan__satkers')
        ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
        ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
        ->where('satker_id_satker','=',$satker)
        ->whereBetween('tanggal',[$tanggalAwal,$tanggalAkhir])
        ->select('tanggal','total_pagu','total_blokir','total_realisasi','total_persentase')->get();
       

        $jumlahData = count($persentase);

        $data = [];
        foreach ($persentase as $persen) {
           $data[]=[$persen->tanggal,$persen->total_persentase];
        }
        $dataPersen = json_encode($data);
        
        $paguReal = [];
        foreach ($persentase as $tgl){
            foreach ($tampilDirektorat as $pagu) {
                $detail = Detail_Laporan::join('riwayat__laporan__satkers','riwayat_laporan_satker_id_riwayat_laporan_satker','=','id_riwayat_laporan_satker')
                ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
                ->select('pagu','realisasi','satker_id_satker','direktorat_id_direktorat','tanggal')
                ->where('direktorat_id_direktorat','=',$pagu->id_direktorat)->where('tanggal','=',$tgl->tanggal)
                ->first();
                
                if ($detail != null) {
                    $paguReal = array_merge($paguReal, [$detail->pagu, $detail->realisasi]);
                } else {
                    $paguReal = array_merge($paguReal, [0, 0]);
                }
            }
        }
        $tampilRealisasi = [];
        for ($i=0; $i < $jumlahData; $i++) { 
            $slice = array_slice($paguReal,($jumlahDirektorat*2)*$i,$jumlahDirektorat*2);
            $tampilRealisasi[] = $slice;
        }

       
        return view('pages.detailLaporan.detail',compact('dataPersen','nama_satker','tampilDirektorat',
        'jumlahDirektorat','jumlahData','tampilRealisasi','persentase','paguReal','tanggal','id','satker'));
    }




    public function filterPersen(Request $request,$tanggal,$id,$satker)
    {
        
       
        $tanggalAwal = $request->input('tglAwal') ?? Carbon::now()->startOfMonth();
        $tanggalAkhir = $request->input('tglAkhir') ?? Carbon::now()->endOfMonth();
        
        
        $nama_satker = Satker::where('id_satker',$satker)->select('nama_satker')->first();
        $tampilDirektorat = Direktorat::all();
        $jumlahDirektorat = Direktorat::count();

        $persentase = DB::table('riwayat__laporan__satkers')
        ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
        ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
        ->where('satker_id_satker','=',$satker)
        ->whereBetween('tanggal',[$tanggalAwal,$tanggalAkhir])
        ->select('tanggal','total_pagu','total_blokir','total_realisasi','total_persentase')->get();
       
      
        $jumlahData = count($persentase);

        $data = [];
        foreach ($persentase as $persen) {
           $data[]=[$persen->tanggal,$persen->total_persentase];
        }
        $dataPersen = json_encode($data);
        
        $paguReal = [];
        foreach ($persentase as $tgl){
            foreach ($tampilDirektorat as $pagu) {
                $detail = Detail_Laporan::join('riwayat__laporan__satkers','riwayat_laporan_satker_id_riwayat_laporan_satker','=','id_riwayat_laporan_satker')
                ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
                ->select('pagu','realisasi','satker_id_satker','direktorat_id_direktorat','tanggal')
                ->where('direktorat_id_direktorat','=',$pagu->id_direktorat)->where('tanggal','=',$tgl->tanggal)
                ->first();
                
                if ($detail != null) {
                    $paguReal = array_merge($paguReal, [$detail->pagu, $detail->realisasi]);
                } else {
                    $paguReal = array_merge($paguReal, [0, 0]);
                }
            }
        }
        $tampilRealisasi = [];
        for ($i=0; $i < $jumlahData; $i++) { 
            $slice = array_slice($paguReal,($jumlahDirektorat*2)*$i,$jumlahDirektorat*2);
            $tampilRealisasi[] = $slice;
        }

       
        return view('pages.detailLaporan.detail',compact('dataPersen','nama_satker','tampilDirektorat',
        'jumlahDirektorat','jumlahData','tampilRealisasi','persentase','paguReal','tanggal','id','satker'));
    }

   
}
