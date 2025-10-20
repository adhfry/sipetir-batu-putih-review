<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman layanan BUMDes
Route::get('/layanan-bumdes', function () {
    return view('layanan-bumdes');
});
Route::get('/login', function () {
    return view('login');
})->name('login'); // Memberi nama rute agar mudah dipanggil