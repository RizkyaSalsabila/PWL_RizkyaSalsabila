<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//menggunakan rute 'GET' dengan url '/hello', kemudian mengembalikan teks 'Hello World'
Route::get('/hello', function () {
    return 'Hello World';
});

//menggunakan rute 'GET' dengan url '/world', kemudian mengembalikan teks 'World'
Route::get('/world', function () {
    return 'World';
});

//menggunakan rute 'GET' dengan url '/', kemudian mengembalikan teks 'Selamat Datang'
Route::get('/', function () {
    return 'Selamat Datang';
});

/*menggunakan rute 'GET' dengan url '/about', 
kemudian mengembalikan teks NIM - Nama (2341720056 - Rizkya Salsabila) */
Route::get('/about', function () {
    return '2341720056 - Rizkya Salsabila';
});

/* menggunakan rute 'GET' dengan url yang memakai parameter dinamis {name},
dan disimpan dalam variabel $name, kemudian mengembalikan teks 
'gabungan string dg nilai parameter' */
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});