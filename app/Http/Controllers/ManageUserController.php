<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUserController extends Controller
{
    public function dataManageUser(){
        $manageuser = DB::table('member')->get();
        //dd($manageuser);
        return view('manageuser.data_manageuser', ['member' => $manageuser]);
    }

    public function tambahManageUser(){
        return view('manageuser.tambah_manageuser');
    }

    public function tambahManageUserProcess(Request $request){
        $request->validate([
            'nama'      => 'required|min:4',
            'title'     => 'required',
            'role'      => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required',
            'link_room' => 'required',
            'instagram' => 'required',
            'linkedin'  => 'required',
            'line'      => 'required',
            'password'  => 'required|min:6'
        ]);
        
        DB::table('member')->insert([
            'nama'      => $request->nama,
            'title'     => $request->title,
            'role'      => $request->role,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'link_room' => $request->link_room,
            'instagram' => $request->instagram,
            'linkedin'  => $request->linkedin,
            'line'      => $request->line,
            'password'  => $request->password
        ]);
        return redirect('manageuser')->with('status', 'Data berhasil ditambah!');
    }

    public function editManageUser($id){
        $manageuser = DB::table('member')->where('id', $id)->first();
        //dd($aboutus);
        return view('manageuser.edit_manageuser', compact('manageuser'));
    }

    public function editManageUserProcess(Request $request, $id){
        $request->validate([
            'nama'      => 'required|min:4',
            'title'     => 'required',
            'role'      => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required',
            'link_room' => 'required',
            'instagram' => 'required',
            'linkedin'  => 'required',
            'line'      => 'required',
            'password'  => 'required|min:6'
        ]);
        
        DB::table('member')->where('id', $id)->update([
            'nama'      => $request->nama,
            'title'     => $request->title,
            'role'      => $request->role,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'link_room' => $request->link_room,
            'instagram' => $request->instagram,
            'linkedin'  => $request->linkedin,
            'line'      => $request->line,
            'password'  => $request->password
        ]);
        return redirect('manageuser')->with('status', 'Data berhasil diubah!');
    }

    public function hapusManageUser($id){
        DB::table('member')->where('id', $id)->delete();
        return redirect('manageuser')->with('status', 'Data berhasil dihapus!');
    }
}
