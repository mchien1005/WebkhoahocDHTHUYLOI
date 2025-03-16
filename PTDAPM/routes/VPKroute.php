<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form'); // Trang hiển thị form đăng nhập
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process'); // Xử lý đăng nhập


Route::middleware(['auth'])->group(function () {
    Route::get('/capnhatketqua', [VanPhongKhoaController::class, 'capnhatketqua'])->name('vanphongkhoa.capnhatketqua');
    Route::post('/cap-nhat-diem', [VanPhongKhoaController::class, 'capNhatDiem']);

    Route::get('/truyvanthongtin', [VanPhongKhoaController::class, 'truyvanthongtin'])->name('vanphongkhoa.truyvanthongtin');
    Route::get('/capnhatlichtrinhbaove', [VanPhongKhoaController::class, 'capnhatlichtrinhbaove'])->name('vanphongkhoa.capnhatlichtrinhbaove');
    Route::post('/lich-trinh/{id}/update', [VanPhongKhoaController::class, 'updatelichtrinh'])->name('lich_trinh.update');

    Route::get('/ghepdoidetai-hoidong', [VanPhongKhoaController::class, 'ghepdoidetaihoidong'])->name('vanphongkhoa.ghepdoidetaihoidong');
    Route::get('/ghepdoidetai-hoidong-luu', [VanPhongKhoaController::class, 'storeghepdoidetai'])->name('ghepdoi.luu');

    Route::get('/tintuc', [VanPhongKhoaController::class, 'tintuc'])->name('vanphongkhoa.tintuc');
    Route::get('/phanbienvabaove', [VanPhongKhoaController::class, 'phanBienVaBaoVe'])->name('vanphongkhoa.phanbienvabaove');
    Route::get('/xem-bao-cao', [VanPhongKhoaController::class, 'xemBaoCao'])->name('vanphongkhoa.xembaocao');
    Route::get('/chia-hoi-dong', [VanPhongKhoaController::class, 'chiaHoiDong'])->name('vanphongkhoa.chiahoidong');
    Route::get('/chon-hoi-dong', [VanPhongKhoaController::class, 'chonHoiDong'])->name('vanphongkhoa.chonhoidong');
});

// Đăng xuất
Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
