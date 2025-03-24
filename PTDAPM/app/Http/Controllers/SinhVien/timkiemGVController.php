<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiangVien;
use App\Models\LoiMoiHuongDan;
use Illuminate\Support\Facades\Auth;
class TimKiemGVController extends Controller
{
    public function index(Request $request)
{
    $fields = GiangVien::distinct()->pluck('linh_vuc_nc');
    $giangVien = GiangVien::all(); // Load all giảng viên by default

    // Process search if form is submitted
    if ($request->has('submitted')) {
        if (empty($request->search) && empty($request->field)) {
            // If search is submitted with empty fields, show modal
            return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'))
                ->with('showEmptySearchModal', true);
        }

        $query = GiangVien::query();

        if ($request->has('field') && !empty($request->field)) {
            $query->where('linh_vuc_nc', $request->field);
        }

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('ten_gv', 'like', "%{$search}%")
                  ->orWhere('ma_gv', 'like', "%{$search}%");
            });
        }

        $giangVien = $query->get();
        
        if ($giangVien->isEmpty()) {
            return back()->with('error', 'Không có giảng viên phù hợp với tiêu chí cần tìm');
        }
    }

    return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'));
}
    public function list(Request $request)
    {
        $data = GiangVien::all();
        if(isset($request->keyword) && $request->keyword !=''){
            $data = GiangVien::where('ten_gv','like','%' . $request->keyword.'%')->get();
        }
        return view('FormSinhVien.searchgv.index',['data' => $data]);
    }
    
    public function show($ma_gv)
    {
        // Lấy thông tin chi tiết của giảng viên
        $giangVien = GiangVien::where('ma_gv', $ma_gv)->firstOrFail();
        return view('FormSinhVien.searchgv.show', compact('giangVien'));
    }
    
    public function invite(Request $request, $ma_gv)
    {
        // Kiểm tra người dùng đã đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Vui lòng đăng nhập để gửi lời mời.');
        }

        // Lấy thông tin sinh viên đang đăng nhập
        $sinhVien = Auth::user()->sinhVien;
        
        if (!$sinhVien) {
            return redirect()->back()
                ->with('error', 'Không tìm thấy thông tin sinh viên.');
        }

        // Kiểm tra xem đã gửi lời mời cho giảng viên này chưa
        $existingInvite = LoiMoiHuongDan::where('ma_sv', $sinhVien->ma_sv)
            ->where('ma_gv', $ma_gv)
            ->first();

        if ($existingInvite) {
            return redirect()->back()
                ->with('error', 'Bạn đã gửi lời mời cho giảng viên này rồi.');
        }

        // Tạo lời mời mới
        $loiMoi = new LoiMoiHuongDan();
        $loiMoi->ma_sv = $sinhVien->ma_sv;
        $loiMoi->ma_gv = $ma_gv;
        $loiMoi->thoi_gian_gui = now();
        $loiMoi->trang_thai = 'Chờ phản hồi';
        $loiMoi->save();

        return redirect()->back()
            ->with('success', 'Đã gửi lời mời hướng dẫn thành công!');
    }
}
