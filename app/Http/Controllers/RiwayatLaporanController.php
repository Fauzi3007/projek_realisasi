<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_Laporan;
use Illuminate\Http\Request;

class RiwayatLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayats=Riwayat_Laporan::get();
        return view('pages.riwayatLaporan.riwayatLaporan',['riwayats'=>$riwayats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.riwayat.create',[
            'riwayats'=>Riwayat_Laporan::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'id_riwayat_laporan'=>'required|unique:riwayats',
            'tanggal'=>'required',
            
        ]);
        
        Riwayat_Laporan::create($validatedData);
        return redirect('/riwayat')->with('pesan','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Riwayat_Laporan::where('id_riwayat_laporan', $id)->delete();
        return redirect('/riwayat')->with('pesan','Data berhasil di hapus');
    }
}
