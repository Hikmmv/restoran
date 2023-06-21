<?php

namespace App\Http\Controllers;


use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pegawai::all();
        return view('pegawai.create',compact('data'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.index');
    }

    public function insertdata(Request $request){
        pegawai::create($request->all());

        return redirect()->route('pegawai')->with('succes', 'Data Berhasil Ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampilkandata($id)
    {
        $data = pegawai::find($id);
        return view('pegawai.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = pegawai::find($id);
        $data->update($request->all());

        return redirect()->route('pegawai')->with('succes', 'Data Behasil Diupdate');
    }

  
    public function daletedata($id)
    {
        $data = pegawai::find($id);
        $data->dalete();

        return redirect()->route('pegawai')->with('succes', 'Data Behasil Dihapus');
    }
}
