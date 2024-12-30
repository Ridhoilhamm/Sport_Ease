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
        Schema::create('detaillapangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lapangan_id')->constrained()->onDelete('cascade'); // Relasi ke tabel Lapangan
            $table->text('deskripsi');
            $table->json('fasilitas');  // Untuk fasilitas bisa disimpan sebagai array JSON
            $table->json('gambar');     // Untuk menyimpan multiple gambar (bisa berupa array JSON)
            $table->integer('jumlah_lapangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detaillapangans');
    }
};
