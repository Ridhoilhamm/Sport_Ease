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
        Schema::create('waktu_sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade'); // Relasi ke tabel transaksi
            $table->foreignId('lapangan_id')->constrained('lapangans')->onDelete('cascade'); // Relasi ke tabel lapangan
            $table->time('start_time'); // Kolom untuk waktu mulai
            $table->time('end_time'); // Kolom untuk waktu berakhir
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_sewas');
    }
};
