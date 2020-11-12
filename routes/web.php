<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin')->name('login');
Route::get('home', function(){
    return view('home');
});

Route::get('aboutus', 'AboutUsController@dataAboutUs');
Route::get('aboutus/tambah', 'AboutUsController@tambahAboutUs');
Route::post('aboutus', 'AboutUsController@tambahAboutUsProcess');
Route::get('aboutus/edit/{id}', 'AboutUsController@editAboutUs');
Route::patch('aboutus/{id}', 'AboutUsController@editAboutUsProcess');
Route::delete('aboutus/{id}', 'AboutUsController@hapusAboutUs');

Route::get('manageuser', 'ManageUserController@dataManageUser');
Route::get('manageuser/tambah', 'ManageUserController@tambahManageUser');
Route::post('manageuser', 'ManageUserController@tambahManageUserProcess');
Route::get('manageuser/edit/{id}', 'ManageUserController@editManageUser');
Route::patch('manageuser/{id}', 'ManageUserController@editManageUserProcess');
Route::delete('manageuser/{id}', 'ManageUserController@hapusManageUser');

Route::get('/pengguna', function(){
    return view('Pengguna/pengguna');
});
Route::get('/home_pengguna', function(){
    return view('Pengguna/home_pengguna');
});
Route::post('/loginpengguna', 'LoginPengguna@masuk')->name('loginpengguna');
Route::get('/edit_pengguna', function(){
    return view('Pengguna/edit_pengguna');
});
// Route::get('/loginpengguna', function(){
//     return view('Pengguna/home_pengguna');
// });
Route::get('/started_pengguna', function(){
    return view('Pengguna/started_pengguna');
});
Route::get('Pengguna/edit/{id}', 'PenggunaController@editPengguna');
Route::get('home_pengguna', 'PenggunaController@homePengguna');
Route::get('Pengguna', 'PenggunaController@tampilPengguna');
Route::get('enter_room', 'PenggunaController@enterRoom');
Route::get('commerce', 'PenggunaController@commerce');
Route::get('/loginpengguna', 'PenggunaController@detailprofil');

Route::get('set_meeting', 'PenggunaController@setMeeting');
Route::post('set_meeting/save', 'PenggunaController@setMeetingSave');
Route::get('editmeeting/{id}', 'PenggunaController@EditSetMeeting');
Route::post('editmeeting/save', 'PenggunaController@editSetMeetingsave');
Route::get('deletemeeting/{id}', 'PenggunaController@deleteSetMeeting');