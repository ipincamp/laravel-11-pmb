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
        Schema::create('kelengkapans', function (Blueprint $table) {
            $table->id();
            $table->string('opsi_1', 100);
            $table->string('opsi_2', 100);
            $table->string('opsi_3', 100)->nullable();
            $table->integer('progress')->default(0);
            $table->string('keterangan', 255)->nullable();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelengkapans');
    }
};
