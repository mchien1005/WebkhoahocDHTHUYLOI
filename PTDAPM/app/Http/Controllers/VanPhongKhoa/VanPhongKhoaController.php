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
    public function truyVanThongTin()
    {
        return view('FormVanPhongKhoa.FormQuanLyTruyVan.FormXemDanhSachDeTai');
    }
    public function capnhatketqua()
    {
        return view('FormVanPhongKhoa.FormQuanLyCapNhatKetQua.FormCapNhatKetQuaDeTaiCapKhoa');
    }
    public function quanlyphanbienindex()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormBaChucNang');
    }
    public function capnhatlichtrinhbaove()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormCapNhatLichTrinhBaoVe');
    }
    public function ghepdoidetaihoidong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormGhepDoiDeTai-HoiDong');
    }
   public function xemBaoCao(){
    $baocaos = BaoCaoNghienCuu::all();
    return view('FormVanPhongKhoa.FormQuanLyBaoCaoNghienCuu.FormXemBaoCao', compact('baocaos'));
    }

    public function showBaoCao($ma_bc){
    // Lấy dữ liệu báo cáo từ database
    $baocao = BaoCaoNghienCuu::find($ma_bc);
    // Kiểm tra nếu không tìm thấy báo cáo
    if (!$baocao) {
        abort(404, 'Báo cáo không tồn tại');
    }
    return view('FormVanPhongKhoa.FormQuanLyBaoCaoNghienCuu.FormXemChiTietBaoCao', compact('baocao'));
    }

    public function phanBienVaBaoVe(){
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormBaChucNang');
    }
    public function tintuc()
    {
        $vpk = TinTuc::all();
        return view('FormVanPhongKhoa.FormTinTuc.FormTinTuc',compact('vpk'));
    }
    public function showTinTuc($ma_tin_tuc){
        // Lấy dữ liệu tin tức từ database
        $vpk = TinTuc::find($ma_tin_tuc);
        // Kiểm tra nếu không tìm thấy tin tức
        if (!$vpk) {
            abort(404, 'Tin tức không tồn tại');
        }

        return view('FormVanPhongKhoa.FormTinTuc.FormDetailTinTuc', compact('vpk'));
        }
        public function chiaHoiDong(){
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChiaHoiDong');
        }
        public function chonHoiDong(){
    // Lấy danh sách giảng viên từ database
        $giangVien = GiangVien::all();
    // Trả dữ liệu về view
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormChonHoiDong', compact('giangVien'));
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
}
