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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->enum('jenis_kelamin',['L','P']);
            $table->text('alamat');
            $table->string('no_hp');
            $table->unsignedBigInteger('specialist_id');
            $table->unsignedBigInteger('id_doctor');
            $table->string('keluhan');
            $table->date('tanggal_periksa');
            $table->timestamps();

            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->foreign('id_doctor')->references('id')->on('dokter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
