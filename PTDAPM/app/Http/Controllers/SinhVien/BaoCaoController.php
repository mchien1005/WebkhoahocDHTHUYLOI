<?php

// namespace App\Http\Controllers\SinhVien; // Đúng với đường dẫn file
// use App\Http\Controllers\Controller; // Thêm dòng này
// use Illuminate\Http\Request;
// use App\Models\BaoCao;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;

// class BaoCaoController extends Controller
// {
//     // Hiển thị danh sách báo cáo
//     public function index()
//     {
//         $baoCaoList = BaoCao::with('deTai', 'nguoiTao')->get();
//         return view('baocao.index', compact('baoCaoList'));
//     }

//     // Hiển thị form nộp báo cáo
//     public function create()
//     {
//         return view('baocao.create');
//     }

//     // Xử lý nộp báo cáo
//     public function store(Request $request)
//     {
//         $request->validate([
//             'tieu_de' => 'required|string|max:255',
//             'noi_dung' => 'required|string',
//             'ma_de_tai' => 'required|exists:de_tai,id',
//             'tep_bao_cao' => 'required|file|mimes:pdf,doc,docx|max:2048',
//         ]);

//         // Lưu file vào storage
//         $filePath = $request->file('tep_bao_cao')->store('baocao', 'public');

//         BaoCao::create([
//             'tieu_de' => $request->tieu_de,
//             'noi_dung' => $request->noi_dung,
//             'ma_de_tai' => $request->ma_de_tai,
//             'nguoi_tao' => Auth::id(),
//             'ngay_tao' => now(),
//             'trang_thai' => 'Chờ duyệt',
//             'duong_dan_tep' => $filePath,
//         ]);

//         return redirect()->route('baocao.index')->with('success', 'Báo cáo đã được nộp thành công!');
//     }
// }
