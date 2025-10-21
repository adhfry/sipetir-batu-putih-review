<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman layanan BUMDes
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/laporan-desa', function () {
    return view('laporan-desa');
});

Route::get('/laporan-bumdes', function () {
    return view('laporan-bumdes');
});

Route::get('/manajemen-pengguna', function () {
    return view('manajemen-pengguna');
});

// Halaman detail layanan
Route::get('/layanan-publik', function () {
    return view('layanan-publik');
});

Route::get('/layanan-dukcapil', function () {
    return view('layanan-dukcapil');
});

Route::get('/layanan-bumdes', function () {
    return view('layanan-bumdes');
});
Route::get('/login', function () {
    return view('login');
})->name('login'); // Memberi nama rute agar mudah dipanggil