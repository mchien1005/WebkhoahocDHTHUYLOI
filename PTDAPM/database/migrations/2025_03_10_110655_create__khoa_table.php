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
        Schema::create('_khoa', function (Blueprint $table) {
            $table->string('ma_khoa', 10)->primary();
            $table->string('ten_khoa', 100);
            $table->string('truong_khoa', 20);
            $table->foreign('truong_khoa')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_khoa');
    }
};
