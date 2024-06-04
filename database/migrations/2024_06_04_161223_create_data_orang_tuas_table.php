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
        Schema::create('data_orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('no_hp_ortu');
            $table->foreignId('mahasiswa_id')->constrained(
                table: 'data_mahasiswas',
                indexName: 'data_orang_tuas_mahasiswa_id_fk',
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orang_tuas');
    }
};
