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
        Schema::create('presensi_pegawais', function (Blueprint $table) {
            $table->id();
            $table->char('nip',20);
            $table->time('pegawai_datang')->nullable();
            $table->time('pegawai_pulang')->nullable();
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('pegawais')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_pegawais');
    }
};
