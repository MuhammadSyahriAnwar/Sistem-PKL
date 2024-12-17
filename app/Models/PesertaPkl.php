<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaPkl extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'no_hp',
        'perusahaan_id',
        'jadwal_pkl_id',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function jadwalPkl()
    {
        return $this->belongsTo(JadwalPkl::class);
    }
}
