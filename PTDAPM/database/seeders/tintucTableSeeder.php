<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TintucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tin_tuc')->insert([
            [
                'tieu_de' => 'Khuyến khích nhà khoa học dám nghĩ, dám làm',
                'noi_dung' => 'Thời gian qua, mặc trong những vướng mắc đối với các hoạt động khoa học...',
                'ngay_dang' => Carbon::parse('2025-02-06'),
                'nguoi_dang' => 'admin@example.com',  // Đảm bảo đúng email trong `tai_khoan`
                'duong_dan_tep' => 'uploads/news/file1.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tieu_de' => 'Mở đường để các công trình, nghiên cứu đi vào đời sống',
                'noi_dung' => 'Nghị quyết số 57-NQ/TW ngày 22/12/2024 của Bộ Chính trị về đột phá phát triển khoa học...',
                'ngay_dang' => Carbon::parse('2025-01-18'),
                'nguoi_dang' => 'admin@example.com',
                'duong_dan_tep' => 'uploads/news/file2.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tieu_de' => '17 công trình vào chung khảo Giải thưởng khoa học công nghệ dành cho giảng viên trẻ',
                'noi_dung' => '17 công trình khoa học của giảng viên từ các trường đại học đã được Hội đồng đánh giá...',
                'ngay_dang' => Carbon::parse('2025-03-06'),
                'nguoi_dang' => 'admin@example.com',
                'duong_dan_tep' => 'uploads/news/file3.pdf',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
