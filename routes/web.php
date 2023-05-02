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
    return view('welcome');
});

Route::get('/pilih_lokasi_sekolah', function () {
    return view('pilih_lokasi_sekolah');
});

Route::get('/pilih_jenjang', function () {
    return view('pilih_jenjang');
});

Route::get('/pilih_tahun_ajaran', function () {
    return view('pilih_tahun_ajaran');
});

Route::get('/pilih_program', function () {
    return view('pilih_program');
});

Route::get('/lengkapi_data_pesdik', function () {
    return view('lengkapi_data_pesdik');
});

Route::get('/formulir_pesdik', function () {
    return view('formulir_pesdik');
});

Route::get('/formulir_ortu', function () {
    return view('formulir_ortu');
});

Route::get('/formulir_asesmen1', function () {
    return view('formulir_asesmen1');
});

Route::get('/formulir_asesmen2', function () {
    return view('formulir_asesmen2');
});

Route::get('/formulir_asesmen3', function () {
    return view('formulir_asesmen3');
});

Route::get('/formulir_asesmen4', function () {
    return view('formulir_asesmen4');
});
Route::get('/level', function () {
    return view('level');
});

Route::get('/customerservice', function () {
    return view('customerservice');
});

Route::get('/persyaratan', function () {
    return view('persyaratan');
});

Route::get('/informasi', function () {
    return view('informasi');
});




