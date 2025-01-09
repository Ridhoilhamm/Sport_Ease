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
        Schema::table('gambar_lapangans', function (Blueprint $table) {
    $table->enum('tipe', ['gambar1', 'gambar2','gambar3','gambar4','gambar5'])->after('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gambar_lapangans', function (Blueprint $table) {
            //
        });
    }
};
