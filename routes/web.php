<?php

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

//route halaman utama

Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'LoginController@login');
Route::get('/homecivitas', 'HomeController@home');

Route::get('/karyailmiah' , 'KaryaIlmiahController@show');
Route::get('/admin' , 'AdminController@show');
Route::get('/akun' , 'AkunController@show');
Route::get('/civitaseditprofile' , 'CivitasController@civitas');
Route::get('/dashboard' , 'DashboardController@show');
Route::get('/kategorikaryailmiah' , 'KategoriKaryaIlmiahController@show');
Route::get('/notifikasi' , 'NotifikasiController@show');
Route::get('/sessionlog' , 'SessionLogController@show');
Route::get('/visitor' , 'VisitorController@show');

Route::get('/' , 'KaryaIlmiahController@show');
Route::get('/tentang', 'TentangController@index');