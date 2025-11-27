<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psikolog', function (Blueprint $table) {
            $table->id(); // id_psikolog
            $table->string('nama');
            $table->string('no_sipp')->unique();
            $table->string('universitas');
            $table->year('tahun_lulus');
            $table->string('spesialisasi');
            $table->integer('pengalaman'); // tahun
            $table->string('dokumen_sipp'); // path file
            $table->enum('status_verifikasi', ['pending','disetujui','ditolak'])->default('pending');
            $table->text('catatan_admin')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('psikolog');
    }
};
