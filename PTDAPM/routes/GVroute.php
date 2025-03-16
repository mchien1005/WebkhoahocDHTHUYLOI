<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\GiangVien\TintucController;
use App\Http\Controllers\GiangVien\DangKyNghienCuuController;
use App\Http\Controllers\GiangVien\DeTaiNghienCuuController;
use App\Http\Controllers\GiangVien\BaoCaoNghienCuuController;
use App\Http\Controllers\GiangVien\LoiMoiHuongDanController;

// Trang chủ, chuyển hướng về đăng nhập
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Hiển thị và xử lý đăng nhập
Route::get('/dang-nhap', [LoginController::class, 'index'])->name('login.form');
Route::post('/dang-nhap', [LoginController::class, 'login'])->name('login.process');

// Bảo vệ các route yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {
    Route::prefix('giang-vien')->group(function () {
        // Trang tin tức dành cho sinh viên
        Route::get('/tin-tuc', [TintucController::class, 'index'])->name('tintuc.index');
        Route::get('/tin-tuc/{id}', [TintucController::class, 'show'])->name('tintuc.show');

        // Đăng ký nghiên cứu
        Route::get('/dang-ky-nghien-cuu', [DangKyNghienCuuController::class, 'index'])->name('dangkynghiencuu.index');
        Route::post('/dang-ky-nghien-cuu/dangky-dinhhhuong', [DangKyNghienCuuController::class, 'DangKyDinhHuongNghienCuu'])
            ->name('giangvien.dangky-dinhhuong');
        Route::get('/dang-ky-nghien-cuu/{id}', [DangKyNghienCuuController::class, 'show'])->name('dangkynghiencuu.show');

        // Đề tài nghiên cứu
        Route::get('/de-tai-nghien-cuu', [DeTaiNghienCuuController::class, 'index'])->name('detainghiencuu.index');
        Route::post('/de-tai-nghien-cuu', [DeTaiNghienCuuController::class, 'store'])->name('detainghiencuu.store');
        Route::get('/de-tai-nghien-cuu/{id}', [DeTaiNghienCuuController::class, 'show'])->name('detainghiencuu.show');
        Route::put('/de-tai-nghien-cuu/{id}', [DeTaiNghienCuuController::class, 'update'])->name('detainghiencuu.update');
        Route::delete('/de-tai-nghien-cuu/{id}', [DeTaiNghienCuuController::class, 'destroy'])->name('detainghiencuu.destroy');

        // Báo cáo đề tài
        Route::get('/bao-cao-de-tai', [BaoCaoNghienCuuController::class, 'index'])->name('baocaodetai.index');
        Route::post('/bao-cao-de-tai/nhan-xet', [BaoCaoNghienCuuController::class, 'nhanXet'])
            ->name('baocaodetai.nhanxet');
        Route::post('/bao-cao-de-tai/xu-ly', [BaoCaoNghienCuuController::class, 'xuLy'])
            ->name('baocaodetai.xuly');

        // Lời mời hướng dẫn
        Route::get('/loi-moi-huong-dan', [LoiMoiHuongDanController::class, 'index'])->name('loimoihuongdan.index');
        Route::post('/loi-moi-huong-dan/xu-ly', [LoiMoiHuongDanController::class, 'xuLy'])
            ->name('loimoihuongdan.xuly');
    });
});
