<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\VanPhongKhoaController;

Route::get('/truy-van-thong-tin', [VanPhongKhoaController::class, 'truyVanThongTin'])->name('truyvanthongtin');
Route::get('/cap-nhat-ket-qua', [VanPhongKhoaController::class, 'capnhatketqua'])->name('capnhatketqua');
Route::get('/index', [VanPhongKhoaController::class, 'index'])->name('index');
