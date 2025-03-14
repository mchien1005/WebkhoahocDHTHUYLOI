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
        Schema::create('_sinh_vien_de_tai', function (Blueprint $table) {
            $table->string('ma_sv', 20);
            $table->integer('ma_de_tai');
            $table->primary(['ma_sv', 'ma_de_tai']);
            $table->foreign('ma_sv')->references('ma_sv')->on('sinh_vien')->onDelete('cascade');
            $table->foreign('ma_de_tai')->references('ma_de_tai')->on('de_tai_nghien_cuu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sinh_vien_de_tai');
    }
};
