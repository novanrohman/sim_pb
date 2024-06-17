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
        Schema::create('jadwal_mapels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas')->unsigned()->nullable()->references('id')->on('kelas')->constrained()->onDelete('cascade');
            $table->foreignId('id_mapel')->unsigned()->nullable()->references('id')->on('mata_pelajarans')->constrained()->onDelete('cascade');
            $table->char('id_guru', length:20)->nullable();
            $table->timestamps();
            // $table->foreign('id_kelas')->references('id')->on('kelas')->constrained()->onDelete('cascade');
            // $table->foreign('id_mapel')->references('id')->on('mata_pelajarans')->constrained()->onDelete('cascade');
            $table->foreign('id_guru')->references('nip')->on('gurus')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mapels');
    }
};
