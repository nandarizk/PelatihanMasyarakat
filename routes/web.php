<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 1. Tampilkan Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// 2. Tampilkan Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// 3. Proses Aksi Submit Form Login
Route::post('/login', function (Request $request) {
    // Catatan: Nanti di sini kita pasang logika autentikasi database (Auth::attempt)
    // Untuk saat ini, langsung arahkan (redirect) ke Beranda
    return redirect()->route('beranda');
})->name('login.post');