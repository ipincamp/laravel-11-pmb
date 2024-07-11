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
        Schema::create('upload_buktis', function (Blueprint $table) {
            $table->id();
            $table->enum('metode', ['cash', 'transfer'])->default('transfer');
            $table->string('tujuan');
            $table->integer('jumlah');
            $table->date('tanggal_bayar');
            $table->string('bukti');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_buktis');
    }
};
