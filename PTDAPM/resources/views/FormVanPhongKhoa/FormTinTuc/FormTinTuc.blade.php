@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{route('vanphongkhoa.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('vanphongkhoa.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.phanbienvabaove')}}">
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
    <div class="menu-item active">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e7f5ff;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            font-size: 28px;
            color: #245292;
            font-weight: 500;
        }

        .add-button {
            background-color: #5083c9;
            color: #e6f4ff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-bottom: 20px;
            max-width: 180px;
        }

        .add-button span {
            margin-right: 10px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #a5c8e6;
        }

        th {
            background-color: #4a75af;
            color: white;
            text-align: left;
            padding: 12px 15px;
            font-weight: 500;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #86b5d9;
            background-color: #bbd5eb;
        }

        tr:nth-child(even) td {
            background-color: #c8dfef;
        }

        .empty-row td {
            height: 50px;
            background-color: #c8dfef;
        }

        /* Hiệu ứng hover cho từng mục tin tức */
        .news-item {
            transition: all 0.3s ease-in-out;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Hiệu ứng hover cho liên kết "Xem chi tiết tin tức" */
        .news-link {
            transition: color 0.3s ease-in-out;
        }

        .news-link:hover {
            color: #0f3460;
        }
    </style>
    <div class="main-content">
        <h1 class="page-title">Tin tức</h1>
        <!-- News Item 1 -->
        <div class="news-section">
            <div class="news-item">
                <img src="{{asset('images/nha-khoa-hoc-7559-1672.jpg 1.png')}}" alt="Nhà khoa học" class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">Khuyến khích nhà khoa học dám nghĩ, dám làm</h3>
                    <div class="news-date">06/02/2025 07:01</div>
                    <p class="news-excerpt">
                        Thời gian qua, một trong những vướng mắc đối với các nhà khoa học là chưa
                        có quy định, cơ chế rõ ràng về rủi ro trong nghiên cứu khoa học...
                    </p>
                    <div class="news-link">
                        <img src="{{asset('images/Chevron Right.png')}}" alt="Arrow" />
                        <span>Xem chi tiết tin tức</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <!-- News Item 2 -->
        <div class="news-section">
            <div class="news-item">
                <img src="{{asset('images/3-02-4392jpg-9516-6273.jpg 1.png')}}" alt="Nghiên cứu khoa học"
                    class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">Mở đường để các công trình, nghiên cứu khoa học đi vào đời sống</h3>
                    <div class="news-date">18/01/2025 07:01</div>
                    <p class="news-excerpt">
                        Nghị quyết số 57-NQ/TW ngày 22/12/2024 của Bộ Chính trị về đột phá phát triển
                        khoa học, công nghệ, đổi mới sáng tạo và <a href="#" class="text-link">chuyển đổi số quốc gia</a>
                        vừa được ký ban hành...
                    </p>
                    <div class="news-link">
                        <img src="{{asset('images/Chevron Right.png')}}" alt="Arrow" />
                        <span>Xem chi tiết tin tức</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <!-- News Item 3 -->
        <div class="news-section">
            <div class="news-item">
                <img src="{{asset('images/1-7309.png 1.png')}}" alt="Công trình khoa học" class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">17 công trình vào chung khảo Giải thưởng khoa <br />học công nghệ dành cho giảng
                        viên trẻ</h3>
                    <div class="news-date">06/03/2025&nbsp;&nbsp; 07:01</div>
                    <p class="news-excerpt">
                        17 công trình khoa học của giảng viên từ các trường đại học đã được Hội đồng
                        đánh giá và xét Giải thưởng khoa học công nghệ dành cho giảng viên trẻ năm
                        2024...
                    </p>
                    <div class="news-link">
                        <img src="{{asset('images/Chevron Right.png')}}" alt="Arrow" />
                        <span>Xem chi tiết tin tức</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <!-- News Item 4 -->
        <div class="news-section">
            <div class="news-item">
                <img src="{{asset('images/5-2-5058.jpg 1.png')}}" alt="Phát triển khoa học" class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">17 công trình vào chung khảo Giải thưởng khoa <br />học công nghệ dành cho giảng
                        viên trẻ</h3>
                    <div class="news-date">06/03/2025&nbsp;&nbsp; 07:01</div>
                    <p class="news-excerpt">
                        Hiện nay, Bộ Khoa học và Công nghệ đang cùng các bộ, ngành phối hợp chặt
                        chẽ triển khai Chương trình Phát triển khoa học cơ bản...
                    </p>
                    <div class="news-link">
                        <img src="{{asset('images/Chevron Right.png')}}" alt="Arrow" />
                        <span>Xem chi tiết tin tức</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection