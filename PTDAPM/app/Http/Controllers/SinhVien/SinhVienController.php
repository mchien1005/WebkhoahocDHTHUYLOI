<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller; // Quan trọng!
use Illuminate\Http\Request;
use App\Models\TinTuc;

class SinhVienController extends Controller
{
    public function index()
    {
        $student = TinTuc::all();
        return view('FormSinhVien.student.index', compact('student'));
    }

    public function show($ma_tin_tuc)
    {
        // Lấy dữ liệu tin tức từ database
        $student = TinTuc::find($ma_tin_tuc);

        // Kiểm tra nếu không tìm thấy tin tức
        if (!$student) {
            abort(404, 'Tin tức không tồn tại');
        }

        return view('FormSinhVien.student.detail', compact('student'));
    }
}
