<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\DeTai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\GiangVien;


class DeTaiNghienCuuController 
{
    /**
     * Display a listing of the research topics.
     */
    public function index()
    {
        $giangvien = GiangVien::all();
        $deTais = DeTai::all();
        return view('FormGiangVien.FormQuanLyDeTai.index', compact('deTais', 'giangvien'));
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'ten_de_tai' => 'required|string|max:255',
        'mo_ta' => 'required|string',
        'trang_thai' => 'required|in:Chờ duyệt,Được duyệt,Hoàn thành',
        'linh_vuc_nc' => 'required|string|max:255',
        'so_luong_sv' => 'required|integer|min:1|max:5',
        'ma_gv' => 'required|string|exists:giang_vien,ma_gv',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

   
 // Giả sử bạn đã lưu mã giảng viên trong bảng users
    $deTai = new DeTai();
    $deTai->ten_de_tai = $request->input('ten_de_tai');
    $deTai->mo_ta = $request->input('mo_ta');
    $deTai->trang_thai = $request->input('trang_thai');
    $deTai->ma_gv = 'GV001';  // Gán mã giảng viên cho đề tài
    $deTai->linh_vuc_nc = $request->input('linh_vuc_nc');
    $deTai->so_luong_sv = $request->input('so_luong_sv');
    $deTai->save();

    return redirect()->route('detainghiencuu.index')->with('success', 'Đề tài đã được thêm thành công.');
}
    public function show($id)
    {
        $deTai = DeTai::findOrFail($id);
        return response()->json($deTai);
    }

    /**
     * Update the specified research topic.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ten_de_tai' => 'required|string|max:255',
            'mo_ta' => 'required|string',
            'trang_thai' => 'required|in:Chờ duyệt,Được duyệt,Hoàn thành',
            'linh_vuc_nc' => 'required|string|max:255',
            'so_luong_sv' => 'required|integer|min:1|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $deTai = DeTai::findOrFail($id);
        
        // Check if the current user is the owner of this research topic
        if (Auth::user()->ma_gv != $deTai->ma_gv) {
            return redirect()->back()->with('error', 'Bạn không có quyền chỉnh sửa đề tài này.');
        }

        $deTai->ten_de_tai = $request->ten_de_tai;
        $deTai->mo_ta = $request->mo_ta;
        $deTai->trang_thai = $request->trang_thai;
        $deTai->linh_vuc_nc = $request->linh_vuc_nc;
        $deTai->so_luong_sv = $request->so_luong_sv;
        $deTai->save();

        return redirect()->route('detainghiencuu.index')->with('success', 'Đề tài đã được cập nhật thành công.');
    }

    /**
     * Remove the specified research topic.
     */
    public function destroy($id)
    {
        $deTai = DeTai::findOrFail($id);
        
        // Check if the current user is the owner of this research topic
        if (Auth::user()->ma_gv != $deTai->ma_gv) {
            return redirect()->back()->with('error', 'Bạn không có quyền xóa đề tài này.');
        }

        $deTai->delete();
        return redirect()->route('detainghiencuu.index')->with('success', 'Đề tài đã được xóa thành công.');
    }
}
