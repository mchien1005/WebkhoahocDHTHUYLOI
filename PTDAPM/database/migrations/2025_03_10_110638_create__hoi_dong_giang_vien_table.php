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
        Schema::create('_hoi_dong_giang_vien', function (Blueprint $table) {
            $table->integer('ma_hd');
            $table->string('ma_gv', 20);
            $table->primary(['ma_hd', 'ma_gv']);
            $table->foreign('ma_hd')->references('ma_hd')->on('hoi_dong')->onDelete('cascade');
            $table->foreign('ma_gv')->references('ma_gv')->on('giang_vien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hoi_dong_giang_vien');
    }
};
