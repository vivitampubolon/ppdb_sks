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

