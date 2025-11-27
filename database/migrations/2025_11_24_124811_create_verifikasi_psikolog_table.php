<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('verifikasi_psikolog', function (Blueprint $table) {
            $table->id(); // id_verifikasi
            $table->foreignId('psikolog_id')->constrained('psikolog')->onDelete('cascade');
            $table->date('tanggal_verifikasi');
            $table->string('diverifikasi_oleh');
            $table->enum('hasil', ['disetujui','ditolak']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('verifikasi_psikolog');
    }
};
