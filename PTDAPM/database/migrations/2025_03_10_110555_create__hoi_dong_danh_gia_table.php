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
        Schema::create('_hoi_dong_danh_gia', function (Blueprint $table) {
            $table->id('ma_hd');
            $table->integer('so_luong_gv')->check('so_luong_gv > 0');
            $table->integer('ma_de_tai');
            $table->foreign('ma_de_tai')->references('ma_de_tai')->on('de_tai_nghien_cuu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hoi_dong_danh_gia');
    }
};
