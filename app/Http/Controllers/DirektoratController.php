<?php

namespace App\Http\Controllers;

use App\Models\Direktorat;
use Illuminate\Http\Request;

class DirektoratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direktorats=Direktorat::all();
        return view('pages.direktorat.direktorat',['direktorats'=>$direktorats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idTerakhir = Direktorat::max('id_direktorat'); // ambil id direktorat terakhir
        if ($idTerakhir) {
            $numericPart = intval(substr($idTerakhir, 1));
            $numericPart++;
            $newId = "D" . str_pad($numericPart, 3, "0", STR_PAD_LEFT);
        } else {
            // Tabel kosong, ID baru dimulai dari "D001"
            $newId = "D001";
        }
        return view('pages.direktorat.create',[
            'id_direktorat'=>$newId,
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
            'id_direktorat'=>'required|unique:direktorats',
            'nama_direktorat'=>'required|regex:/^[^0-9]+$/'
        ]);
        $validatedData['nama_direktorat'] = strtoupper($request->input('nama_direktorat'));
        Direktorat::create($validatedData);
        return redirect('/direktorat')->with('pesan','Data berhasil disimpan');
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
        return view('pages.direktorat.edit',[
            'direktorats'=>Direktorat::where('id_direktorat',$id)->first()]);
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
        $validatedData=$request->validate([
            'nama_direktorat'=>'required|regex:/^[^0-9]+$/'
        ]);
        $validatedData['nama_direktorat'] = strtoupper($request->input('nama_direktorat'));
        Direktorat::where('id_direktorat',$id)->update($validatedData);
        return redirect('/direktorat')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direktorat::where('id_direktorat',$id)->delete();
        return redirect('/direktorat')->with('pesan','Data berhasil di hapus');
    }
}
