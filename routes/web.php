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


Route::get('belajar', function () {
    return 'SELAMAT MENIKMATI SORE {[>.<]}';
});

Route::get('tampil/{aku}', function ($aku) {
    Echo "Nilai parameter adalah ".$aku;
});

Route::get('jumlah/{satu}/{dua}', function ($satu,$dua){
    $hasil = $satu+$dua;
    Echo "Nilai ".$hasil;
});

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/form', 'MahasiswaController@form');
Route::post('/mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('dosen', 'DosenController@index');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::get('dosen/edit/{id}', 'DosenController@edit');
Route::post('dosen/simpan', 'DosenController@simpandata');
Route::post('dosen/ubahdata', 'DosenController@ubahdata');
Route::get('dosen/hapus/{id}', 'DosenController@hapusdata');
Route::get('dosen/satu', 'DosenController@tampildata');
Route::get('dosen/print', 'DosenController@cetakpdf');
Route::get('/excel', 'MahasiswaController@laporanExcel');
