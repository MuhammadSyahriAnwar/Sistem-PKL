<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PesertaPklController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LaporanPklController;
use App\Http\Controllers\JadwalPklController;

// Menggunakan grup rute untuk mengorganisasi rute dengan prefix 'auth'
Route::prefix('auth')->group(function () {
    Route::post('/register', [RegisterController::class, 'register']);
});

// Rute untuk fitur lainnya (jadwal pkl, peserta pkl, laporan, dll)
Route::get('/jadwal-pkl', [JadwalPklController::class, 'index']);
Route::get('/peserta-pkl', [PesertaPklController::class, 'index']);
Route::get('/perusahaan', [PerusahaanController::class, 'index']);
Route::get('/laporan-pkl', [LaporanPklController::class, 'index']);
