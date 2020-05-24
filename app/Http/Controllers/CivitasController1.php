<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KirimKI;
use App\karyailmiah;


class CivitasController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KirimKI = karyailmiah::all();
        return view('KirimKI.index', compact('KirimKI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('KirimKI/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        karyailmiah::create($request->all());
        $file = new karyailmiah; 
        
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->penulis = $request->penulis;
        $data->pembimbing = $request->penulis;
        $data->ProgramStudi = $request->penulis;
        $data->JenisKaryaIlmiah = $request->penulis;
        $data->status = "Requested";
        if($request->file('File')){
            $file = $request->file('File');
            $filename = $request->judul.'.'.$file->getClientOriginalExtension();
            $request->File->move('storage/',$filename);
            $data->File = $filename;
        } 
        $data->save();

        return redirect()->route('KirimKI.index');
    }

    public function getAllReject(){
        $file = DB::table('karyailmiah')->where('status','Rejected')->get();
        return view('Home.homeAdminreject',compact('file'));
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
        //
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
        //
    }
}
