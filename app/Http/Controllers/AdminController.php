<?php

namespace App\Http\Controllers;
use App\karyailmiah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function adminprodi(Request $request){
        if ($request->has('cari')){
            $karyailmiah = karyailmiah::where('Judul','LIKE','%' . $request->cari . '%')->get();    
        }else{
            $karyailmiah = karyailmiah::all();
        }
        return view('/admin/prodi', compact('karyailmiah'));
    
    }
    public function admintentang(){
        return view('/admin/tentang');
    
    }

    public function adminpenulis(Request $request){
        if($request->has('cari')){
            $penulis = karyailmiah::where('Penulis','LIKE','%' . $request->cari . '%')->get();
        } else{
            $penulis = karyailmiah::all();
        }
        return view('/admin/penulis', compact('penulis'));
    }

    public function sisteminformasi(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'S1 Sistem Informasi');
        return view('/adminprodi/sisteminformasi',['karyailmiah' => $ki]);
    }

    public function informatika(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'S1 Informatika');
        return view('/adminprodi/informatika',['karyailmiah' => $ki]);
    }

    public function teknologikomputer(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'D3 Teknologi Komputer');
        return view('/adminprodi/teknologikomputer',['karyailmiah' => $ki]);
    }

    public function teknikelektro(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'S1 Teknik Elektro');
        return view('/adminprodi/teknikelektro',['karyailmiah' => $ki]);
    }

    public function trpl(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'D4 Teknologi Rekayasa Perangkat Lunak');
        return view('/adminprodi/trpl',['karyailmiah' => $ki]);
    }

    public function teknologiinformasi(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'D3 Teknologi Informasi');
        return view('/adminprodi/teknologiinformasi',['karyailmiah' => $ki]);
    }

    public function manajemenrekayasa(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'S1 Manajemen Rekayasa');
        return view('/adminprodi/manajemenrekayasa',['karyailmiah' => $ki]);
    }

    public function teknikbioproses(){
        $karyailmiah = karyailmiah::all();
        $ki = $karyailmiah->where('ProgramStudi', 'S1 Teknik Bioproses');
        return view('/adminprodi/teknikbioproses',['karyailmiah' => $ki]);
    }

    public function getAllReject(){
        $file = DB::table('karyailmiah')->where('status','Rejected')->get();
        return view('admin.rejectedkaryailmiah',compact('file'));
    }

    public function publish(Request $request, $id){
        $data = karyailmiah::find($id);
        $data->status = "Published";
        $data->save();
        return redirect('/admin/koleksi');
    }

    public function reject(Request $request, $id){ 
        $data = karyailmiah::find($id);
        $data->status = "Rejected";
        $data->save();
        return redirect('/admin/rejectedkaryailmiah');
    }
}
