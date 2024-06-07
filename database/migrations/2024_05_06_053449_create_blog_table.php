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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('judul',255);
            $table->unsignedBigInteger('id_doctor');
            $table->unsignedBigInteger('id_category');
            $table->string('slug', 255);
            $table->string('body');
            $table->string('img')->nullable();
            $table->string('kutipan', 255);
            $table->dateTime('release_date');
            $table->timestamps();

            $table->foreign('id_doctor')->references('id')->on('dokter')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
