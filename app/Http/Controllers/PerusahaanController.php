<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan; // Pastikan Anda punya model ini

class PerusahaanController extends Controller
{
    // Menampilkan daftar perusahaan
    public function index()
    {
        $perusahaan = Perusahaan::all(); // Ambil data perusahaan
        return view('perusahaan.index', compact('perusahaan')); // Kirim data ke view
    }
}
