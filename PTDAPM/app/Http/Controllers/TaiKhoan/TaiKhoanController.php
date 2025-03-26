<?php

namespace App\Http\Controllers\TaiKhoan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use App\Models\SinhVien;
use App\Models\GiangVien;
use App\Models\PhongDaoTao;
use App\Models\VanPhongKhoa;

class TaiKhoanController extends Controller
{
    // 1️⃣ Hiển thị danh sách tài khoản
    public function index()
    {
        $taiKhoans = TaiKhoan::with(['giangVien'])->get();

        foreach ($taiKhoans as $tk) {
            // Lấy tên đăng nhập từ bảng tương ứng với email
            $tk->ten_dang_nhap = SinhVien::where('email', $tk->email)->value('ten_sv') ??
                GiangVien::where('email', $tk->email)->value('ten_gv') ??
                PhongDaoTao::where('email', $tk->email)->value('ten_nv') ?? 'Không xác định';
            VanPhongKhoa::where('email', $tk->email)->value('ten_nv') ?? 'Không xác định';
        }
        return view('FormPhongDaoTao.FormQuanLyTaiKhoan.Quanlytaikhoan', compact('taiKhoans'));
    }

    // 2️⃣ Thêm tài khoản mới
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:tai_khoans',
            'mat_khau' => 'required|min:6',
            'vai_tro' => 'required|in:Admin,Giảng viên,Sinh viên,Nhân viên',
            'sdt' => 'nullable|regex:/^0[0-9]{9}$/'
        ]);

        TaiKhoan::create([
            'email' => $request->email,
            'mat_khau' => $request->mat_khau, // ❗ Không mã hóa mật khẩu (Không an toàn)
            'vai_tro' => $request->vai_tro,
            'sdt' => $request->sdt
        ]);

        return redirect()->route('FormPhongDaoTao.FormQuanLyTaiKhoan.Quanlytaikhoan')->with('success', 'Thêm tài khoản thành công!');
    }

    // 3️⃣ Sửa tài khoản
    public function update(Request $request, $id)
    {
        $taiKhoan = TaiKhoan::findOrFail($id);

        $request->validate([
            'mat_khau' => 'nullable|min:6',
            'vai_tro' => 'required|in:Admin,Giảng viên,Sinh viên,Nhân viên',
            'sdt' => 'nullable|regex:/^0[0-9]{9}$/'
        ]);

        $taiKhoan->update([
            'mat_khau' => $request->mat_khau ?? $taiKhoan->mat_khau, // ❗ Giữ nguyên nếu không thay đổi
            'vai_tro' => $request->vai_tro,
            'sdt' => $request->sdt
        ]);

        return redirect()->route('FormPhongDaoTao.FormQuanLyTaiKhoan.Quanlytaikhoan')->with('success', 'Cập nhật tài khoản thành công!');
    }

    // 4️⃣ Xóa tài khoản
    public function destroy($email)
    {
        TaiKhoan::where('email', $email)->delete();
        return redirect()->back()->with('success', 'Tài khoản đã bị xóa.');
    }
}
