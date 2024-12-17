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
        // Menambahkan kolom laporan_pkl_id pada tabel peserta_pkls
        Schema::table('peserta_pkls', function (Blueprint $table) {
            $table->unsignedBigInteger('laporan_pkl_id')->nullable()->after('jadwal_pkl_id');
        });

        // Membuat tabel laporan_pkls
        Schema::create('laporan_pkls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peserta_pkl_id')->constrained()->onDelete('cascade');
            $table->string('judul_laporan');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus kolom laporan_pkl_id dari tabel peserta_pkls
        Schema::table('peserta_pkls', function (Blueprint $table) {
            $table->dropColumn('laporan_pkl_id');
        });

        // Menghapus tabel laporan_pkls
        Schema::dropIfExists('laporan_pkls');
    }
};
