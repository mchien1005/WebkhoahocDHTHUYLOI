<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SinhVien;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Hiển thị trang cập nhật thông tin cá nhân
     */
    public function edit()
    {
        $user = Auth::user(); // Lấy thông tin tài khoản hiện tại
        $sinhVien = $user->sinhVien; // Lấy thông tin sinh viên liên kết

        return view('layouts.app', compact('user', 'sinhVien'));
    }

    /**
     * Xử lý cập nhật thông tin cá nhân
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Lấy thông tin tài khoản hiện tại
        $sinhVien = $user->sinhVien; // Lấy thông tin sinh viên liên kết

        // Validate dữ liệu đầu vào
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'so_dien_thoai' => 'nullable|string|max:15',
            'dia_chi' => 'nullable|string|max:255',
            'gioi_tinh' => 'required|string',
            'nam_sinh' => 'required|date',
            'ma_khoa' => 'required|string|max:10',
            'email' => 'required|email|max:255',
        ]);

        // Cập nhật thông tin sinh viên
        if ($sinhVien) {
            $sinhVien->update([
                'ho_ten' => $request->ho_ten,
                'so_dien_thoai' => $request->so_dien_thoai,
                'dia_chi' => $request->dia_chi,
                'gioi_tinh' => $request->gioi_tinh,
                'nam_sinh' => $request->nam_sinh,
                'ma_khoa' => $request->ma_khoa,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('profile.edit')->with('success', 'Cập nhật thông tin thành công.');
    }
}
