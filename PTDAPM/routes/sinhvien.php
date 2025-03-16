<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\SinhVien\TTSinhVienController;
use App\Http\Controllers\SinhVien\timkiemGVController;
use App\Http\Controllers\GiangVien\GiangVienController;
use App\Http\Controllers\SinhVien\DetainghiencuuController;
use App\Http\Controllers\SinhVien\LoimoiSinhVienController;
use App\Http\Controllers\SinhVien\ProfileController;
use App\Http\Controllers\SinhVien\BaoCaoController;
use App\Http\Controllers\SinhVienController;
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
        Route::put('profile/{ma_sv}', [ProfileController::class, 'updateProfile'])->name('profile.update');



        Route::get('/sinh-vien', [TTSinhVienController::class, 'index'])->name('FormSinhVien.student.index');
        Route::get('/sinh-vien/{ma_tin_tuc}', [TTSinhVienController::class, 'show'])->name('FormSinhVien.student.show');
        Route::get('/de-tai-nghien-cuu', [DetainghiencuuController::class, 'index'])->name('FormSinhVien.detai.index');
        Route::get('/de-tai-nghien-cuu/{id}', [DetainghiencuuController::class, 'show'])->name('FormSinhVien.detai.show');
        Route::get('/de-tai-nghien-cuu/{id}', [DetainghiencuuController::class, 'show'])->name('FormSinhVien.detai.show');
        Route::post('/nop-bao-cao', [DetainghiencuuController::class, 'nopBaoCao'])->name('nop-bao-cao');
        Route::get('/searchgv', [timkiemGVController::class, 'index'])->name('FormSinhVien.searchgv.index');
        Route::get('/giang-vien/{ma_gv}', [TimKiemGVController::class, 'show'])->name('FormSinhVien.searchgv.show');

        Route::get('/tim-kiem-giang-vien', [LoimoiSinhVienController::class, 'index'])->name('FormSinhVien.loimoi.index');
        Route::delete('/sinhvien/loimoi/thuhoi/{id}', [LoimoiSinhVienController::class, 'thuHoi'])
            ->name('sinhvien.loimoi.thuhoi');
        Route::get('/loi-moi', [LoimoiSinhVienController::class, 'index'])->name('FormSinhVien.index');
        Route::post('/send-invite/{ma_gv}', [LoimoiSinhVienController::class, 'sendInvite'])->name('sendInvite');

        // Hiển thị danh sách báo cáo
        Route::get('/bao-cao', [BaoCaoController::class, 'index'])->name('baocao.index');
        Route::post('/bao-cao/store', [BaoCaoController::class, 'store'])->name('baocao.store');


        // Xử lý nộp báo cáo
        Route::post('/bao-cao', [BaoCaoController::class, 'store'])->name('baocao.store');
        Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/doi-mat-khau', [LoginController::class, 'showChangePasswordForm'])->name('doi-mat-khau.form');
    Route::post('/doi-mat-khau', [LoginController::class, 'changePassword'])->name('doi-mat-khau.update');
});
