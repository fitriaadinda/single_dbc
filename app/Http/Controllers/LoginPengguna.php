<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use Auth;

class LoginPengguna extends Controller
{
    function masuk(Request $request){
        $data= Pengguna::where(
            'email', $request->email
        )->where(
            'password', $request->password
        )->get();

        if(count($data)>0){
            Auth::guard('pengguna')->LoginUsingId($data[0]['id']);
            // return view('Pengguna.home_pengguna');
            // dd('LOGIN BERHASIL');
            return redirect('/loginpengguna');
        }
        else{
            return "LOGIN GAGAL";
        }
    }
    function keluar(){
        if(Auth::guard('pengguna')->check()){
            Auth::guard('pengguna')->logout();
        }
        return redirect('masuk');
    }
}
