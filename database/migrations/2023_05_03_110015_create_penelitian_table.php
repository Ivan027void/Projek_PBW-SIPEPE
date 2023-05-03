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
        Schema::create('penelitian', function (Blueprint $table) {
            $table->id();
            $table->string('judul_penelitian');
            $table->string('deskripsi');
            $table->date('tanggal_pengajuan');
            $table->string('status_persetujuan')->nullable();
            $table->date('tanggal_persetujuan')->nullable();
            $table->string('dosen_nip');
            $table->string('mahasiswa_npm');
            $table->timestamps();
            
            $table->foreign('dosen_nip')->references('npm')->on('users')->where('roles', 'dosen');
            $table->foreign('mahasiswa_npm')->references('npm')->on('users')->where('roles', 'mahasiswa');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penelitian');
    }
};
