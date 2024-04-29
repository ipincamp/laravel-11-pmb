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
        Schema::create('wali_orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->enum('untuk', ['ortu', 'wali']);
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('no_hp', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_orang_tuas');
    }
};