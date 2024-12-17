<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPkl; // Pastikan Anda punya model ini

class LaporanPklController extends Controller
{
    // Menampilkan laporan PKL
    public function index()
    {
        $laporanPkl = LaporanPkl::all(); // Ambil data laporan PKL
        return view('laporan-pkl.index', compact('laporanPkl')); // Kirim data ke view
    }
}
