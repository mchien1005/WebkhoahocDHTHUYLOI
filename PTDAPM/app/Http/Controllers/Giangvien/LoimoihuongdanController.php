<?php

namespace App\Http\Controllers\GiangVien;

use Illuminate\Http\Request;
use App\Models\GiangVien\Loimoihuongdan; // Tạo model này nếu chưa có

class LoimoihuongdanController
{
    public function index()
    {

        return view('FormGiangVien.FormLoiMoiHuongDan.index');
    }

    // public function view()
    // {
    //     $loiMoi = Loimoihuongdan::all();
    //     return view('FormGiangVien.FormLoiMoiHuongDan.view', compact('loiMoi'));
    // }
//
    // public function confirmAccept($id)
    // {
    //     $loiMoi = Loimoihuongdan::findOrFail($id);
    //     return view('FormGiangVien.FormLoiMoiHuongDan.confirm', [
    //         'loiMoi' => $loiMoi,
    //         'action' => 'accept',
    //         'message' => 'Bạn có muốn xác nhận đồng ý lời mời?'
    //     ]);
    // }

    // public function confirmDecline($id)
    // {
    //     $loiMoi = Loimoihuongdan::findOrFail($id);
    //     return view('FormGiangVien.FormLoiMoiHuongDan.confirm', [
    //         'loiMoi' => $loiMoi,
    //         'action' => 'decline',
    //         'message' => 'Bạn có muốn xác nhận từ chối lời mời?'
    //     ]);
    // }

    // public function accept(Request $request, $id)
    // {
    //     $loiMoi = Loimoihuongdan::findOrFail($id);
    //     $loiMoi->trang_thai = 'Đã duyệt';
    //     $loiMoi->save();

    //     return redirect()->route('loimoihuongdan.success', ['action' => 'accept']);
    // }

    // public function decline(Request $request, $id)
    // {
    //     $loiMoi = Loimoihuongdan::findOrFail($id);
    //     $loiMoi->trang_thai = 'Từ chối';
    //     $loiMoi->save();

    //     return redirect()->route('loimoihuongdan.success', ['action' => 'decline']);
    // }

    // public function success($action)
    // {
    //     $message = $action === 'accept' ? 'Đồng ý lời mời thành công!' : 'Từ chối lời mời thành công!';
    //     return view('loimoihuongdan.success', ['message' => $message]);
    // }
}