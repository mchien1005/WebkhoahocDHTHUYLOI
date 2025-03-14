<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller; // Thêm dòng này
use Illuminate\Http\Request;

class LoimoiSinhVienController extends Controller
{
    public function index()
    {
        return view('FormSinhVien.loimoi.index');
    }
}
