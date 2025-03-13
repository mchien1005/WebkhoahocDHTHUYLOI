<?php

namespace App\Models\DangNhap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelTaiKhoan extends Authenticatable
{
    use HasFactory;

    protected $table = 'tai_khoan';

    // Khóa chính của bảng (vì mặc định Laravel dùng 'id')
    protected $primaryKey = 'email';

    // Khóa chính không phải là auto-increment (email là string)
    public $incrementing = false;
    protected $keyType = 'string';

    // Các trường có thể gán dữ liệu (mass assignment)
    protected $fillable = [
        'email',
        'mat_khau',
        'vai_tro',
    ];

    // Ẩn trường mật khẩu khi trả về JSON
    protected $hidden = [
        'mat_khau',
    ];

    // Đổi tên cột 'mat_khau' để dùng với Laravel Auth
    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
}
