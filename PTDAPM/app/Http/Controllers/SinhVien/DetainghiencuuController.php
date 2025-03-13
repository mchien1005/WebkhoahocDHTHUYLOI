<?php

namespace App\Http\Controllers\SinhVien; // Đúng với đường dẫn file
use App\Http\Controllers\Controller; // Thêm dòng này
use App\Models\Detai;
use Illuminate\Http\Request;

class DetainghiencuuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('FormSinhVien.detai.index');
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

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $deTai = DeTai::findOrFail($id);
        return view('de_tai.chi_tiet', compact('deTai'));
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
    public function nopBaoCao(Request $request)
{
    // Kiểm tra file có được gửi lên không
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('baocaos', $filename, 'public');

        return response()->json(['success' => true, 'message' => 'Nộp báo cáo thành công!']);
    }

    return response()->json(['success' => false, 'message' => 'Không có tệp nào được chọn!']);
}


}