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
        Schema::table('transaksis', function (Blueprint $table) {
            $table->string('lapangan');
            $table->string('tanggal_sewa');
            $table->string('jam_sewa');
            $table->integer('harga');
            $table->string('nota_image');
            $table->enum('status', ['pending', 'menunggu hari', 'selesai'])->default('pending'); // Status pemesanan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            //
        });
    }
};
