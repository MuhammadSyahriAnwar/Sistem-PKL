<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk tampilkan halaman registrasi (form)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Rute untuk proses registrasi (post request)
Route::post('/register', [RegisterController::class, 'register']);

// Route untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('home'); // Ganti 'front.home' dengan nama view front-end Anda
})->name('home');

Route::get('/', function () {
    return view('home');
});
