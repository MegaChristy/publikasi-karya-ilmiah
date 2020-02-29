<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karya_ilmiah;

class KaryaIlmiahController extends Controller
{
    public function show(){
        $karya = karya_ilmiah::all();
        return view('index',compact('karya')); 
    }
}
