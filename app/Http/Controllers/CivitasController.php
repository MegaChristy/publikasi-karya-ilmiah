<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyailmiah;

class CivitasController extends Controller
{
    public function civitaseditprofile(){
        return view('civitaseditprofile');
    }

    public function civitasprofile(){
        return view('civitasprofile');
    }
    
    public function civitaskaryailmiah(Request $request){
        if($request->has('cari')){
            $civitaskaryailmiah = \App\civitaskaryailmiah::where('Judul','LIKE','%' . $request->cari . '%')->get();
        } else{
            $civitaskaryailmiah = \App\civitaskaryailmiah::all();
        }
        return view('civitaskaryailmiah',['karyailmiah' => $civitaskaryailmiah]);
    }

    public function civitaspenulis(Request $request){
        if($request->has('cari')){
            $penulis = karyailmiah::where('Penulis','LIKE','%' . $request->cari . '%')->get();
        } else{
            $penulis = karyailmiah::all();
        }
        return view('civitaspenulis', compact('penulis'));
    }

    public function civitastentang(){
        return view('civitastentang');
    }

    public function civitasprodi(){
        return view('civitasprodi');
    }
    public function civitasrequest(){
        
        $karyailmiah = karyailmiah::all();
        return view('civitaskaryailmiah');
    }
}
