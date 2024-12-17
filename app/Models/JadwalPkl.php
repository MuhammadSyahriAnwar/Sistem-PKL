<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPkl extends Model
{
    use HasFactory;

    // Tambahkan properti fillable
    protected $fillable = [
        'tanggal_mulai', // Izinkan mass assignment untuk field ini
        'created_at',
        'updated_at',
    ];
}

