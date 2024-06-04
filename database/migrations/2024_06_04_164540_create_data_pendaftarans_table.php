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
        Schema::create('data_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->enum('jalur_seleksi', ['UNDANGAN', 'RAPOR', 'BEASISWA', 'TES'])->default('UNDANGAN');
            $table->foreignId('prodi_utama_id')->constrained(
                table: 'data_prodis',
                indexName: 'data_pendaftarans_prodi_utama_id_fk',
            )->onDelete('cascade');
            $table->foreignId('prodi_dua_id')->constrained(
                table: 'data_prodis',
                indexName: 'data_pendaftarans_prodi_dua_id_fk',
            )->onDelete('cascade');
            $table->foreignId('prodi_tiga_id')->nullable()->constrained(
                table: 'data_prodis',
                indexName: 'data_pendaftarans_prodi_tiga_id_fk',
            )->onDelete('cascade');
            $table->foreignId('mahasiswa_id')->constrained(
                table: 'data_mahasiswas',
                indexName: 'data_pendaftarans_mahasiswa_id_fk',
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pendaftarans');
    }
};
