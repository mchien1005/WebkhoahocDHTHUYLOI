@extends('layouts.app')

@section('sidebar')
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.student.index') }}">
            <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.detai.index') }}">
            <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Đề tài nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('FormSinhVien.searchgv.index') }}">
            <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Tìm kiếm giảng viên</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('FormSinhVien.loimoi.index') }}">
            <img src="{{ asset('img/School Director.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Lời mời hướng dẫn</span>
        </a>
    </div>
@endsection


@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap');

        .table-container {
            max-width: 90%;
            margin-left: 0;
        }

        .table {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 600;
            border-radius: 10px;
            overflow: hidden;

        }

        .table thead th {
            background-color: #255293;
            color: white;
            /* Chỉnh màu chữ */
            text-align: center;
            border: 2px solid white;
            vertical-align: start;
            padding: 15px;
        }

        .table tbody td {
            background-color: rgba(81, 131, 202, 0.6);
            color: #225293;
            border: 2px solid white;
            vertical-align: middle;
            padding: 15px;
        }

        .table tbody tr:nth-child(even) td {
            background-color: rgba(81, 131, 202, 0.8);
        }

        .table a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .table a:hover {
            text-decoration: underline;
        }

        .badge {
            font-size: 18px;
            padding: 10px 15px;
        }

        .text-center-col {
            text-align: center;
        }

        /* Căn chỉnh input và button */
        .search-container {
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 700px;
            margin-left: 0;
        }

        .search-container input {
            width: 524px;
            height: 51px;
            background-color: rgba(81, 131, 202, 0.6);
            color: #225293;
            border-radius: 18px;
            border: none;
            padding: 10px;
        }

        .search-container button {
            width: 152px;
            height: 51px;
            background-color: rgba(81, 131, 202, 0.6);
            color: #225293;
            border-radius: 18px;
            border: none;
            font-size: 20px;
            font-family: 'Rasa', serif;
        }

        .custom-input {
            background-color: rgba(81, 131, 202, 0.6);
            color: #17488C;
            border-radius: 18px;
            border: none;
            height: 51px;
            padding-left: 15px;
            /* Tạo khoảng cách cho chữ bên trong */
        }

        .custom-input::placeholder {
            color: #17488C;
            /* Đổi màu placeholder để đồng bộ */
        }
    </style>

    <body class="" style="background-color: #E6F0FA;">

        <!-- Bọc toàn bộ nội dung trong một div căn giữa -->
        <div class="container d-flex flex-column align-items-start">

            <!-- Ô tìm kiếm -->
            <div class="mb-3 search-container">
                <input type="text" class="form-control"
                    style="width: 524px; background-color: rgba(81, 131, 202, 0.6);color: #17488C; font-size: 32px; border-radius: 18px; height: 51px;">
                <button type="submit" class="btn" style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 32px; border-radius: 18px; border: none; 
                                                               height: 51px; width: 152px;">
                    Tìm kiếm
                </button>
            </div>

            <!-- Dropdown lĩnh vực nghiên cứu -->
            <div class="mb-3">
                <select name="field" class="form-control"
                    style="width: 524px; background-color: rgba(81, 131, 202, 0.6);color: #17488C; font-size: 32px; border-radius: 18px; height: 51px;">
                    <option value="">-- Chọn lĩnh vực nghiên cứu --</option>
                    <option value="Khoa học máy tính" {{ request('field') == 'Khoa học máy tính' ? 'selected' : '' }}>Khoa
                        học
                        máy tính</option>
                    <option value="Trí tuệ nhân tạo" {{ request('field') == 'Trí tuệ nhân tạo' ? 'selected' : '' }}>Trí tuệ
                        nhân
                        tạo</option>
                    <option value="Kỹ thuật phần mềm" {{ request('field') == 'Kỹ thuật phần mềm' ? 'selected' : '' }}>Kỹ
                        thuật
                        phần mềm</option>
                    <option value="An toàn thông tin" {{ request('field') == 'An toàn thông tin' ? 'selected' : '' }}>An
                        toàn
                        thông tin</option>
                    <option value="Mạng máy tính" {{ request('field') == 'Mạng máy tính' ? 'selected' : '' }}>Mạng máy tính
                    </option>
                </select>
            </div>

            <div class="container mt-4 table-container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Mã giảng viên</th>
                                <th class="text-center">Tên giảng viên</th>
                                <th class="text-center">Lĩnh vực nghiên cứu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#GVchitietModal">GV01</a>
                                </td>
                                <td class="text-center-col">Nguyen Van B</td>
                                <td class="text-center-col">Trí tuệ nhân tạo</td>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#inviteModal">Gửi lời mời hướng
                                        dẫn</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">GV02</a>
                                </td>
                                <td class="text-center-col">Nguyen Van B</td>
                                <td class="text-center-col">Khoa học</td>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#inviteModal">Gửi lời mời hướng
                                        dẫn</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">GV03</a>
                                </td>
                                <td class="text-center-col">Nguyen Van B</td>
                                <td class="text-center-col">Học sâu</td>
                                <td class="text-center-col">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#inviteModal">Gửi lời mời hướng
                                        dẫn</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- GVchitietModal Bootstrap -->
        <div class="modal fade" id="GVchitietModal" tabindex="-1" aria-labelledby="GVchitietModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: #E7F5FF; border-radius: 0; display: flex; align-items: center; justify-content: center;">
                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="row">
                            <!-- Cột hình ảnh -->
                            <div class="col-md-3 d-flex justify-content-center align-items-start">
                                <!-- Dịch ảnh lên trên -->
                                <div
                                    style="width: 130px; height: 160px; background-color: rgba(81, 131, 202, 0.6); 
                                                                                display: flex; justify-content: center; align-items: center; border-radius: 8px;">
                                    <img src="{{ asset('img/User02.png') }}" class="img-fluid" width="100" height="100"
                                        style="border-radius: 45%;">
                                </div>
                            </div>

                            <!-- Cột thông tin -->
                            <div class="col-md-9">
                                <p><strong>Họ và tên:</strong> Nguyễn Văn B</p>
                                <p><strong>Mã giảng viên:</strong> GV01 &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong>Mã khoa:</strong> CSE384
                                </p>
                                <p><strong>Học vị:</strong> Thạc sĩ</p>
                                <p><strong>Số điện thoại:</strong> 0867078917</p>
                                <p><strong>Email:</strong> NguyenVanB@email.com</p>
                                <p><strong>Lĩnh vực nghiên cứu:</strong> Trí tuệ nhân tạo</p>
                            </div>
                        </div>

                        <!-- Định hướng nghiên cứu -->
                        <p><strong>Định hướng nghiên cứu:</strong> Ứng dụng AI trong chẩn đoán bệnh qua
                            hình ảnh y khoa:
                            Phát triển mô hình AI hỗ trợ bác sĩ phân tích X-quang, MRI, CT.
                            Nghiên cứu độ chính xác của AI so với chẩn đoán truyền thống.
                            Mục tiêu cải thiện chất lượng và tốc độ chẩn đoán y khoa.
                        </p>

                        <!-- Số sinh viên hướng dẫn -->
                        <p><strong>Số sinh viên hướng dẫn:</strong> 5</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #E7F5FF; border-radius: 0; color: #225293;">
                    <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                        <h5 class="modal-title fw-bold" id="modalTitle" style="text-decoration: none !important;">Gửi lời
                            mời hướng dẫn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Tên
                                giảng viên:</label>
                            <div class="col-md-8">
                                <span class="fw-bold " style="text-decoration: none !important;">Nguyễn Văn B</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Tên
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-primary-subtle " placeholder="Nhập tên sinh viên"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Mã
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-primary-subtle " placeholder="Nhập mã sinh viên"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Email:</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control bg-primary-subtle " placeholder="Nhập email"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Đề
                                tài:</label>
                            <div class="col-md-8">
                                <select class="form-select bg-primary-subtle " style="text-decoration: none !important;">
                                    <option selected>Chọn đề tài của giảng viên</option>
                                    <option>Đề 1</option>
                                    <option>Đề 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal"
                            data-bs-target="#invite2Modal"
                            style="text-decoration: none !important; background-color: rgba(81, 131, 202, 0.6);color: #225293;font-weight: bolder">Đã
                            có đề tài</button>
                        <button type="button" class="btn btn-primary"
                            style="text-decoration: none !important; background-color: rgba(81, 131, 202, 0.6);color: #225293;font-weight: bolder">Gửi
                            lời mời</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="invite2Modal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #E7F5FF; border-radius: 0; color: #225293;">
                    <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                        <h5 class="modal-title fw-bold" id="modalTitle" style="text-decoration: none !important;">Gửi lời
                            mời hướng dẫn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Tên
                                giảng viên:</label>
                            <div class="col-md-8">
                                <span class="fw-bold " style="text-decoration: none !important;">Nguyễn Văn B</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Tên
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-primary-subtle " placeholder="Nhập tên sinh viên"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Mã
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-primary-subtle " placeholder="Nhập mã sinh viên"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Email:</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control bg-primary-subtle " placeholder="Nhập email"
                                    style="text-decoration: none !important;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 btn btn-secondary" data-bs-dismiss="modal"
                                style="background-color: rgba(81, 131, 202, 0.6); color: #225293; font-weight: bolder;">
                                Đã có đề tài
                            </label>
                            <div class="col-md-8">
                                <input type="email" class="form-control bg-primary-subtle" placeholder="Nhập đề tài">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"
                            style="text-decoration: none !important; background-color: rgba(81, 131, 202, 0.6);color: #225293;font-weight: bolder">Gửi
                            lời mời</button>
                    </div>
                </div>
            </div>
        </div>
@endsection