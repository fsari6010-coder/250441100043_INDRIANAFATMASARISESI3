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
        Schema::create('_sewas', function (Blueprint $table) {
            $table->id();
            $table->bigintunsigned('kendaraan_id');
            $table->varchar('nama_penyewa');
            $table->date('tanggal_mulai');
            $table->inreger('lama_sewa');
            $table->integer('total_biaya');
            $table->enum('status');

          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sewas');
    }
};
