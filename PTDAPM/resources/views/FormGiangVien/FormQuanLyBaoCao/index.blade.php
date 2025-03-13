@extends('layouts.app')

@section('sidebar')
<div class="menu-item ">
    <a href="{{ route('tintuc.index') }}">
      <img src="img/Commercial.png" alt="News Icon" class="sidebar-icon" />
      <span>Tin tức</span>
    </a>
</div>
<div class="menu-item ">
    <a href="{{ route('detainghiencuu.index') }}">
      <img src="img/Saddle Stitched Booklet.png" alt="Research Icon" class="sidebar-icon" />
      <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="#dang-ky-nghien-cuu">
      <img src="img/Vector.png" alt="Register Icon" class="sidebar-icon" />
      <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('baocaodetai.index') }}">
      <img src="img/material-symbols_article-person-outline.png" alt="Report Icon" class="sidebar-icon" />
      <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('loimoihuongdan.index') }}">
      <img src="img/School Director.png" alt="Invitation Icon" class="sidebar-icon" />
      <span>Lời mời hướng dẫn</span>
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
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .page-title {
      font-size: 24px;
      color: #1a5086;
      font-weight: bold;
      margin: 0;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-top: 50px
    }
    
    th {
      background-color: #4a75af;
      color: white;
      text-align: left;
      padding: 12px 15px;
      font-weight: 500;
      border: 1px solid white;
    }
    
    td {
      padding: 12px 15px;
      border: 1px solid white;
      background-color: #8CB1DF;
      color: white;
      font-weight: normal;
    }
    
    tr.empty-row td {
      height: 50px;
      background-color: #8CB1DF;
    }
    
    .text-center {
      text-align: center;
    }
  </style>

  <h1 class="page-title">Báo cáo đề tài</h1>

<table>
  <thead>
    <tr>
      <th>Mã báo cáo</th>
      <th>Tên đề tài</th>
      <th>Tiêu đề</th>
      <th>Hoạt động</th>
      <th>Trạng thái</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>BC01</td>
      <td>Nghiên cứu về sự tiến hóa của Virus trong tương lai.</td>
      <td>Báo cáo tiến độ tháng 3</td>
      <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Xem báo cáo</a></td>
      <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#duyet">Chưa duyệt</a></td>
    </tr>
    <tr>
      <td>BC02</td>
      <td>Ứng dụng trí tuệ nhân tạo trong nhận diện khuôn mặt.</td>
      <td>Báo cáo sơ bộ</td>
      <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Xem báo cáo</a></td>
      <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#duyet">Chưa duyệt</a></td>
    </tr>
    <tr class="empty-row">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="empty-row">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="empty-row">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
<div class="modal fade" id="xembaocao" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px;">

            <!-- Header -->
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title fw-bold" style="color: #17488C;">Thông tin chi tiết của đề tài</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 1.6;">
                <p><strong>Mã báo cáo:</strong> BC20250307</p>
                <p><strong>Tiêu đề:</strong> Khuyến khích Nhà Khoa Học Dám Nghĩ, Dám Làm</p>
                <p><strong>Nội dung:</strong></p>
                <p style="text-align: justify; padding-left: 10px;">
                    Báo cáo phân tích vai trò của tư duy đột phá trong nghiên cứu khoa học, nhấn mạnh tầm quan trọng của việc tạo điều kiện cho các nhà khoa học thử nghiệm ý tưởng mới. Đồng thời, đề xuất các chính sách hỗ trợ nhằm thúc đẩy sáng tạo và ứng dụng khoa học vào thực tiễn.
                </p>

                <hr style="border: 1px dashed #17488C; margin: 15px 0;">

                <p><strong>Tên đề tài:</strong> Phát Triển Chính Sách Hỗ Trợ Nhà Khoa Học Đổi Mới Sáng Tạo</p>
                <p><strong>Người tạo:</strong> Admin</p>
                <p><strong>Ngày tạo:</strong> 07/03/2025</p>
                <p><strong>Trạng thái:</strong> Đang xét duyệt</p>
                <p><strong>Đường dẫn tệp:</strong> <a href="example.com/file/BC20250307" target="_blank" style="color: #17488C; text-decoration: underline;">example.com/file/BC20250307</a></p>

                <!-- Nhận xét -->
                <p class="fw-bold mt-3">Nhận xét:</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalNhanXet"
                        style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-weight: bold;width:100%;
                        border-radius: 22px; padding: 10px 30px; font-size: 18px;">
                        Nhập văn bản (Không yêu cầu bắt buộc)
                    </button>
                
          
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="duyet" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;color:#17488C">
            <div class="modal-header" style="border-bottom: 2px solidrgb(24, 83, 165) !important;">
                <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
            </div>
            <div class="modal-body text-center">
                <h3 id="thongbaoText">Bạn chắc chắn muốn duyệt báo cáo?</h3>
            </div>
            <div class="modal-footer d-flex">
                <button type="button" class="btn btn-primary flex-grow-1 mx-5"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                    border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                    id="btnTaiLen">Xác nhận</button>
                <button type="button" class="btn btn-secondary flex-grow-1 mx-2"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                    border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                    data-bs-dismiss="modal">Hủy</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalNhanXet" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 15px; border: none;">
            
            <!-- Header -->
            <div class="modal-header" style="border-bottom: none;">
                <h4 class="modal-title fw-bold" style="color: #17488C;">Nhận xét</h4>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <textarea class="form-control" placeholder="Nhập văn bản (Không yêu cầu bắt buộc)" 
                    style="background-color: #799DCB; border-radius: 10px; border: none; 
                    color:rgb(236, 237, 239); padding: 15px; font-size: 16px; height: 200px;">
                </textarea>
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #799DCB; color: #17488C; font-weight: bold;
                    border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                    Gửi
                </button>
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #799DCB; color: #17488C; font-weight: bold;
                    border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                    Quay lại
                </button>
            </div>
        </div>
    </div>
</div>


@endsection

