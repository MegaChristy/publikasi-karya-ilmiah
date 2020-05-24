<?php

namespace App\Http\Controllers;
use App\karyailmiah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminkoleksi(Request $request){
        if ($request->has('cari')){
            $karyailmiah = karyailmiah::where('Judul','LIKE','%' . $request->cari . '%')->get();    
        }else{
            $karyailmiah = karyailmiah::all();
        }
        return view('/admin/koleksi', compact('karyailmiah'));
    
    }
    public function adminprodi(){
        return view('/admin/prodi');
    
    }
    public function admintentang(){
        return view('/admin/tentang');
    
    }
}
