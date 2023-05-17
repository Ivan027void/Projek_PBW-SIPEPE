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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penelitian');
            $table->string('nama_file');
            $table->string('path_file');
            $table->text('komentar')->nullable();
            $table->date('tanggal_komentar')->nullable();
            $table->foreign('id_penelitian')->references('id')->on('penelitian');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
