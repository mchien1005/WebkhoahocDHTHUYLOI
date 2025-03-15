@extends('layouts.app1')

@section('sidebar')
    <div class="menu-item active">
        <a href="{{ route('tintuc.index') }}">
            <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item ">
        <a href="{{ route('detainghiencuu.index') }}">
            <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Đề tài nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('dangkynghiencuu.index') }}">
            <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Đăng ký nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('baocaodetai.index') }}">
            <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon"
                class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('loimoihuongdan.index') }}">
            <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Lời mời hướng dẫn</span>
        </a>
    </div>
@endsection


@section('content')
    <h2 class="page-title">Tin tức</h2>

    <!-- News Item 1 -->
    <div class="news-section">
        <div class="news-item">
            <img src="{{ asset('img/nha-khoa-hoc-7559-1672.jpg 1.png') }}" alt="Nhà khoa học" class="news-image" />
            <div class="news-content">
                <h3 class="news-title">Khuyến khích nhà khoa học dám nghĩ, dám làm</h3>
                <div class="news-date">06/02/2025&nbsp;&nbsp; 07:01</div>
                <p class="news-excerpt">
                    Thời gian qua, một trong những vướng mắc đối với các nhà khoa học là chưa
                    có quy định, cơ chế rõ ràng về rủi ro trong nghiên cứu khoa học. Luật Khoa
                    học và Công nghệ năm 2013...
                </p>
                <div class="news-link">
                    <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                    <span>
                        <a href="{{ route('tintuc.show') }}" style="text-decoration: none; color: #245292">
                            Xem chi tiết tin tức
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- News Item 2 -->
    <div class="news-section">
        <div class="news-item">
            <img src="{{ asset('img/3-02-4392jpg-9516-6273.jpg 1.png') }}" alt="Nghiên cứu khoa học" class="news-image" />
            <div class="news-content">
                <h3 class="news-title">Mở đường để các công trình, nghiên cứu khoa học <br />đi vào đời sống</h3>
                <div class="news-date">18/01/2025&nbsp;&nbsp; 07:01</div>
                <p class="news-excerpt">
                    Nghị quyết số 57-NQ/TW ngày 22/12/2024 của Bộ Chính trị về đột phá phát triển
                    khoa học, công nghệ, đổi mới sáng tạo và <a
                        href="https://nhandan.vn/chu-de/dong-luc-quan-trong-cua-chuyen-doi-so-704825.html"
                        class="text-link">chuyển đổi số quốc gia</a> vừa được Tổng
                    Bí thư Tô Lâm ký ban hành,...
                </p>
                <div class="news-link">
                    <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                    <span>Xem chi tiết tin tức</span>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- News Item 3 -->
    <div class="news-section">
        <div class="news-item">
            <img src="{{ asset('img/1-7309.png 1.png') }}" alt="Công trình khoa học" class="news-image" />
            <div class="news-content">
                <h3 class="news-title">17 công trình vào chung khảo Giải thưởng khoa <br />học công nghệ dành cho giảng viên
                    trẻ</h3>
                <div class="news-date">06/03/2025&nbsp;&nbsp; 07:01</div>
                <p class="news-excerpt">
                    17 công trình khoa học của giảng viên từ các trường đại học đã được Hội đồng
                    đánh giá và xét Giải thưởng khoa học công nghệ dành cho giảng viên trẻ năm
                    2024...
                </p>
                <div class="news-link">
                    <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                    <span>Xem chi tiết tin tức</span>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- News Item 4 -->
    <div class="news-section">
        <div class="news-item">
            <img src="{{ asset('img/5-2-5058.jpg 1.png') }}" alt="Phát triển khoa học" class="news-image" />
            <div class="news-content">
                <h3 class="news-title">17 công trình vào chung khảo Giải thưởng khoa <br />học công nghệ dành cho giảng viên
                    trẻ</h3>
                <div class="news-date">06/03/2025&nbsp;&nbsp; 07:01</div>
                <p class="news-excerpt">
                    Hiện nay, Bộ Khoa học và Công nghệ đang cùng các bộ, ngành phối hợp chặt
                    chẽ triển khai Chương trình Phát triển khoa học cơ bản...
                </p>
                <div class="news-link">
                    <img src="{{ asset('img/Chevron Right.png') }}" alt="Arrow" />
                    <span>Xem chi tiết tin tức</span>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection