@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="#dang-ky-nghien-cuu">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        .grid-container {
            display: grid;

            gap: 30px;
            justify-content: center;
            padding: 60px;
        }

        .custom-button {
            width: 334.448px;
            height: 175px;
            border-radius: 10px;
            background-color: #5183CA;
            color: #E7F5FF;
            font-family: Rasa;
            font-weight: 500;
            font-size: 36px;
            line-height: 100%;
            letter-spacing: 0%;
            margin-top: 50px;
            padding-left: 30px;
            padding-right: 30px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            /* Xóa viền đen */
            box-shadow: none;
            /* Xóa hiệu ứng bóng */
            margin-right: 143px;
        }

        .wide {
            grid-column: span 2;
            margin-top: 143px;
            margin-left: 250px;
        }

        /* Tùy chỉnh cho màn hình nhỏ hơn */
        @media screen and (max-width: 1024px) {
            .grid-container {
                grid-template-columns: 1fr;
            }

            .custom-button {
                width: 100%;
                height: auto;
                font-size: 28px;
                padding: 20px;
            }

            .wide {
                grid-column: span 1;
                margin-top: 20px;
            }
        }

        /* Tùy chỉnh cho điện thoại (màn hình nhỏ hơn 768px) */
        @media screen and (max-width: 768px) {
            .grid-container {
                padding: 20px;
            }

            .custom-button {
                font-size: 24px;
                padding: 15px;
            }

            .wide {
                margin-top: 10px;
            }
        }

        /* Hỗ trợ thêm cho màn hình siêu nhỏ (dưới 480px) */
        @media screen and (max-width: 480px) {
            .custom-button {
                font-size: 20px;
                padding: 10px;
            }
        }
    </style>
    <div class="flex-grow p-6">
        <div class="flex justify-between items-center mb-6">
            <p style="color: #17478c; font-size: 48px; padding-left:50px;">Phản biện & Bảo vệ</p>
        </div>
        <hr style="height: 2px;background-color: #17478c; border: none;margin-top:16px; width: 120%; margin-left:-20px;" />

        <!-- Container chứa button -->
        <div class="grid-container">
            <button class="custom-button">Chia hội đồng phản biện</button>
            <button class="custom-button">Ghép đôi đề tài - hội đồng</button>
            <button class="custom-button wide">Cập nhật lịch trình bảo vệ đề tài</button>
        </div>
    </div>

@endsection