<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TaikhoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tai_khoan')->insert([
            [
                'email' => 'admin@example.com',
                'mat_khau' => Hash::make('admin123'), 
                'vai_tro' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'kingofzing2004@gmail.com',
                'mat_khau' => Hash::make('tta2004'),
                'vai_tro' => 'Giảng viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'sinhvien@example.com',
                'mat_khau' => Hash::make('sinhvien123'),
                'vai_tro' => 'Sinh viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'nhanvien@example.com',
                'mat_khau' => Hash::make('nhanvien123'),
                'vai_tro' => 'Nhân viên',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
