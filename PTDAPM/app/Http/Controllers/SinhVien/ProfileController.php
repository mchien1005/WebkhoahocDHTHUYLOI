<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SinhVien;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
{
    $user = Auth::user();
    $sinhVien = $user->sinhVien; // Lấy thông tin sinh viên từ tài khoản đăng nhập

    if (!$sinhVien) {
        return redirect()->route('home')->withErrors('Không tìm thấy thông tin sinh viên.');
    }

    return view('profile', [ // Đảm bảo 'profile' là trang hiển thị thông tin sinh viên
        'sinhVien' => $sinhVien
    ]);
    
}




public function updateProfile(Request $request)
{
    $request->validate([
        'ten_sv' => 'required|string|max:255',
        'lop' => 'required|string|max:255',
        'gioi_tinh' => 'required|in:Nam,Nữ,Khác',
        'nam_sinh' => 'required|date',
        'ma_khoa' => 'required|string|max:10',
    ]);

    $sinhVien = Auth::user()->sinhVien;

    if (!$sinhVien) {
        return redirect()->route('profile.show')->withErrors('Không tìm thấy thông tin sinh viên.');
    }

    $sinhVien->update($request->only(['ten_sv', 'lop', 'gioi_tinh', 'nam_sinh', 'ma_khoa']));

    return redirect()->route('profile.show')->with('success', 'Cập nhật thông tin thành công!');
}

}
