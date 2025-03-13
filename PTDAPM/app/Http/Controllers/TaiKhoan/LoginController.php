<?php

namespace App\Http\Controllers\TaiKhoan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt((['email' => $credentials['email'], 'password' => $credentials['password']]))) {
            $user = Auth::user();
            if ($user->vai_tro === 'Sinh viên') {
                return redirect()->route('FormSinhVien.student.index');
            } elseif ($user->vai_tro === 'Giảng viên') {
                return redirect()->route('FormGiangVien.admin');
            } elseif ($user->vai_tro === 'Admin') {
                return redirect()->route('vanphongkhoa.tintuc');
            } elseif ($user->vai_tro === 'Nhân viên') {
                return redirect()->route('phongdaotao.tintuc');
            }
        }
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác!'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dang-nhap')->with('success', 'Bạn đã đăng xuất thành công!');
    }
}
