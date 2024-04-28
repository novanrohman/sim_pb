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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('nip', length: 20);
            $table->string('telp_guru')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jenis_kelamin')->nullable();
            $table->text('alamat_guru')->nullable();
            $table->bigInteger('id_mapel')->unsigned()->nullable();
            $table->foreign('id_mapel')->references('id')->on('mata_pelajarans');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
