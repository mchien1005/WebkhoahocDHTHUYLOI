<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhap\TaikhoanController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;

Route::get('/', function () {
    return redirect()->route('login.form');
});
// Hiển thị trang đăng nhập
Route::get('/dang-nhap', [TaikhoanController::class, 'index'])->name('login.form');

// Xử lý đăng nhập
Route::post('/dang-nhap', [TaikhoanController::class, 'login'])->name('login.process');

// Trang tin tức (chỉ cho phép user đã đăng nhập)
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [VanPhongKhoaController::class, 'tintuc'])->name('vanphongkhoa.tintuc');
});

// Đăng xuất
Route::post('/dang-xuat', [TaikhoanController::class, 'logout'])->name('logout');
