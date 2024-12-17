<?php

namespace App\Http\Controllers;

use App\Models\JadwalPkl;
use Illuminate\Http\Request;

class JadwalPklController extends Controller
{
    public function index()
    {
        $jadwalPkls = JadwalPkl::all(); // Ambil semua data dari tabel jadwal_pkls
        return response()->json($jadwalPkls);
    }
}

