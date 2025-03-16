<?php

namespace App\Http\Controllers\GiangVien;
use App\Models\GiangVien;

use Illuminate\Http\Request;

class DangKyNghienCuuController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giangviens = GiangVien::all();
        return view('FormGiangVien.FormDangKyDeTai.index', compact('giangviens'));
    }

    public function DangKyDinhHuongNghienCuu(Request $request)
    {
        $validated = $request->validate([
            'research_orientation' => 'required|string',
            'ma_gv' => 'required|string|exists:giang_vien,ma_gv',
        ]);
    
        try {
            // Lấy mã giảng viên từ form thay vì session
            $maGV = $validated['ma_gv'];
            
            // Tìm và cập nhật giảng viên
            $giangVien = GiangVien::findOrFail($maGV);
            $giangVien->dinh_huong_nc = $validated['research_orientation'];
            $giangVien->save();
            
            return redirect()->back()->with('success', 'Đăng ký định hướng nghiên cứu thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
//
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('FormGiangVien.FormDangKyDeTai.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}