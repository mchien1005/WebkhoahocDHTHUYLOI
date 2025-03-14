<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\GiangVien\TintucController;
use App\Http\Controllers\GiangVien\DetainghiencuuController;


// Trang chủ, chuyển hướng về đăng nhập
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Hiển thị và xử lý đăng nhập
Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form');
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process');

// Bảo vệ các route yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::prefix('Giảng Viên')->group(function () {
    // Trang tin tức dành cho sinh viên
    Route::get('/tintuc', [TintucController::class, 'index'])->name('tintuc.index');

    Route::get('/tin-tuc', [TintucController::class, 'show'])->name('tintuc.show');
    
});
});