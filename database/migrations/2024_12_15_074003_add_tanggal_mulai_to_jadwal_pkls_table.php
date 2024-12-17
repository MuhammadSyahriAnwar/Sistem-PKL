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
        Schema::table('jadwal_pkls', function (Blueprint $table) {
            if (!Schema::hasColumn('jadwal_pkls', 'tanggal_mulai')) {
                $table->date('tanggal_mulai')->nullable();
            }
        });
    }
    
    public function down()
    {
        Schema::table('jadwal_pkls', function (Blueprint $table) {
            $table->dropColumn('tanggal_mulai');
        });
    }
    


};
