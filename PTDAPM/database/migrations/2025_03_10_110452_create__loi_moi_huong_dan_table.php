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
        Schema::create('_loi_moi_huong_dan', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sv', 20);
            $table->string('ma_gv', 20);
            $table->integer('ma_de_tai');
            $table->enum('trang_thai', ['Chờ duyệt', 'Chấp nhận', 'Từ chối']);
            $table->timestamp('thoi_gian_gui')->useCurrent();
            $table->foreign('ma_sv')->references('ma_sv')->on('sinh_vien')->onDelete('cascade');
            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
            $table->foreign('ma_de_tai')->references('ma_de_tai')->on('de_tai_nghien_cuu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_loi_moi_huong_dan');
    }
};
