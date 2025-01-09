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
        Schema::create('gambar_lapangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lapangan_id')->constrained()->onDelete('cascade'); // Relasi ke lapangan
            $table->string('url'); // URL gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_lapangans');
    }
};
