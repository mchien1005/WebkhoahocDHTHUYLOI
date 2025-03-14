@extends('layouts.app1')

@section('sidebar')
<div class="menu-item active">
    <a href="{{ route('tintuc.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item ">
    <a href="">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item ">
    <a href="">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon" class="sidebar-icon" />
        <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item">
    <a href="">
        <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
        <span>Lời mời hướng dẫn</span>
    </a>
</div>
@endsection


@section('content')
<div class="container mt-4">
    <h4 class="custom-title" style="color: #17488C; font-weight: 500;; margin-bottom: 20px;">Xem chi tiết tin tức</h4>
    <div class="p-3 rounded fs-5" style="background-color: #e7f5ff;">
        <div class="row">
            <!-- Cột chứa nội dung -->
            <div class="col-md-9">
                <img src="{{ asset('img/nha-khoa-hoc-7559-1672.jpg 1.png') }}" alt="Nhà khoa học" class="news-image" style="max-width: 100%; height: auto; margin-bottom: 20px; border-radius: 5px;" />
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Mã tin tức:</strong> NCKH20250307 </p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Tiêu đề:</strong> Khuyến khích Nhà Khoa Học Dám Nghĩ, Dám Làm</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Nội dung:</strong></p>
                <p style="margin-bottom: 15px; color: #17488C;font-weight: 500; line-height: 1.6; text-align: justify;">Trong bối cảnh khoa học công nghệ phát triển nhanh chóng, tinh thần đổi mới sáng tạo và tư duy đột phá đóng vai trò quan trọng. Việc khuyến khích các nhà khoa học mạnh dạn thử nghiệm những ý tưởng mới, chấp nhận rủi ro và sáng tạo sẽ giúp thúc đẩy sự phát triển của khoa học – công nghệ, góp phần giải quyết các thách thức toàn cầu. Chính sách hỗ trợ, cơ chế tài trợ linh hoạt và môi trường nghiên cứu cởi mở là yếu tố then chốt giúp hiện thực hóa những ý tưởng đột phá.</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Ngày đăng:</strong> 07/03/2025</p>
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Người đăng:</strong> Admin</p>
               
                <p style="margin-bottom: 10px; color: #17488C;font-weight: 500;"><strong style="color: #17488c; font-weight: 700;">Đường dẫn tệp đính kèm:</strong>
                    <a href="" target="_blank" style="color: #17488C;font-weight: 500; text-decoration: underline;">example.com/file/nckh20250307</a>
                </p>
               
            </div>
        </div>
    </div>
</div>
@endsection




