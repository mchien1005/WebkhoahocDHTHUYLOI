@extends('layouts.app1')

@section('sidebar')
<div class="menu-item ">
    <a href="{{ route('tintuc.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('detainghiencuu.index') }}">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item ">
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
    
    .add-button {
      background-color: #5083c9;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      float: right;
      margin-bottom: 15px;
    }
    
    .add-button:before {
      content: "+";
      margin-right: 8px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
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
    
    .clickable {
      cursor: pointer;
      color: white;
      text-decoration: underline;
    }
    
    .modal-form .form-control, .modal-form .form-select {
      background-color: #799DCB; 
      border: none; 
      border-radius: 10px; 
      color: #17488C;
    }
    
    .modal-form label {
      color: #17488C;
      font-weight: bold;
    }
    
    .btn-custom {
      background-color: #799DCB; 
      color: #17488C; 
      font-weight: bold;
      border-radius: 15px; 
      padding: 8px 25px; 
      font-size: 16px;
    }
    
    .alert {
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
    }
    
    .alert-success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
    
    .alert-danger {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>

  <h1 class="page-title">Đề tài nghiên cứu</h1>
  
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  
  @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
  
  <button class="add-button" type="button" data-bs-toggle="modal" data-bs-target="#themDetai">Thêm đề tài</button>
  
  <!-- Thêm đề tài modal -->
  <div class="modal fade" id="themDetai" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 10px; border: none;">

            <!-- Header -->
            <div class="modal-header" style="border-bottom: 2px solid #17488C;">
                <h4 class="modal-title fw-bold" style="color: #17488C;">Thêm đề tài</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
             
             <div class="modal-body">
                <form action="{{ route('detainghiencuu.store') }}" method="POST" class="modal-form">
                    @csrf
                    <div class="row mb-3 align-items-center">
                        <label for="ten_de_tai" class="col-sm-3 col-form-label">Tên đề tài:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ten_de_tai" name="ten_de_tai" required>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="mo_ta" class="col-sm-3 col-form-label">Mô tả:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="mo_ta" name="mo_ta" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="trang_thai" class="col-sm-3 col-form-label">Trạng thái:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="trang_thai" name="trang_thai" style="width:auto">
                                <option value="Chờ duyệt">Chờ duyệt</option>
                                <option value="Được duyệt">Được duyệt</option>
                                <option value="Hoàn thành">Hoàn thành</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="linh_vuc_nc" class="col-sm-3 col-form-label">Lĩnh vực nghiên cứu:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="linh_vuc_nc" name="linh_vuc_nc" required>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="so_luong_sv" class="col-sm-3 col-form-label">Số lượng sinh viên:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="so_luong_sv" name="so_luong_sv" style="width:auto">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-custom">
                            Xác nhận
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-dismiss="modal">
                            Hủy
                        </button>
                    </div>
                </form>
            </div>
            
            
        </div>
    </div>
</div>

  <!-- Danh sách đề tài -->
  <table>
    <thead>
      <tr>
        <th>Mã đề tài</th>
        <th>Tên đề tài</th>
        <th>Trạng thái</th>
        <th>Trạng thái báo cáo</th>
      </tr>
    </thead>
    <tbody>
      @forelse($deTais as $deTai)
      <tr>
        <td>{{ $deTai->ma_de_tai }}</td>
        <td>
          <a href="#" class="clickable" data-id="{{ $deTai->ma_de_tai }}" data-bs-toggle="modal" data-bs-target="#xemDeTai{{ $deTai->ma_de_tai }}">
            {{ $deTai->ten_de_tai }}
          </a>
        </td>
        <td class="text-center">{{ $deTai->trang_thai }}</td>
        <td class="text-center">
          @php
            $baoCao = $deTai->baoCaos;
          @endphp
          @if($baoCao)
            Đã nộp báo cáo
          @else
            Nộp báo cáo
          @endif
        </td>
      </tr>
      
      <!-- Modal xem chi tiết đề tài -->
      <div class="modal fade" id="xemDeTai{{ $deTai->ma_de_tai }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
          <div class="modal-content" style="background-color: #d9eaff; padding: 30px; border-radius: 15px;">
            <!-- Header -->
            <div class="modal-header" style="border-bottom: 1px solid #17488C;">
              <h5 class="modal-title fw-bold" style="color: #17488C;">Thông tin chi tiết của đề tài</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 2;">
              <p><strong>Tên đề tài:</strong> {{ $deTai->ten_de_tai }}</p>
              <p><strong>Mô tả:</strong> {{ $deTai->mo_ta }}</p>
              <p><strong>Trạng thái:</strong> {{ $deTai->trang_thai }}</p>
              <p><strong>Lĩnh vực nghiên cứu:</strong> {{ $deTai->linh_vuc_nc }}</p>
              <p><strong>Số lượng sinh viên:</strong> {{ $deTai->so_luong_sv }}</p>
              <p><strong>Ngày đăng ký:</strong> {{ $deTai->ngay_dang_ky }}</p>
              @if($deTai->diem_phan_bien)
                <p><strong>Điểm phản biện:</strong> {{ $deTai->diem_phan_bien }}</p>
              @endif
              @if($deTai->ket_qua_khoa)
                <p><strong>Kết quả cấp khoa:</strong> {{ $deTai->ket_qua_khoa }}</p>
              @endif
              @if($deTai->ket_qua_truong)
                <p><strong>Kết quả cấp trường:</strong> {{ $deTai->ket_qua_truong }}</p>
              @endif
            </div>

            <!-- Footer -->
            <div class="modal-footer d-flex justify-content-end">
              @if(Auth::user() && Auth::user()->ma_gv == $deTai->ma_gv)
                <button type="button" class="btn fw-bold" data-bs-toggle="modal" data-bs-target="#suaDeTai{{ $deTai->ma_de_tai }}"
                  style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                  Sửa
                </button>
                <form action="{{ route('detainghiencuu.destroy', $deTai->ma_de_tai) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn fw-bold btn-delete"
                    style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                    Xóa
                  </button>
                </form>
              @endif
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal sửa đề tài -->
      <div class="modal fade" id="suaDeTai{{ $deTai->ma_de_tai }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 10px; border: none;">
            <!-- Header -->
            <div class="modal-header" style="border-bottom: 2px solid #17488C;">
              <h4 class="modal-title fw-bold" style="color: #17488C;">Sửa đề tài</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
              <form action="{{ route('detainghiencuu.update', $deTai->ma_de_tai) }}" method="POST" class="modal-form">
                @csrf
                @method('PUT')
                <div class="row mb-3 align-items-center">
                  <label for="ten_de_tai_{{ $deTai->ma_de_tai }}" class="col-sm-3 col-form-label">Tên đề tài:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="ten_de_tai_{{ $deTai->ma_de_tai }}" name="ten_de_tai" value="{{ $deTai->ten_de_tai }}" required>
                  </div>
                </div>
                <div class="row mb-3 align-items-center">
                  <label for="mo_ta_{{ $deTai->ma_de_tai }}" class="col-sm-3 col-form-label">Mô tả:</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="mo_ta_{{ $deTai->ma_de_tai }}" name="mo_ta" rows="3" required>{{ $deTai->mo_ta }}</textarea>
                  </div>
                </div>
                <div class="row mb-3 align-items-center">
                  <label for="trang_thai_{{ $deTai->ma_de_tai }}" class="col-sm-3 col-form-label">Trạng thái:</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="trang_thai_{{ $deTai->ma_de_tai }}" name="trang_thai" style="width:auto">
                      <option value="Chờ duyệt" {{ $deTai->trang_thai == 'Chờ duyệt' ? 'selected' : '' }}>Chờ duyệt</option>
                      <option value="Được duyệt" {{ $deTai->trang_thai == 'Được duyệt' ? 'selected' : '' }}>Được duyệt</option>
                      <option value="Hoàn thành" {{ $deTai->trang_thai == 'Hoàn thành' ? 'selected' : '' }}>Hoàn thành</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3 align-items-center">
                  <label for="linh_vuc_nc_{{ $deTai->ma_de_tai }}" class="col-sm-3 col-form-label">Lĩnh vực nghiên cứu:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="linh_vuc_nc_{{ $deTai->ma_de_tai }}" name="linh_vuc_nc" value="{{ $deTai->linh_vuc_nc }}" required>
                  </div>
                </div>
                <div class="row mb-3 align-items-center">
                  <label for="so_luong_sv_{{ $deTai->ma_de_tai }}" class="col-sm-3 col-form-label">Số lượng sinh viên:</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="so_luong_sv_{{ $deTai->ma_de_tai }}" name="so_luong_sv" style="width:auto">
                      @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ $deTai->so_luong_sv == $i ? 'selected' : '' }}>{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                </div>
                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-end">
                  <button type="submit" class="btn btn-custom">
                    Xác nhận
                  </button>
                  <button type="button" class="btn btn-custom" data-bs-dismiss="modal">
                    Hủy
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal xác nhận xóa -->
      <div class="modal fade" id="xacNhanXoa{{ $deTai->ma_de_tai }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
          <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px; color:#17488C">
            <div class="modal-header" style="border-bottom: 2px solid #17488C;">
              <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h3>Bạn có chắc chắn muốn xóa đề tài này?</h3>
            </div>
            <div class="modal-footer d-flex">
              <form action="{{ route('detainghiencuu.destroy', $deTai->ma_de_tai) }}" method="POST" style="display: inline; width: 100%;">
                @csrf
                @method('DELETE')
                <div class="d-flex justify-content-around w-100">
                  <button type="submit" class="btn btn-primary flex-grow-1 mx-2"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;">
                    Xác nhận
                  </button>
                  <button type="button" class="btn btn-secondary flex-grow-1 mx-2" data-bs-dismiss="modal"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;">
                    Hủy
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @empty
      <tr>
        <td colspan="4" class="text-center">Không có đề tài nào</td>
      </tr>
      @endforelse
      
      <!-- Các hàng trống để giữ thiết kế của bảng -->
      @if(count($deTais) < 3)
        @for($i = 0; $i < 3 - count($deTais); $i++)
          <tr class="empty-row">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        @endfor
      @endif
    </tbody>
  </table>

  <!-- JavaScript cho các chức năng -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Script để kích hoạt modal xác nhận xóa
      document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
          const deTaiId = this.closest('form').action.split('/').pop();
          const modal = document.getElementById('xacNhanXoa' + deTaiId);
          const bootstrapModal = new bootstrap.Modal(modal);
          bootstrapModal.show();
        });
      });
    });
  </script>
@endsection
