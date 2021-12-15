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
    return view('welcome');
});

Route::get('tugasjs', function () {
    return view('tugas_js');
});

Route::get('tugas4', function () {
    return view('tugas_4');
});

Route::get('praktikum2', function () {
    return view('praktikum_2');
});

Route::get('ets2021', "ViewController@showETS");

Route::get('tugasphp', "ViewController@tugasPHP");

Route::post('results', "ViewController@showResults");

//route CRUD pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/detail/{id}', 'PegawaiController@detail');

//route CRUD tugas
Route::get('/tugas', 'TugasController@index');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::post('/tugas/store', 'TugasController@store');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');

// Route CRUD absen
Route::get('/absen', 'AbsenController@index');
Route::get('/absen/tambah', 'AbsenController@tambah');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

//route CRUD beras
Route::get('/beras', 'BerasController@index');
Route::get('/beras/tambah', 'BerasController@tambah');
Route::post('/beras/store', 'BerasController@store');
Route::get('/beras/edit/{id}', 'BerasController@edit');
Route::post('/beras/update', 'BerasController@update');
Route::get('/beras/hapus/{id}', 'BerasController@hapus');
Route::get('/beras/cari', 'BerasController@cari');
Route::get('/beras/detail/{id}', 'BerasController@detail');

//route CRUD keranjangbelanja
Route::get('/belanja', 'BelanjaController@index');
Route::get('/belanja/tambah', 'BelanjaController@tambah');
Route::post('/belanja/store', 'BelanjaController@store');
Route::get('/belanja/hapus/{id}', 'BelanjaController@hapus');
