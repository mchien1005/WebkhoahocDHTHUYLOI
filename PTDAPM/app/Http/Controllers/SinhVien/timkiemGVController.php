<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiangVien;

class TimKiemGVController extends Controller
{
    public function index(Request $request)
    {
        $query = GiangVien::query();

        // Lọc theo lĩnh vực nghiên cứu nếu có
        if ($request->has('field') && !empty($request->field)) {
            $query->where('linh_vuc_nc', $request->field);
        }

        // Tìm kiếm theo tên hoặc mã giảng viên nếu có
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('ten_gv', 'like', "%{$search}%")
                  ->orWhere('ma_gv', 'like', "%{$search}%");
            });
        }
        

        $giangVien = $query->get();
        if ($giangVien->isEmpty()) {
            return redirect()->back()->with('error', 'Không có giảng viên phù hợp với tiêu chí cần tìm');
        }
        $fields = GiangVien::distinct()->pluck('linh_vuc_nc');
        
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
        $giangVien = GiangVien::where('ma_gv', $ma_gv)->firstOrFail();
        return view('FormSinhVien.searchgv.show', compact('giangVien'));
    }
    
    public function invite(Request $request, $ma_gv)
    {
        // Xử lý việc gửi lời mời hướng dẫn
        // Có thể lưu vào database, gửi email thông báo, v.v.
        
        return redirect()->back()->with('success', 'Đã gửi lời mời hướng dẫn thành công!');
    }
}
