<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CivitasController extends Controller
{
    public function civitaseditprofile(){
        return view('civitaseditprofile');
    }

    public function civitasprofile(){
        return view('civitasprofile');
    }
}
