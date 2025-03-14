<?php

namespace App\Http\Controllers\VanPhongKhoa;

use App\Models\Khoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VanPhongKhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function xemBaoCao()
    {
        return view('FormVanPhongKhoa.FormQuanLyBaoCaoNghienCuu.FormXemBaoCao');
    }
    public function phanBienVaBaoVe()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormBaChucNang');
    }
    public function tintuc()
    {
        return view('FormVanPhongKhoa.FormTinTuc.FormTinTuc');

    }
    public function chiaHoiDong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChiaHoiDong');
    }
    public function chonHoiDong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChonHoiDong');
    }
    public function xemBaoCao()
    {
        return view('FormVanPhongKhoa.FormQuanLyBaoCaoNghienCuu.FormXemBaoCao');
    }
    public function phanBienVaBaoVe()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormBaChucNang');
    }
    public function tintuc()
    {
        return view('FormVanPhongKhoa.FormTinTuc.FormTinTuc');
    }
    public function chiaHoiDong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChiaHoiDong');
    }
    public function chonHoiDong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChonHoiDong');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
}

    
    