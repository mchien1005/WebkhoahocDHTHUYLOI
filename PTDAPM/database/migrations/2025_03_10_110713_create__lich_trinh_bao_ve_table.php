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
        Schema::create('_lich_trinh_bao_ve', function (Blueprint $table) {
            $table->id('ma_lich_trinh');
            $table->date('ngay_bao_ve');
            $table->time('gio_bao_ve');
            $table->string('dia_diem', 255);
            $table->integer('ma_hoi_dong');
            $table->foreign('ma_hoi_dong')->references('ma_hd')->on('hoi_dong_danh_gia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_lich_trinh_bao_ve');
    }
};
