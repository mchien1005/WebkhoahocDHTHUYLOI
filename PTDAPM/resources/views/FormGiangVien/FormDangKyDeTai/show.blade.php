@extends('layouts.app1')

@section('sidebar')
<div class="menu-item ">
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
<div class="menu-item active">
    <a href="{{ route('dangkynghiencuu.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Đăng ký nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('baocaodetai.index') }}">
        <img src="{{ asset('img/material-symbols_article-person-outline.png') }}" alt="Report Icon" class="sidebar-icon" />
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
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
  
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f9ff;
  }
  
  .container {
    max-width: 1000px;
    margin: 0 auto;
    
  }
  
  h1 {
    color: #1a5086;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-top: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  th {
    background-color: #4a75af;
    color: white;
    text-align: left;
    padding: 15px 20px;
    font-weight: 500;
    font-size: 18px;
    border: 1px solid white;
  }
  
  td {
    padding: 15px 20px;
    border: 1px solid #d0e1f9;
    background: #a7c4e8;
    text-align: left;
    font-size: 16px;
  }
  
  tr:nth-child(even) td {
    background: #91b5e2;
  }
  
  .submit-btn {
    background-color: #4a75af;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 12px 30px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    float: right;
    margin-top: 30px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }
  
  .checkbox {
    text-align: center;
  }
  
  input[type="checkbox"] {
    width: 20px;
    height: 20px;
    cursor: pointer;
  }
  
  .empty-row td {
    height: 50px;
  }
</style>

<div class="container">
  <h1>Nộp danh sách đề tài</h1>
  
  <table>
    <thead>
      <tr>
        <th style="width: 15%;">Mã đề tài</th>
        <th style="width: 70%;">Tên đề tài</th>
        <th style="width: 15%;">Chọn</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>MD01</td>
        <td>Nghiên cứu về sự tiến hóa của Virus trong tương lai.</td>
        <td class="checkbox"><input type="checkbox"></td>
      </tr>
      <tr>
        <td>MD02</td>
        <td>Ứng dụng trí tuệ nhân tạo trong nhận diện khuôn mặt.</td>
        <td class="checkbox"><input type="checkbox"></td>
      </tr>
      <tr>
        <td>MD03</td>
        <td>Phát triển thuật toán học máy để dự đoán giá cổ phiếu.</td>
        <td class="checkbox"><input type="checkbox"></td>
      </tr>
      <tr>
        <td>MD04</td>
        <td>Tối ưu hóa hiệu suất mạng bằng thuật toán học sâu.</td>
        <td class="checkbox"><input type="checkbox"></td>
      </tr>
      <tr class="empty-row">
        <td></td>
        <td></td>
        <td class="checkbox"></td>
      </tr>
      <tr class="empty-row">
        <td></td>
        <td></td>
        <td class="checkbox"></td>
      </tr>
      
    </tbody>
  </table>
  
  <button class="submit-btn" data-bs-toggle="modal" data-bs-target="#dongy">Nộp đề tài</button>
</div>

<div class="modal fade" id="dongy" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 620px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color:#17488C">
            <div class="modal-header" style="border-bottom: none; padding-bottom: 0;">
                <h1 class="modal-title" style="font-size: 24px; display: flex; align-items: center; margin-bottom: 10px;">
                    <img src="{{ asset('img/Megaphone.png') }}" width="30" style="margin-right: 10px;"> Thông báo
                </h1>
            </div>
            
            <hr style="border-top: 1px solid #17488C; width: 100%; margin: 10px 0 20px 0;">
            
            <div class="modal-body text-center" style="padding: 0 20px 20px 20px;">
                <p style="font-size: 20px; margin-bottom: 20px;">Bạn chắc chắn muốn nộp các đề tài đã chọn không?</p>
            </div>
            
            <hr style="border-top: 1px solid rgba(23, 72, 140, 0.2); width: 100%; margin: 0 0 20px 0;">
            
            <div class="modal-footer" style="border-top: none; justify-content: center; padding: 0 20px 10px 20px;">
                <button type="button" class="btn" style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; 
                    border-radius: 22px; padding: 8px 40px; font-size: 18px; margin: 0 20px; min-width: 150px;">
                    Xác nhận
                </button>
                <button type="button" class="btn" style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                    border-radius: 22px; padding: 8px 40px; font-size: 18px; margin: 0 20px; min-width: 150px;"
                    data-bs-dismiss="modal">
                    Hủy
                </button>
            </div>
        </div>
    </div>
</div>
@endsection