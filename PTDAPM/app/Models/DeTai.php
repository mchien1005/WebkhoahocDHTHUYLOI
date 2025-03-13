<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeTai extends Model
{
    use HasFactory;

    protected $table = 'de_tai'; // Tên bảng trong database
    protected $primaryKey = 'ma_de_tai'; // Khóa chính

    protected $fillable = [
        'ten_de_tai', 'mo_ta', 'trang_thai', 'ma_giang_vien',
        'ngay_dang_ky', 'so_luong_sinh_vien', 'linh_vuc', 'diem_phan_bien',
        'ket_qua_cap_khoa', 'ket_qua_cap_truong'
    ];
}
