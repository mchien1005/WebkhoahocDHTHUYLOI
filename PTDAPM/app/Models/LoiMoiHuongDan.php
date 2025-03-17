<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoiMoiHuongDan extends Model
{
    use HasFactory;

    protected $table = 'loi_moi_huong_dan';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = ['ma_sv', 'ma_gv', 'ma_de_tai', 'trang_thai', 'thoi_gian_gui'];

    public function sinhVien()
    {
        return $this->belongsTo(SinhVien::class, 'ma_sv', 'ma_sv');
    }

    public function giangVien()
    {
        return $this->belongsTo(GiangVien::class, 'ma_gv', 'ma_gv');
    }

    public function deTai()
    {
        return $this->belongsTo(DeTai::class, 'ma_de_tai', 'ma_de_tai');
    }
}
