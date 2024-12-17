<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('perusahaans', function (Blueprint $table) {
            $table->string('nama_perusahaan')->after('id'); // Menambahkan kolom nama_perusahaan
        });
    }
    
    public function down()
    {
        Schema::table('perusahaans', function (Blueprint $table) {
            $table->dropColumn('nama_perusahaan'); // Hapus kolom saat rollback
        });
    }
};
