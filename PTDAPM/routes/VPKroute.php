<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoan\LoginController;
use App\Http\Controllers\VanPhongKhoa\VanPhongKhoaController;


Route::middleware(['auth'])->group(function () {
    Route::prefix('vanphongkhoa')->group(function () {
        Route::get('/capnhatketqua', [VanPhongKhoaController::class, 'capnhatketqua'])->name('vanphongkhoa.capnhatketqua');
        Route::get('/quanlyphanbien', [VanPhongKhoaController::class, 'quanlyphanbienindex'])->name('vanphongkhoa.quanlyphanbien');
        Route::get('/truycapthongtin', [VanPhongKhoaController::class, 'truyvanthongtin'])->name('vanphongkhoa.truyvanthongtin');
        Route::get('/capnhatlichtrinhbaove', [VanPhongKhoaController::class, 'capnhatlichtrinhbaove'])->name('vanphongkhoa.capnhatlichtrinhbaove');
        Route::get('/ghepdoidetai-hoidong', [VanPhongKhoaController::class, 'ghepdoidetaihoidong'])->name('vanphongkhoa.ghepdoidetaihoidong');
        // Đăng xuất
        Route::post('/dang-xuat', [LoginController::class, 'logout'])->name('logout');
    });
});
