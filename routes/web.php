<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KursiController;
//import java.io ;

//system.out.println("Hello World");
// Route::get('welcome', function () {
//     return view('welcome');
// });


Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('LatihanLayout', function () {
    return view('LatihanLayout');
});

Route::get('template1', function () {
    return view('template1');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('index', function () {
    return view('index');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route kursi
Route::get('/kursi', [KursiController::class, 'index']);
Route::get('/kursi/tambah', [KursiController::class, 'tambah']);
Route::post('/kursi/store', [KursiController::class, 'store']);
Route::get('/kursi/edit/{id}', [KursiController::class, 'edit']);
Route::post('/kursi/update', [KursiController::class, 'update']);
Route::get('/kursi/hapus/{id}', [KursiController::class, 'hapus']);
Route::get('/kursi/cari', [KursiController::class, 'cari']);

