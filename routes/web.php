<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']); 

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang",
        "nim" => "72190326",
        "name" => "Reyhan Yosafat Silalahi",
        "email" => "reyhan.silalahi@students.ukdw.ac.id",
        "image" => "reihan.jpg"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/create', [MahasiswaController::class, 'create']);

Route::get('/simpan', [MahasiswaController::class, 'store']);