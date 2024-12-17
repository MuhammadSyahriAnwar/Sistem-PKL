<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaPkl; // Pastikan Anda punya model ini

class PesertaPklController extends Controller
{
    // Menampilkan daftar peserta PKL
    public function index()
    {
        $pesertaPkl = PesertaPkl::all(); // Ambil data dari tabel peserta_pkl
        return view('peserta-pkl.index', compact('pesertaPkl')); // Kirim data ke view
    }
}
