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

Route::get('/', function () {
    return view('index');
});

Route::get('/homecivitas', 'HomeController@home');
Route::get('/civitaseditprofile', 'CivitasController@civitaseditprofile');
Route::get('/civitasprofile', 'CivitasController@civitasprofile');
Route::get('/civitaskaryailmiah', 'CivitasController@civitaskaryailmiah');
Route::get('/civitaspenulis', 'CivitasController@civitaspenulis');
Route::get('/civitastentang', 'CivitasController@civitastentang');
Route::get('/civitasprodi', 'CivitasController@civitasprodi');

Route::get('/homeadmin', 'HomeController@homeadmin');
Route::get('/Tentang','TentangController@About');
Route::get('/karyailmiah' , 'KaryailmiahController@index');
Route::get('/penulis' , 'PenulisController@index');
Route::post('/proses_login', 'AutentikasiController@login');
Route::get('/prodi' , 'ProdiController@prodi');
Route::get('/viewprodi' , 'ViewProdiController@viewprodi');
Route::get('/civitasrequest' , 'CivitasController@civitasrequest');
Route::get('/login', function () {
    return view('login');
});
Route::get('/Publikasi' , 'PublikasiController@index')->name('Publikasi.index');
Route::get('/tambah' , 'PublikasiController@create')->name('Publikasi.create');
Route::PUT('/store' , 'PublikasiController@store')->name('Publikasi.store');