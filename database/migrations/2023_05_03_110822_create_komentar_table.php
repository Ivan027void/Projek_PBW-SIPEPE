<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->id('id_komentar');
            $table->text('komentar');
            $table->date('tanggal_komentar');
            $table->string('dosen_nip');
            $table->unsignedBigInteger('penelitian_id');
            $table->foreign('dosen_nip')->references('npm')->on('users')->where('roles', 'dosen');
            $table->foreign('penelitian_id')->references('id')->on('penelitian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar');
    }
};