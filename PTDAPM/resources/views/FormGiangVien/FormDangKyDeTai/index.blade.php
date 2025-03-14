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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f9ff;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      color: #1a5086;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .button-group {
      display: flex;
      gap: 20px;
      margin-bottom: 25px;
    }
    
    .button {
      background-color: #5083c9;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 15px 25px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      text-transform: uppercase;
      text-align: center;
      min-width: 180px;
      line-height: 1.4;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-top: 20px;
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
      color: white;
      padding: 12px 15px;
      border: 1px solid white;
      background: rgba(81, 131, 202, 0.60);
      text-align: left;
    }
    
    .tool-widget {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: white;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .tool-widget p {
      margin: 5px 0;
      font-size: 14px;
      color: #333;
    }
  </style>

  <div class="container">
    <h1>Đăng ký nghiên cứu</h1>
    
    <div class="button-group">
      <button class="button" type="button" data-bs-toggle="modal" data-bs-target="#dangkydinhhuongnghiencuu">Đăng ký định hướng<br>nghiên cứu</button>
      <button class="button" type="button" data-bs-toggle="modal" data-bs-target="#dangkydetaidukien">Đăng ký đề tài<br>dự kiến</button>
      <form action="{{ route('dangkynghiencuu.show') }}" method="GET" style="display: inline;">
        <button type="submit" class="button">Nộp danh sách<br>đề tài</button>
      </form>
    </div>
    
    <table>
      <thead>
        <tr>
          <th>Tên GV</th>
          <th>Mã GV</th>
          <th>Lĩnh vực nghiên cứu</th>
          <th>SL SV Hướng dẫn</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>MD01</td>
          <td>2345675</td>
          <td>Công nghệ phần mềm</td>
          <td>4</td>
        </tr>
        <tr>
          <td>MD02</td>
          <td>6876786</td>
          <td>trí tuệ nhân tạo</td>
          <td>5</td>
        </tr>
        <tr>
          <td>MD03</td>
          <td>4757687</td>
          <td>robot và máy tính</td>
          <td>4</td>
        </tr>
        <tr>
          <td>MD04</td>
          <td>465654</td>
          <td>Khoa học máy tính</td>
          <td>5</td>
        </tr>
        <tr>
          <td>MD05</td>
          <td>565475</td>
          <td>Kinh tế học</td>
          <td>3</td>
        </tr>
        <tr>
          <td>MD06</td>
          <td>756756</td>
          <td>Sinh học</td>
          <td>2</td>
        </tr>
        <tr>
          <td>MD02</td>
          <td>575762</td>
          <td>Tự động hóa</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
    
    
  </div>
  <div class="modal fade" id="dangkydinhhuongnghiencuu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px; border: none;">

            <!-- Header -->
            <div class="modal-header" >
                <h5 class="modal-title fw-bold" style="color: #17488C;">Đăng ký định hướng nghiên cứu năm học</h5>
                <div class="text-end" style="color: #17488C;">
                    <span class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#17488C" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </span>
                    2024-2025
                </div>
            </div>

            <!-- Body -->
            <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 2;">
                <div class="rounded p-3 mb-3" style="background-color: #95b9e6;">
                    <div class="mb-3">
                        <p><strong>Tiêu đề:</strong> <input type="text" class="form-control" value="Khuyến khích Nhà Khoa Học Dám Nghĩ, Dám Làm" style="background-color: transparent; border: none; color: #17488C; font-size: 16px;"></p>
                    </div>
                    <div>
                        <p><strong>Nội dung:</strong> <textarea class="form-control" rows="5" style="background-color: transparent; border: none; color: #17488C; font-size: 16px;">Báo cáo phân tích vai trò của tư duy đột phá trong nghiên cứu khoa học, nhấn mạnh tầm quan trọng của việc tạo điều kiện cho các nhà khoa học thử nghiệm ý tưởng mới. Đồng thời, đề xuất các chính sách hỗ trợ nhằm thúc đẩy sáng tạo và ứng dụng khoa học vào thực tiễn.</textarea></p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn fw-bold"
                    style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                    Đăng ký
                </button>
                <button type="button" class="btn fw-bold" data-bs-dismiss="modal"
                    style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                    Hủy
                </button>
            </div>

        </div>
    </div>
</div>
  
<div class="modal fade" id="dangkydetaidukien" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="background-color: #f0f8ff; padding: 30px; border-radius: 15px; border: none;">
            
            <!-- Header -->
            <div class="modal-header" style="border-bottom: none; padding-bottom: 0;">
                <h4 class="modal-title fw-bold" style="color: #17488C;">Đăng ký đề tài dự kiến</h4>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <form>
                    <div class="row mb-3 align-items-start">
                        <label for="tenDeTai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Tên đề tài:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tenDeTai" value="Khuyến khích Nhà Khoa Học Dám Nghĩ, Dám Làm" style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;">
                        </div>
                    </div>

                    <div class="row mb-3 align-items-start">
                        <label for="moTa" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Mô tả đề tài:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="moTa" rows="5" style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;">Báo cáo phân tích vai trò của tư duy đột phá trong nghiên cứu khoa học, nhấn mạnh tầm quan trọng của việc tạo điều kiện cho các nhà khoa học thử nghiệm ý tưởng mới. Đồng thời, đề xuất các chính sách hỗ trợ nhằm thúc đẩy sáng tạo và ứng dụng khoa học vào thực tiễn.</textarea>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label for="linhVuc" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Lĩnh vực nghiên cứu:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="linhVuc" style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; padding: 10px;">
                                <option selected>Chọn lĩnh vực...</option>
                            </select>
                            <div class="d-flex justify-content-end">
                                <i class="bi bi-chevron-down" style="color: #17488C; margin-top: -30px; margin-right: 10px;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <label for="soLuongSV" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Số lượng sinh viên:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="soLuongSV" style="background-color: #95b9e6; border: none; border-radius: 10px; color: #17488C; width: 80px; padding: 10px;">
                                <option selected>5</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex justify-content-end">
                                <i class="bi bi-chevron-down" style="color: #17488C; margin-top: -30px; margin-right: 10px;"></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end" style="border-top: none;">
                <button type="button" class="btn" 
                    style="background-color: #95b9e6; color: #17488C; font-weight: bold;
                    border-radius: 10px; padding: 8px 25px; font-size: 16px;">
                    Đăng ký
                </button>
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #95b9e6; color: #17488C; font-weight: bold;
                    border-radius: 10px; padding: 8px 25px; font-size: 16px;">
                    Hủy
                </button>
            </div>
        </div>
    </div>
</div>

@endsection