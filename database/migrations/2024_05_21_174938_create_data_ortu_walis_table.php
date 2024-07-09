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
        Schema::create('data_ortu_walis', function (Blueprint $table) {
            $table->id();
            $table->enum('untuk', ['orang_tua', 'wali'])->default('orang_tua');
            $table->string('nama_ayah', 100)->nullable();
            $table->string('nama_ibu', 100)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ortu_walis');
    }
};
