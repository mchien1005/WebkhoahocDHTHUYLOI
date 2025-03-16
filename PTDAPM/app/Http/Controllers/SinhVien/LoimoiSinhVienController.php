<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller; // Thêm dòng này
use App\Models\LoiMoiHuongDan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\GiangVien;
class LoimoiSinhVienController extends Controller
{
    public function index()
    {
        // Kiểm tra người dùng đã đăng nhập 
        if (Auth::check()) {
            // Lấy tài khoản người dùng đang đăng nhập
            $user = Auth::user();

            // Lấy thông tin sinh viên liên quan
            $sinhVien = $user->sinhVien;

            // Nếu không tìm thấy sinh viên, trả về thông báo lỗi
            if (!$sinhVien) {
                return redirect()->route('login')->with('error', 'Không tìm thấy thông tin sinh viên.');
            }

            // Lấy danh sách lời mời của sinh viên theo ma_sv
            $loiMois = LoiMoiHuongDan::where('ma_sv', $sinhVien->ma_sv)->get();

            return view('FormSinhVien.loimoi.index', compact('loiMois'));
        } else {
            // Nếu chưa đăng nhập, yêu cầu người dùng đăng nhập
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập.');
        }
    }
    

    public function thuHoi($id)
    {
        // Tìm lời mời theo ID
        $loiMoi = LoiMoiHuongDan::find($id);

        // Kiểm tra nếu lời mời không tồn tại
        if (!$loiMoi) {
            return back()->with('error', 'Lời mời không tồn tại.');
        }

        // Xóa lời mời
        $loiMoi->delete();

        return back()->with('success', 'Lời mời đã được thu hồi.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'ma_gv' => 'required',
            'ma_sv' => 'required',
            'email' => 'required|email',
            'de_tai' => 'nullable|string',
            'ma_de_tai' => 'nullable|exists:de_tai,ma_de_tai',
        ]);

        // Kiểm tra số lượng sinh viên của giảng viên
        $soLuongHienTai = LoiMoiHuongDan::where('ma_gv', $request->ma_gv)
            ->where('trang_thai', '!=', 'Từ chối')
            ->count();

        if ($soLuongHienTai >= 5) {
            return back()->with('error', 'Số lượng sinh viên hướng dẫn của giảng viên đã đạt tối đa.');
        }

        // Tạo lời mời
        $loiMoi = LoiMoiHuongDan::create([
            'ma_sv' => $request->ma_sv,
            'ma_gv' => $request->ma_gv,
            'ten_de_tai' => $request->de_tai,
            'ma_de_tai' => $request->ma_de_tai,
            'trang_thai' => 'Chờ duyệt',
        ]);

        if ($loiMoi) {
            return back()->with('success', 'Gửi lời mời thành công!');
        } else {
            return back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại.');
        }
    }

    public function sendInvite(Request $request, $ma_gv)
    {
        $request->validate([
            'ten_sinh_vien' => 'required|string',
            'ma_sinh_vien' => 'required|string|unique:sinh_viens',
            'email' => 'required|email',
            'de_tai' => 'required|string'
        ]);

        $gv = GiangVien::find($ma_gv);

        // Kiểm tra số lượng sinh viên của giảng viên
        $currentStudentCount = $gv->students()->count();
        if ($currentStudentCount >= 25) {
            return redirect()->back()->with('error', 'Số lượng sinh viên hướng dẫn của giảng viên đã đạt tối đa, không thể gửi lời mời');
        }

        // Tạo lời mời
        $invitation = new LoiMoiHuongDan();
        $invitation->ma_gv = $ma_gv;
        $invitation->ma_sinh_vien = $request->ma_sinh_vien;
        $invitation->ten_sinh_vien = $request->ten_sinh_vien;
        $invitation->email = $request->email;
        $invitation->de_tai = $request->de_tai;
        $invitation->save();

        // Gửi thông báo tới giảng viên (giả sử gửi email thành công)
        try {
            // Gửi email nếu cần
            session()->flash('success', 'Gửi lời mời thành công');
            return redirect()->route('FormSinhVien.index');
        } catch (\Exception $e) {
            // Nếu thất bại, hủy lời mời và thông báo lỗi
            $invitation->delete();
            session()->flash('error', 'Gửi thông báo tới giảng viên thất bại. Hủy bỏ lời mời.');
            return redirect()->route('FormSinhVien.index');
        }
    }

}