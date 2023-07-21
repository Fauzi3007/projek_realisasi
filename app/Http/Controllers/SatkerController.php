<?php

namespace App\Http\Controllers;

use App\Models\Satker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SatkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satkers=Satker::all();
        return view('pages.satker.satker',['satkers'=>$satkers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idTerakhir = Satker::max('id_satker'); //ambil id satker terakhir
        if ($idTerakhir) {
            $numericPart = intval(substr($idTerakhir, 1));
            $numericPart++;
            $newId = "S" . str_pad($numericPart, 3, "0", STR_PAD_LEFT);
        } else {
            // Tabel kosong, ID baru dimulai dari "S001"
            $newId = "S001";
        }
        return view('pages.satker.create',[
            'id_satker'=>$newId,
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
        $keywords = ['propinsi','profinsi', 'provinsi', 'kabupaten', 'kab.', 'kota', 'prov.'];
        $satker = Str::lower($request->input('nama_satker'));
        foreach ($keywords as $keyword) {
            if (str_contains($satker, $keyword)) {
                $parts = explode($keyword, $satker);
                $lokasi = trim($parts[1]);
                break;
            }else{
                $lokasi = 'other';
            }
        }

        $validatedData=$request->validate([
            'id_satker'=>'required|unique:satkers',
            'nama_satker' => 'required|regex:/^[^0-9]+$/',
        ]);
        $validatedData['nama_satker'] = strtoupper($request->input('nama_satker'));
        $validatedData['lokasi'] = $lokasi;
        satker::create($validatedData);
        return redirect('/satker')->with('pesan','Data berhasil disimpan');
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
        return view('pages.satker.edit',[
            'satkers'=>satker::where('id_satker',$id)->first()
         ]);
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
        $keywords = ['propinsi','profinsi', 'provinsi', 'kabupaten', 'kab.', 'kota', 'prov.'];
        $satker = Str::lower($request->input('nama_satker'));
        foreach ($keywords as $keyword) {
            if (str_contains($satker, $keyword)) {
                $parts = explode($keyword, $satker);
                $lokasi = trim($parts[1]);
                break;
            }else{
                $lokasi = 'other';
            }
        }
        $validatedData=$request->validate([
            'nama_satker'=>'required|regex:/^[^0-9]+$/'
        ]);
        $validatedData['nama_satker'] = strtoupper($request->input('nama_satker'));
        $validatedData['lokasi'] = $lokasi;
        
        satker::where('id_satker',$id)->update($validatedData);
        return redirect('/satker')->with('pesan','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        satker::where('id_satker',$id)->delete();
        return redirect('/satker')->with('pesan','Data berhasil di hapus');
    }
}
