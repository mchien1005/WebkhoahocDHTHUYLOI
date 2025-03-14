<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\GiangVien\Baocaonghiencuu;

class BaocaonghiencuuController 
{
    /**
     * Hiển thị danh sách báo cáo.
     */
    public function index()
    {

        return view('FormGiangVien.FormQuanLyBaoCao.index'); // Trả về view thay vì JSON
    }

//     /**
//      * Hiển thị form tạo báo cáo mới.
//      */
//     public function create()
//     {
//         return view('baocao.create');
//     }
//
//     /**
//      * Lưu một báo cáo mới.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'tieu_de' => 'required|string|max:255',
//             'noi_dung' => 'required',
//             'ma_de_tai' => 'required|integer',
//             'nguoi_tao' => 'required|string|max:20',
//             'trang_thai' => 'required|in:Chờ duyệt,Được duyệt,Bị từ chối',
//             'duong_dan_tep' => 'nullable|string|max:255',
//         ]);

//         Baocaonghiencuu::create($request->all());

//         return redirect()->route('baocao.index')->with('success', 'Báo cáo đã được tạo thành công!');
//     }

//     /**
//      * Hiển thị chi tiết một báo cáo.
//      */
//     public function show($id)
//     {
//         $baoCao = Baocaonghiencuu::findOrFail($id);
//         return view('baocao.show', compact('baoCao'));
//     }

//     /**
//      * Hiển thị form chỉnh sửa báo cáo.
//      */
//     public function edit($id)
//     {
//         $baoCao = Baocaonghiencuu::findOrFail($id);
//         return view('baocao.edit', compact('baoCao'));
//     }

//     /**
//      * Cập nhật thông tin một báo cáo.
//      */
//     public function update(Request $request, $id)
//     {
//         $baoCao = Baocaonghiencuu::findOrFail($id);
//         $baoCao->update($request->all());

//         return redirect()->route('baocao.index')->with('success', 'Báo cáo đã được cập nhật!');
//     }

//     /**
//      * Xóa một báo cáo.
//      */
//     public function destroy($id)
//     {
//         $baoCao = Baocaonghiencuu::findOrFail($id);
//         $baoCao->delete();

//         return redirect()->route('baocao.index')->with('success', 'Báo cáo đã bị xóa!');
//     }
// }
}
