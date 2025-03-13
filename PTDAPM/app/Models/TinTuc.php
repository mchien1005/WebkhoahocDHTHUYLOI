<?php

  namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class TinTuc extends Model
    {
        use HasFactory;

        // Khai báo tên bảng
        protected $table = 'tin_tuc';

        // Khóa chính của bảng
        protected $primaryKey = 'ma_tin_tuc';

        // Laravel mặc định id là auto-increment, nên không cần $incrementing = false;
        protected $keyType = 'int';

        // Các trường có thể gán dữ liệu (mass assignment)
        protected $fillable = [
            'tieu_de',
            'noi_dung',
            'ngay_dang',
            'nguoi_dang',
            'duong_dan_tep',
        ];

        /**
         * Quan hệ với bảng `tai_khoan`
         */
        public function nguoiDang()
        {
            return $this->belongsTo(TaiKhoan::class, 'nguoi_dang', 'email');
        }
    }
