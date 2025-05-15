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
