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
        Schema::create('presensi_mapels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mapel')->unsigned()->nullable()->references('id')->on('mata_pelajarans')->constrained();
            $table->char('nis',20);
            $table->char('status',10)->nullable();
            $table->timestamps();

            // $table->foreign('mapel')->references('id')->on('mata_pelajaran')->constrained();
            $table->foreign('nis')->references('nis')->on('siswas')->constrained();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_mapels');
    }
};
