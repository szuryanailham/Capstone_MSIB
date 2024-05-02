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
        Schema::create('stok__obats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kode_obat')->unique();
            $table->string('Nama_obat');
            $table->foreignId('category_id');
            $table->text('resep');
            $table->text('keterangan');
            $table->bigInteger('stok');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok__obats');
    }
};
