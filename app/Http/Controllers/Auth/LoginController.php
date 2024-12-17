<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan form login
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan file view berada di resources/views/auth/login.blade.php
    }

    /**
     * Menangani proses login
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login, redirect ke halaman utama
            return redirect()->intended('/'); // Sesuaikan dengan route halaman utama
        }

        // Jika gagal login, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau Password salah!',
        ])->withInput($request->only('email'));
    }

    /**
     * Logout pengguna
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect ke halaman login setelah logout

    }

    
}
