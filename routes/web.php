<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Root direct to login page
Route::get('/', function () {
    return redirect()->route('home');
});

// Halaman Login
Route::get('/login', [AuthController::class, 'login_page'])->name('login');

// Redirect ke google
// Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
// Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// Group middleware to controller
// Route::middleware(['auth', 'preventBackHistory'])->group(function () {
//     Route::get('/home', [DashboardController::class, 'index'])->name('home');
//     Route::get('/formulir_siswa', [DashboardController::class, 'formulir_siswa'])->name('formulir_siswa');
//     Route::get('/formulir_orang_tua', [DashboardController::class, 'formulir_orang_tua'])->name('formulir_orang_tua');
//     Route::get('/upload_berkas', [DashboardController::class, 'upload_berkas'])->name('upload_berkas');
//     Route::get('/akun', [DashboardController::class, 'akun'])->name('akun');
// });

Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/formulir_siswa', [DashboardController::class, 'formulir_siswa'])->name('formulir_siswa');
Route::get('/formulir_orang_tua', [DashboardController::class, 'formulir_orang_tua'])->name('formulir_orang_tua');
Route::get('/upload_berkas', [DashboardController::class, 'upload_berkas'])->name('upload_berkas');
Route::get('/akun', [DashboardController::class, 'akun'])->name('akun');

// Logout Sistem
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
