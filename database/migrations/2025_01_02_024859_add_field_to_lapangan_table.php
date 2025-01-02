<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('lapangans', function (Blueprint $table) {
            $table->string('fasilitas')->after('harga');
            $table->text('deskripsi')->after('fasilitas');
            $table->integer('jumlah_lapangan')->after('deskripsi');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lapangan', function (Blueprint $table) {
            //
        });
    }
};
