<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\GiangVien\TintucController;
use App\Http\Controllers\GiangVien\DangKyNghienCuuController;
use App\Http\Controllers\GiangVien\DetainghiencuuController;
use App\Http\Controllers\GiangVien\BaocaonghiencuuController;
use App\Http\Controllers\GiangVien\LoimoihuongdanController;


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

    Route::get('/tin-tuc/{id}', [TintucController::class, 'show'])->name('tintuc.show');
    
    Route::get('/dang-ky-nghien-cuu', [DangKyNghienCuuController::class, 'index'])->name('dangkynghiencuu.index');

    Route::post('/dang-ky-nghien-cuu/dangky-dinhhuong', [DangKyNghienCuuController::class, 'DangKyDinhHuongNghienCuu'])
    ->name('giangvien.dangky-dinhhhuong');

    Route::get('/dangkynghiencuu', [DangKyNghienCuuController::class, 'show'])->name('dangkynghiencuu.show');    

    Route::get('/de-tai-nghien-cuu', [DetainghiencuuController::class, 'index'])->name('detainghiencuu.index');

    Route::get('/bao-cao-de-tai', [BaocaonghiencuuController::class, 'index'])->name('baocaodetai.index');

    Route::get('/loi-moi-huong-dan', [LoimoihuongdanController::class, 'index'])->name('loimoihuongdan.index');
});
});