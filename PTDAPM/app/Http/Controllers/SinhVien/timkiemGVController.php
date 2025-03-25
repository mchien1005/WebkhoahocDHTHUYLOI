<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiangVien;
use App\Models\LoiMoiHuongDan;
use App\Models\DeTai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class TimKiemGVController extends Controller
{
    public function index(Request $request)
    {
        $fields = GiangVien::distinct()->pluck('linh_vuc_nc');
        $query = GiangVien::with('deTais');

        // Process search if form is submitted
        if ($request->has('submitted')) {
            if (empty($request->search) && empty($request->field)) {
                // If search is submitted with empty fields, show modal
                $giangVien = $query->get();
                return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'))
                    ->with('showEmptySearchModal', true);
            }

            if ($request->has('field') && !empty($request->field)) {
                $query->where('linh_vuc_nc', $request->field);
            }

            if ($request->has('search') && !empty($request->search)) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('ten_gv', 'like', "%{$search}%")
                      ->orWhere('ma_gv', 'like', "%{$search}%");
                });
            }
        }

        $giangVien = $query->get();
        
        if ($request->has('submitted') && $giangVien->isEmpty()) {
            return back()->with('error', 'Không có giảng viên phù hợp với tiêu chí cần tìm');
        }

        return view('FormSinhVien.searchgv.index', compact('giangVien', 'fields'));
    }

    public function show($ma_gv)
    {
        $giangVien = GiangVien::with('deTais')->where('ma_gv', $ma_gv)->firstOrFail();
        return view('FormSinhVien.searchgv.show', compact('giangVien'));
    }

    public function invite(Request $request, $ma_gv)
    {
        try {
            DB::beginTransaction();
    
            // Validate request
            $validator = Validator::make($request->all(), [
                'ten_sv' => 'required|string|max:255',
                'ma_sv' => 'required|string|max:20',
                'email' => 'required|email',
                'de_tai' => 'required|exists:de_tai,ma_de_tai'
            ]);
    
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Vui lòng kiểm tra lại thông tin đã nhập');
            }
    
            // Check existing invitation
            $existingInvite = LoiMoiHuongDan::where([
                'ma_sv' => $request->ma_sv,
                'ma_gv' => $ma_gv,
                'ma_de_tai' => $request->de_tai,
            ])->first();
    
            if ($existingInvite) {
                DB::rollBack();
                return back()->with('error', 'Bạn đã gửi lời mời cho đề tài này với giảng viên này rồi.');
            }
    
            // Create new invitation
            $loiMoi = new LoiMoiHuongDan();
            $loiMoi->ma_sv = $request->ma_sv;
            $loiMoi->ma_gv = $ma_gv;
            $loiMoi->ma_de_tai = $request->de_tai;
            $loiMoi->ten_sv = $request->ten_sv;
            $loiMoi->email_sv = $request->email;
            $loiMoi->thoi_gian_gui = now();
            $loiMoi->trang_thai = 'Chờ phản hồi';
    
            if (!$loiMoi->save()) {
                throw new \Exception('Không thể lưu lời mời');
            }
    
            DB::commit();
            return back()->with('success', 'Đã gửi lời mời hướng dẫn thành công!');
    
        } catch (\PDOException $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Lỗi kết nối cơ sở dữ liệu. Vui lòng thử lại sau.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function cancelInvite($id)
    {
        $loiMoi = LoiMoiHuongDan::findOrFail($id);
        
        if ($loiMoi->ma_sv !== Auth::user()->sinhVien->ma_sv) {
            return back()->with('error', 'Bạn không có quyền hủy lời mời này.');
        }

        try {
            $loiMoi->delete();
            return back()->with('success', 'Đã hủy lời mời thành công.');
        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra khi hủy lời mời.');
        }
    }
}
