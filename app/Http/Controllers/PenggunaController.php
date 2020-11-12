<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PenggunaController extends Controller
{
    public function editPengguna($id){
        $pengguna = DB::table('member')->where('id', $id)->first();
        //dd($aboutus);
        return view('Pengguna.edit_pengguna', compact('pengguna'));
    }

    public function tampilPengguna(){
        $member = DB::table('member')->get();
        // return $member;
        return view('Pengguna.pengguna', ['member' => $member]);
    }

    public function homePengguna(){
        return view('Pengguna.home_pengguna');
    }

    public function enterRoom(){
        return view('Pengguna.enterroom_pengguna');
    }

    public function commerce(){
        return view('Pengguna.commerce_pengguna');
    }

    public function detailprofil(){
        $pengguna = DB::table('member')->where('id', Auth::guard('pengguna')->id())->first();
        // dd($pengguna);
        // dd(Auth::id());
        return view('Pengguna.home_pengguna', ['pengguna' => $pengguna]);
    }

    
    public function setMeeting(Request $request){
        $data['session']  = array(
            'id'             => $request->session()->get('s_id'),
            'topik'           => $request->session()->get('s_topik'),
            'date'          => $request->session()->get('s_date'),
            'time'             => $request->session()->get('s_time'),
            'due'           => $request->session()->get('s_due'),
            'due_time'           => $request->session()->get('s_due_time'),
            'type_meeting'          => $request->session()->get('s_type_meeting'),
            'deskripsi'             => $request->session()->get('s_deskripsi')
        );
        return view('Pengguna.set_meeting',$data);
    }

    public function setMeetingSave(Request $request)
    {
        DB::table('setmeeting')->insert([
            'id' => $request->id,
            'topik' => $request->topik,
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'due' => $request->due,
            'due_time' => $request->due_time,
            'type_meeting' => $request->type_meeting,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/loginpengguna');

    }
    public function EditSetMeeting($id){
        $setmeeting = DB::table('setmeeting')->where('id', $id)->first();
        // dd($setmeeting);
        // return $member;
        return view('Pengguna.edit_setMeeting', ['setmeeting' => $setmeeting]);
    }

    public function editSetMeetingsave(Request $request){
        $method = $request->method();
        if($method=="POST"){
            DB::table('setmeeting')
            ->where('id', $request->input('id'))
            ->update(['topik' => $request->input('topik'),
                      'email' => $request->input('email'),
                      'date' => $request->input('date'),
                      'time' => $request->input('time'),
                      'due' => $request->input('due'),
                      'due_time' => $request->input('due_time'),
                      'type_meeting' => $request->input('type_meeting'),
                      'deskripsi' => $request->input('deskripsi'),
                      ]);
            return redirect('/loginpengguna');
        } else{
            return redirect('/editmeeting');
        }
    }

    public function deleteSetMeeting($id){
        DB::table('setmeeting')->where('id', $id)->delete();
        return redirect('/loginpengguna');
    }

}
