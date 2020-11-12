<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $data= User::where(
            'email', $request->email
        )->where(
            'password', $request->password
        )->get();

        if(count($data)>0){
            Auth::guard('web')->LoginUsingId($data[0]['id']);
            // dd('LOGIN BERHASIL');
            
            return view('home');
        }
        else{
            return redirect('login')->with('status', 'Email atau password salah!');
            //return "LOGIN GAGAL";
        }
        // dd(\Auth::attempt([
        //     'email'     => $request->email,
        //     'password'  => $request->password
        // ]));
    }
}
