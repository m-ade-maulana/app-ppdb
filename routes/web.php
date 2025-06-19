<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FormulirOrangTuaController;
use App\Http\Controllers\admin\FormulirSiswaController;

// Root direct to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman Login
Route::get('/login', [AuthController::class, 'login_page'])->name('login');

// Redirect ke google
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// Group middleware to controller
Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/akun', [DashboardController::class, 'akun'])->name('akun');

    // Formulir Siswa
    Route::get('/formulir_siswa', [FormulirSiswaController::class, 'index'])->name('formulir_siswa');
    Route::post('/formulir_siswa/save', [FormulirSiswaController::class, 'save_siswa'])->name('save_siswa');

    // Formulir orang tua
    Route::get('/formulir_orang_tua', [FormulirOrangTuaController::class, 'index'])->name('formulir_orang_tua');
    Route::post('/formulir_orang_tua/save', [FormulirOrangTuaController::class, 'save_orang_tua'])->name('save_orang_tua');

    // Upload Berkas
    Route::get('/upload_berkas', function () {
        return view('uploads.index');
    })->name('upload_berkas');
});

// Logout Sistem
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
