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
    Schema::create('detail__transaksi_apotiks', function (Blueprint $table) {
    $table->id();
    $table->foreignId('transaksi_id');
    $table->foreignId('ID_obat');
    $table->integer('quantity');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__transaksi_apotiks');
    }
};
