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
             // Menambahkan kolom id_lapangan dengan foreign key ke tabel lapangan
        $table->unsignedBigInteger('id_lapangan')->nullable()->after('id_user');

        // Menambahkan foreign key constraint untuk kolom id_lapangan
        $table->foreign('id_lapangan')->references('id')->on('lapangans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            //
        });
    }
};
