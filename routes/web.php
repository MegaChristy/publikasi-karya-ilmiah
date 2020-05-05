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

<<<<<<< HEAD
Route::get('/login', 'LoginController@login');
Route::get('/homecivitas', 'HomeController@home');
Route::get('/civitaseditprofile' , 'CivitasController@civitas');
=======
>>>>>>> 41e2e75b43c3415317ddcb11935bafb296ddf164

Route::get('/' , 'KaryaIlmiahController@show');
Route::get('/tentang', 'TentangController@index');
