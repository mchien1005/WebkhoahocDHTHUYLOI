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
        Schema::create('_sinh_vien', function (Blueprint $table) {
            $table->string('ma_sv', 20)->primary();
            $table->string('ten_sv', 100);
            $table->string('lop', 50);
            $table->enum('gioi_tinh', ['Nam', 'Nữ', 'Khác']);
            $table->year('nam_sinh');
            $table->string('ma_khoa', 10);
            $table->string('email', 100);
            $table->foreign('email')->references('email')->on('tai_khoan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sinh_vien');
    }
};
