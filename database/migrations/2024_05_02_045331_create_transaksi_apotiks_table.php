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
        Schema::create('transaksi_apotiks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Kode_transaksi')->unique();
            $table->foreignId('ID_user');
            $table->bigInteger('Total_amount');
            $table->integer('ID_detail_transaksi');
            $table->boolean('status_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_apotiks');
    }
};
