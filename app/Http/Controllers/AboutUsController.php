<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function dataAboutUs(){
        $aboutus = DB::table('aboutus')->get();
        //dd($aboutus);
        //return $aboutus;
        return view('aboutus.data_aboutus', ['aboutus' => $aboutus]);
    }
    
    public function tambahAboutUs(){
        return view('aboutus.tambah_aboutus');
    }

    public function tambahAboutUsProcess(Request $request){
        $request->validate([
            'deskripsi' => 'required|min:5'
        ]);

        DB::table('aboutus')->insert([
            'deskripsi' => $request->deskripsi
        ]);
    return redirect('aboutus')->with('status', 'Deskripsi berhasil ditambah!');
    }

    public function editAboutUs($id){

        $aboutus = DB::table('aboutus')->where('id', $id)->first();
        return view('aboutus.edit_aboutus', compact('aboutus'));
    }

    public function editAboutUsProcess(Request $request, $id){
        $request->validate([
            'deskripsi' => 'required|min:5'
        ]);
        
        DB::table('aboutus')->where('id', $id)->update([
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('aboutus')->with('status', 'Deskripsi berhasil diubah!');
    }

    public function hapusAboutUs($id){
        DB::table('aboutus')->where('id', $id)->delete();
        return redirect('aboutus')->with('status', 'Deskripsi berhasil dihapus!');
    }
}