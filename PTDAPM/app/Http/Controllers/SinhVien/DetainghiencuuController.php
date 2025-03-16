<?php

namespace App\Http\Controllers\SinhVien; // Đúng với đường dẫn file
use App\Http\Controllers\Controller; // Thêm dòng này
use App\Models\Detai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DetainghiencuuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhVien = Auth::user()->sinhVien; // Lấy thông tin sinh viên từ tài khoản đăng nhập

        if (!$sinhVien) {
            return redirect()->route('login')->with('error', 'Bạn chưa đăng nhập hoặc không phải sinh viên.');
        }

        // Lấy danh sách đề tài mà sinh viên này đã đăng ký
        $deTais = $sinhVien->deTai()->get();

        return view('FormSinhVien.detai.index', compact('deTais'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $deTai = DeTai::findOrFail($id); // Lấy một đề tài theo ID
        return view('FormSinhVien.detai.show', compact('deTai'));
    }


}
