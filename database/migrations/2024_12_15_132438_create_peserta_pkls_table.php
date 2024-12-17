<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('peserta_pkls', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim')->unique();
        $table->string('email')->unique();
        $table->string('no_hp');
        $table->foreignId('perusahaan_id')->constrained('perusahaans')->onDelete('cascade');
        $table->foreignId('jadwal_pkl_id')->constrained('jadwal_pkls')->onDelete('cascade');
        $table->foreignId('laporan_pkl_id')->constrained('laporan_pkl_id')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_pkls');
    }
};
