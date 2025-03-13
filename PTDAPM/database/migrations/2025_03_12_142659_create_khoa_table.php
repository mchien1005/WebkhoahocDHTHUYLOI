<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Bảng khoa
        Schema::create('khoa', function (Blueprint $table) {
            $table->string('ma_khoa', 10)->primary();
            $table->string('ten_khoa', 100);
            $table->string('truong_khoa', 20)->nullable();
            $table->foreign('truong_khoa')->references('ma_gv')->on('giang_vien')->onDelete('set null');
            $table->timestamps();
        });

        // Bảng giảng viên
        Schema::create('giang_vien', function (Blueprint $table) {
            $table->string('ma_gv', 20)->primary();
            $table->string('ten_gv', 100);
            $table->string('hoc_vi', 50);
            $table->string('sdt', 15)->unique();
            $table->string('khoa', 100);
            $table->string('linh_vuc_nc', 255);
            $table->text('dinh_huong_nc')->nullable();
            $table->integer('so_sv_huong_dan')->default(0);
            $table->string('email', 100)->unique();
            $table->foreign('email')->references('email')->on('tai_khoan')->onDelete('cascade');
            $table->foreign('khoa')->references('ma_khoa')->on('khoa')->onDelete('cascade');
            $table->timestamps();
        });

        // Bảng sinh viên
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->string('ma_sv', 20)->primary();
            $table->string('ten_sv', 100);
            $table->string('lop', 50);
            $table->enum('gioi_tinh', ['Nam', 'Nữ', 'Khác']);
            $table->year('nam_sinh');
            $table->string('khoa', 100);
            $table->string('email', 100)->unique();
            $table->foreign('email')->references('email')->on('tai_khoan')->onDelete('cascade');
            $table->foreign('khoa')->references('ma_khoa')->on('khoa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sinh_vien');
        Schema::dropIfExists('giang_vien');
        Schema::dropIfExists('khoa');
    }
};
