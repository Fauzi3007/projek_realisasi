<?php

    namespace App\Http\Controllers;

use App\Models\Riwayat_Laporan;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            
            $laporanTerbaru = Riwayat_Laporan::latest()->value('tanggal') ?? Carbon::now();

            $laporans = DB::table('riwayat__laporan__satkers')
            ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
            ->join('satkers','satker_id_satker','=','id_satker')
            ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
            ->where('tanggal','=',$laporanTerbaru)
            ->select('tanggal','id_satker','id_riwayat_laporan_satker','nama_satker','total_pagu','total_blokir','total_realisasi','total_persentase') 
            ->get();

            $lokasi = DB::table('riwayat__laporan__satkers')
            ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
            ->join('satkers','satker_id_satker','=','id_satker')
            ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
            ->where('tanggal','=',$laporanTerbaru)
            ->select('lokasi')->orderBy('lokasi','asc') 
            ->get();

            
            $sekarang = $laporanTerbaru;
            $tanggalLaporan = Carbon::parse($sekarang)->locale('id')->isoFormat('D MMMM YYYY');


            return view('pages/dashboard/dashboard',compact('laporans','tanggalLaporan','lokasi'));
            
            }

        public function filter(Request $request){

            //tanggal laporan terbaru
            $laporanTerbaru = Riwayat_Laporan::latest()->value('tanggal') ?? Carbon::now();
            //daerah yang dicheckbox
            $daerah = $request->filled('selectedValues') ? $request->input('selectedValues') : null; 
            // filter persentase
            $persentase = $request->filled('filterValue') ? $request->input('filterValue') : '100'; // filter persentase 100 diawal
            //filter operator persentase
            $operator = $request->filled('operator') ? $request->input('operator') : '<=';
            // tanggal filter jika tidak ada ambil tanggal laporan terbaru
            $tanggal = $request->filled('tanggalLaporan') ? $request->input('tanggalLaporan') 
            : $laporanTerbaru; 
            
            //tanggal sekarang untuk judul
            $sekarang = $tanggal;
            $tanggalLaporan = Carbon::parse($sekarang)->locale('id')->isoFormat('D MMMM YYYY');
            
            // ambil data lokasi
            $lokasi = DB::table('riwayat__laporan__satkers')
            ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
            ->join('satkers','satker_id_satker','=','id_satker')
            ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
            ->where('tanggal','=',$tanggal)->where('total_persentase',$operator,$persentase)
            ->select('lokasi')->orderBy('lokasi','asc')
            ->get();
           
            //seluruh data yang dibutuhkan
            if ($daerah == null) {
                $laporans = DB::table('riwayat__laporan__satkers')
                ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
                ->join('satkers','satker_id_satker','=','id_satker')
                ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
                ->where('tanggal','=',$tanggal)->where('total_persentase',$operator,$persentase)
                ->select('tanggal','id_satker','id_riwayat_laporan_satker','nama_satker','total_pagu','total_blokir','total_realisasi','total_persentase')
                ->get();
            }else{
                $laporans = DB::table('riwayat__laporan__satkers')
                ->join('riwayat__laporans','riwayat_laporan_id_riwayat_laporan','=','id_riwayat_laporan')
                ->join('satkers','satker_id_satker','=','id_satker')
                ->join('rekap__laporans','id_riwayat_laporan_satker','=','riwayat_laporan_satker_id_riwayat_laporan_satker')
                ->where('tanggal','=',$tanggal)->where('total_persentase',$operator,$persentase)->whereIn('lokasi',$daerah)
                ->select('tanggal','id_satker','id_riwayat_laporan_satker','nama_satker','total_pagu','total_blokir','total_realisasi','total_persentase')
                ->get();
            }
            
            

            return view('pages/dashboard/dashboard',compact('laporans','tanggalLaporan','lokasi'));
        }



    
    }
