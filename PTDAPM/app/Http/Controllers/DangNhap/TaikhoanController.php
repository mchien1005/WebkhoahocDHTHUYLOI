<?php

namespace App\Http\Controllers\DangNhap;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\DangNhap\TaiKhoan;

class TaikhoanController extends Controller
{
    /**
     * Hiển thị giao diện đăng nhập
     */
    public function index()
    {
        return view('auth.login'); // Tạo file resources/views/auth/login.blade.php
    }

    /**
     * Xử lý đăng nhập
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->vai_tro === 'Sinh viên') {
                return redirect()->route('vanphongkhoa.tintuc');
            } elseif ($user->vai_tro === 'Giảng viên') {
                return redirect()->route('vanphongkhoa.tintuc');
            } elseif ($user->vai_tro === 'Admin') {
                return redirect()->route('vanphongkhoa.tintuc');
            } elseif ($user->vai_tro === 'Nhân viên') {
                return redirect()->route('vanphongkhoa.tintuc');
            }
            // else {
            //     return redirect()->route('home'); // Điều hướng mặc định
            // }
        }
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác!'])->withInput();
    }

    /**
     * Xử lý đăng xuất
     */
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login.form'); // Quay lại trang đăng nhập sau khi đăng xuất
    // }
}
