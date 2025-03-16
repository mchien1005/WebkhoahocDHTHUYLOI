<?php

namespace App\Http\Controllers\VanPhongKhoa;

use App\Models\Khoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeTai;
use App\Models\GiangVien;
use Illuminate\Support\Facades\DB;
use App\Models\HoiDongDanhGia;
use App\Models\LichTrinhBaoVe;
use Carbon\Carbon;

class VanPhongKhoaController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function truyVanThongTin()
    {
        $deTaiList = DeTai::all(); // GIỮ NGUYÊN CODE CỦA BẠN

        // Tổng số đề tài
        $tongDeTai = $deTaiList->count();

        // Số đề tài theo trạng thái
        $deTaiChoDuyet = $deTaiList->where('trang_thai', 'Chờ duyệt')->count();
        $deTaiDuocDuyet = $deTaiList->where('trang_thai', 'Được duyệt')->count();
        $deTaiHoanThanh = $deTaiList->where('trang_thai', 'Hoàn thành')->count();

        // Số lượng đề tài theo lĩnh vực
        $deTaiTheoLinhVuc = $deTaiList->groupBy('linh_vuc_nc')->map->count();
        $deTaiTheoKhoa = Khoa::leftJoin('giang_vien', 'khoa.ma_khoa', '=', 'giang_vien.ma_khoa')
            ->leftJoin('de_tai', 'giang_vien.ma_gv', '=', 'de_tai.ma_gv')
            ->select('khoa.ten_khoa', DB::raw('COUNT(de_tai.ma_de_tai) as so_luong'))
            ->groupBy('khoa.ten_khoa')
            ->get();

        // Tổng số giảng viên hướng dẫn (đếm giảng viên khác nhau)
        $tongGiangVien = $deTaiList->pluck('ma_gv')->unique()->count();

        // Tổng số sinh viên tham gia
        $tongSinhVien = $deTaiList->sum('so_luong_sv');

        // Thống kê kết quả đề tài
        $deTaiDatCapKhoa = $deTaiList->whereNotNull('ket_qua_khoa')->count();
        $deTaiDatCapTruong = $deTaiList->whereNotNull('ket_qua_truong')->count();
        $diemPhanBienTB = $deTaiList->whereNotNull('diem_phan_bien')->avg('diem_phan_bien');

        // Lấy thông tin lịch trình bảo vệ
        $deTaiTheoDot = LichTrinhBaoVe::select('ngay_bao_ve', DB::raw('count(*) as total'))
            ->groupBy('ngay_bao_ve')
            ->get();

        // Tổng số đề tài báo cáo thành công
        $deTaiBaoCaoThanhCong = DeTai::whereNotNull('diem_phan_bien')
            ->orWhereNotNull('ket_qua_khoa')
            ->orWhereNotNull('ket_qua_truong')
            ->count();

        // Tính tỷ lệ báo cáo thành công (tránh chia cho 0)
        $tyLeBaoCaoThanhCong = $tongDeTai > 0 ? ($deTaiBaoCaoThanhCong / $tongDeTai) * 100 : 0;


        // 🔹 **Lọc danh sách đề tài bảo vệ chỉ lấy ngày lớn hơn hôm nay**
        $deTaiSapBaoVe = LichTrinhBaoVe::join('hoi_dong_danh_gia', 'lich_trinh_bao_ve.ma_hoi_dong', '=', 'hoi_dong_danh_gia.ma_hd')
            ->select('lich_trinh_bao_ve.*', 'hoi_dong_danh_gia.ma_de_tai')
            ->whereDate('lich_trinh_bao_ve.ngay_bao_ve', '>', Carbon::today())
            ->orderBy('lich_trinh_bao_ve.ngay_bao_ve', 'asc')
            ->get();


        // Tổng số hội đồng và giảng viên phản biện
        $tongHoiDong = HoiDongDanhGia::count();
        $tongGiangVienPhanBien = HoiDongDanhGia::sum('so_luong_gv');

        return view('FormVanPhongKhoa.FormQuanLyTruyVan.FormXemDanhSachDeTai', compact(
            'deTaiList',
            'tongDeTai',
            'deTaiChoDuyet',
            'deTaiDuocDuyet',
            'deTaiTheoKhoa',
            'deTaiHoanThanh',
            'deTaiTheoLinhVuc',
            'tongGiangVien',
            'tongSinhVien',
            'deTaiDatCapKhoa',
            'deTaiDatCapTruong',
            'diemPhanBienTB',
            'deTaiTheoDot',
            'deTaiBaoCaoThanhCong',
            'tyLeBaoCaoThanhCong',
            'deTaiSapBaoVe',
            'tongHoiDong',
            'tongGiangVienPhanBien'
        ));
    }
    public function capnhatketqua()
    {
        $deTaiList = DeTai::all();

        // Trả về view và truyền danh sách đề tài
        return view('FormVanPhongKhoa.FormQuanLyCapNhatKetQua.FormCapNhatKetQuaDeTaiCapKhoa', compact('deTaiList'));
    }

    public function capNhatDiem(Request $request)
    {
        $request->validate([
            'diem_phan_bien' => 'required|numeric|min:0|max:100',
        ]);

        $deTai = DeTai::find($request->ma_de_tai);
        if ($deTai) {
            $deTai->diem_phan_bien = $request->diem_phan_bien;
            $deTai->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }


    public function capnhatlichtrinhbaove()
    {
        $lichTrinh = LichTrinhBaoVe::join('hoi_dong_danh_gia', 'lich_trinh_bao_ve.ma_hoi_dong', '=', 'hoi_dong_danh_gia.ma_hd')
            ->join('de_tai', 'hoi_dong_danh_gia.ma_de_tai', '=', 'de_tai.ma_de_tai')
            ->select(
                'hoi_dong_danh_gia.ma_hd as ma_hoi_dong', // Sửa lại alias
                'hoi_dong_danh_gia.ma_de_tai',
                'lich_trinh_bao_ve.dia_diem',
                'de_tai.ten_de_tai',
                'lich_trinh_bao_ve.*'
            )
            ->get();

        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormCapNhatLichTrinhBaoVe', compact('lichTrinh'));
    }
    public function updatelichtrinh(Request $request, $id)
    {
        $lichTrinh = LichTrinhBaoVe::findOrFail($id);

        // Cập nhật dữ liệu
        $dateTimeParts = explode("T", $request->ngay_gio);
        $lichTrinh->ngay_bao_ve = $dateTimeParts[0];
        $lichTrinh->gio_bao_ve = $dateTimeParts[1];
        $lichTrinh->dia_diem = $request->dia_diem;

        $lichTrinh->save();

        return response()->json(['success' => true]);
    }
    public function ghepdoidetaihoidong()
    {
        return view('FormVanPhongKhoa.FormQuanLyPhanBien.FormGhepDoiDeTai-HoiDong');
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

    /**
     * Store a newly created resource in storage.
     */
}
