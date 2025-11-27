<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('name'); // nama lengkap
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['pasien','psikolog','admin'])->default('pasien');
            $table->enum('status_akun', ['aktif','nonaktif'])->default('aktif');
            $table->boolean('is_verified')->default(true); // untuk psikolog
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
