<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk dashboard admin dan petugas
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/petugas/dashboard', [PetugasController::class, 'index'])->name('petugas.dashboard');


// Route Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route untuk Jam Operasional
Route::get('/jam-operasional', function () {
    return view('jam_operasional');
})->name('jam.operasional');

// Route untuk Hubungi Kami
Route::get('/hubungi-kami', function () {
    return view('hubungi_kami');
})->name('hubungi.kami');

// Route untuk Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentang_kami');
})->name('tentang.kami');

// Route untuk Pemeriksaan
Route::get('/pemeriksaan', function () {
    return view('pemeriksaan');
})->name('pemeriksaan');

