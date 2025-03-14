@extends('layouts.app')

@section('sidebar')
<div class="menu-item ">
    <a href="{{ route('tintuc.index') }}">
      <img src="img/Commercial.png" alt="News Icon" class="sidebar-icon" />
      <span>Tin tức</span>
    </a>
</div>
<div class="menu-item">
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
<div class="menu-item">
    <a href="{{ route('baocaodetai.index') }}">
      <img src="img/material-symbols_article-person-outline.png" alt="Report Icon" class="sidebar-icon" />
      <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item active">
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
      margin-top: 50px;
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
    
    .text-center {
      text-align: center;
    }
    
    .xu-ly-btn {
      background-color: #4a75af;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 3px;
      text-decoration: none;
      display: inline-block;
    }
  </style>

  <h1 class="page-title">Lời mời hướng dẫn</h1>

  <table>
    <thead>
      <tr>
        <th>Tên sinh viên</th>
        <th>Tên đề tài</th>
        <th>Trạng thái</th>
        <th>Thời gian gửi</th>
        <th>Xét duyệt</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nguyễn Văn A</td>
        <td>Nghiên cứu ứng dụng AI trong y tế</td>
        <td>Chưa duyệt</td>
        <td>4 ngày trước</td>
        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal">Xử lý</a></td>
      </tr>
      <tr>
        <td>Trần Thị B</td>
        <td>Phát triển hệ thống IoT cho nông nghiệp</td>
        <td>Chưa duyệt</td>
        <td>5 ngày trước</td>
        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal">Xử lý</a></td>
      </tr>
      <tr>
        <td>Lê Văn C</td>
        <td>Ứng dụng blockchain trong quản lý chuỗi cung ứng</td>
        <td>Đã duyệt</td>
        <td>4 ngày trước</td>
        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal">Xử lý</a></td>
      </tr>
      <tr>
        <td>Phạm Thị D</td>
        <td>Nghiên cứu giải pháp bảo mật cho hệ thống thông tin</td>
        <td>Chưa duyệt</td>
        <td>5 ngày trước</td>
        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal">Xử lý</a></td>
      </tr>
      <tr>
        <td>Hoàng Văn E</td>
        <td>Phát triển ứng dụng di động đa nền tảng</td>
        <td>Chưa duyệt</td>
        <td>3 ngày trước</td>
        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal">Xử lý</a></td>
      </tr>
    </tbody>
  </table>


  <div class="modal fade" id="xacnhanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px;">

            <!-- Header -->
            <div class="modal-header" style="border-bottom: none;">
                <h1 class="modal-title" style="color: #17488C; font-weight: bold;">Xử lý lời mời</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="color: #17488C; font-size: 22px;"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-3 align-items-center">
                        <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Tên sinh viên:</label>
                        <div class="col-8 d-flex align-items-center">
                            <span style="color: #17488C; font-size: 20px;">Nguyễn Văn A</span>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Mã sinh viên:</label>
                        <div class="col-8">
                            <span class="form-control text-center" style="background-color: rgba(81, 131, 202, 0.6); 
                                        border-radius: 12px; color: #17488C; font-size: 20px; border: none;width:55%">
                                225117336
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Tên đề tài:</label>
                        <div class="col-8">
                            <span class="form-control text-center" style="background-color: rgba(81, 131, 202, 0.6);
                                        border-radius: 12px; color: #17488C; font-size: 20px; border: none;">
                                (Tên đề tài sẽ hiển thị tại đây)
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label class="col-4 text-start fw-bold" style="color: #17488C; font-size: 20px;">Thời gian gửi:</label>
                        <div class="col-8 d-flex align-items-center">
                            <i class="bi bi-clock" style="color: #17488C; font-size: 20px; margin-right: 8px;"></i>
                            <span style="color: #17488C; font-size: 18px; font-weight: bold;">9:30 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-end">
                <button type="button" data-bs-toggle="modal" data-bs-target="#dongy"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                           border-radius: 22px; padding: 10px 30px; font-size: 18px; font-weight: bold;">
                    Đồng ý
                </button>
                <button type="button" class="btn"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                           border-radius: 22px; padding: 10px 30px; font-size: 18px; font-weight: bold;"
                    data-bs-dismiss="modal">
                    Từ chối
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dongy" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;color:#17488C">
            <div class="modal-header" style="border-bottom: 2px solidrgb(24, 83, 165) !important;">
                <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
            </div>
            <div class="modal-body text-center">
                <h3 id="thongbaoText">Bạn có muốn xác nhận đồng ý lời mời?</h3>
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
@endsection