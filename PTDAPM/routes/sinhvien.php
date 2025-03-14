<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\SinhVien\SinhVienController;
use App\Http\Controllers\SinhVien\timkiemGVController;
use App\Http\Controllers\GiangVien\GiangVienController;
use App\Http\Controllers\SinhVien\DetainghiencuuController;
use App\Http\Controllers\SinhVien\LoimoiSinhVienController;

// Trang chủ, chuyển hướng về đăng nhập
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Hiển thị và xử lý đăng nhập
Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form');
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process');

// Bảo vệ các route yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::prefix('Sinh Viên')->group(function () {
    // Trang tin tức dành cho sinh viên
    Route::get('/sinh-vien', [SinhVienController::class, 'index'])->name('FormSinhVien.student.index');
    Route::get('/sinh-vien/{ma_tin_tuc}', [SinhVienController::class, 'show'])->name('FormSinhVien.student.show');
    Route::get('/de-tai-nghien-cuu', [DetainghiencuuController::class, 'index'])->name('FormSinhVien.detai.index');
    Route::post('/nop-bao-cao', [DetainghiencuuController::class, 'nopBaoCao'])->name('nop-bao-cao');
    Route::get('/searchgv', [timkiemGVController::class, 'index'])->name('FormSinhVien.searchgv.index');
    Route::get('/tim-kiem-giang-vien', [LoimoiSinhVienController::class, 'index'])->name('FormSinhVien.loimoi.index');
    Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
});
});
