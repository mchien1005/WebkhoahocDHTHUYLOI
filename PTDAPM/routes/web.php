<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhap\TaikhoanController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::get('/dang-nhap', [TaikhoanController::class, 'index'])->name('login.form'); // Trang hiển thị form đăng nhập
Route::post('/dang-nhap', [TaikhoanController::class, 'login'])->name('login.process'); // Xử lý đăng nhập

// Trang tin tức (chỉ cho phép user đã đăng nhập)
Route::middleware(['auth'])->group(function () {
    Route::get('/vanphongkhoa/capnhatketqua', [VanPhongKhoaController::class, 'capnhatketqua'])->name('vanphongkhoa.capnhatketqua');
    Route::get('/vanphongkhoa/quanlyphanbien', [VanPhongKhoaController::class, 'quanlyphanbienindex'])->name('vanphongkhoa.quanlyphanbien');
    Route::get('/vanphongkhoa/truycapthongtin', [VanPhongKhoaController::class, 'truyvanthongtin'])->name('vanphongkhoa.truyvanthongtin');
});

// Đăng xuất
Route::post('/dang-xuat', [TaikhoanController::class, 'logout'])->name('logout');