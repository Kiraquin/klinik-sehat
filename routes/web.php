<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PetPemeriksaanController;

use App\Http\Controllers\PasienController;


Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::post('/admin/dashboard', [PasienController::class, 'store'])->name('pasien.store');



Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::post('/admin/calculate', [AdminController::class, 'calculate'])->name('admin.calculate');


Route::get('/admin/pemeriksaans', [PemeriksaanController::class, 'index'])->name('admin.pemeriksaans.index');
Route::post('/admin/pemeriksaans', [PemeriksaanController::class, 'store'])->name('admin.pemeriksaans.store');
Route::put('/admin/pemeriksaans/{id}', [PemeriksaanController::class, 'update'])->name('admin.pemeriksaans.update');
Route::delete('/admin/pemeriksaans/{id}', [PemeriksaanController::class, 'destroy'])->name('admin.pemeriksaans.destroy');

Route::get('/petugas/pemeriksaans', [PetPemeriksaanController::class, 'index'])->name('petugas.pemeriksaans.index');
Route::post('/petugas/pemeriksaans', [PetPemeriksaanController::class, 'store'])->name('petugas.pemeriksaans.store');
Route::put('/petugas/pemeriksaans/{id}', [PetPemeriksaanController::class, 'update'])->name('petugas.pemeriksaans.update');
Route::delete('/petugas/pemeriksaans/{id}', [PetPemeriksaanController::class, 'destroy'])->name('petugas.pemeriksaans.destroy');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk dashboard admin dan petugas
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.dashboard');


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

