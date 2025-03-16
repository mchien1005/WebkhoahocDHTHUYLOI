<?php

namespace App\Http\Controllers\TaiKhoan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TaiKhoan;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:3',
    ]);

    // Kiểm tra đăng nhập
    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        $user = Auth::user();

        // Kiểm tra vai trò và chuyển hướng phù hợp
        if ($user->vai_tro === 'Sinh viên') {
            return redirect()->route('FormSinhVien.student.index');
        } elseif ($user->vai_tro === 'Giảng viên') {
            return redirect()->route('tintuc.index');
        } elseif ($user->vai_tro === 'Admin') {
            return redirect()->route('vanphongkhoa.tintuc');
        } elseif ($user->vai_tro === 'Nhân viên') {
            return redirect()->route('phongdaotao.tintuc');
        }

        return redirect()->route('home'); // Trường hợp không xác định vai trò
    }

    // Nếu đăng nhập thất bại, hiển thị lỗi
    return back()->withErrors(['email' => 'Tài khoản hoặc mật khẩu không đúng!'])->withInput();
}



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dang-nhap')->with('success', 'Bạn đã đăng xuất thành công!');
    }
    public function showChangePasswordForm()
    {
        
    }

    // Xử lý đổi mật khẩu
    public function changePassword(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Lấy tài khoản của người dùng hiện tại
        $taiKhoan = TaiKhoan::where('email', Auth::user()->email)->first();

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->current_password, $taiKhoan->mat_khau)) {
            return back()->with('error', 'Mật khẩu cũ không đúng.');
        }

        // Cập nhật mật khẩu mới
        $taiKhoan->mat_khau = Hash::make($request->new_password);
        $taiKhoan->save();

        return back()->with('success', 'Đổi mật khẩu thành công!');
    }
   

}
