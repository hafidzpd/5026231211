<?php

use Illuminate\Support\Facades\Route;
//import java.io ;

//system.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});


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
