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
    </style>

    <h1 class="page-title">Đề tài nghiên cứu</h1>

    <button class="add-button" type="button" data-bs-toggle="modal" data-bs-target="#themDetai">Thêm đề tài</button>

    <div class="modal fade" id="themDetai" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
            <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 10px; border: none;">

                <!-- Header -->
                <div class="modal-header" style="border-bottom: 2px solid #17488C;">
                    <h4 class="modal-title fw-bold" style="color: #17488C;">Thêm đề tài</h4>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <form>
                        <div class="row mb-3 align-items-center">
                            <label for="tenDeTai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Tên đề
                                tài:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tenDeTai"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="moTa" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Mô tả:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="moTa"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="trangThai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Trạng
                                thái:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="trangThai"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;width:30%">
                                    <option>Mặc định</option>
                                    <option>Đã duyệt</option>
                                    <option>Chưa duyệt</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="linhVuc" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Lĩnh vực
                                nghiên cứu:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="linhVuc"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="soLuongSV" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Số lượng
                                sinh viên:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="soLuongSV"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;width:20%">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #799DCB; color: #17488C; font-weight: bold;
                                        border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                        Đồng ý
                    </button>
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #799DCB; color: #17488C; font-weight: bold;
                                        border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                        Hủy
                    </button>
                </div>
            </div>
        </div>
    </div>



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
            <tr>
                <td>MD01</td>
                <td><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Nghiên cứu về sự tiến hóa của Virus
                        trong tương lai.</a></td>
                <td class="text-center">Đã xét duyệt</td>
                <td class="text-center">Đã nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD02</td>
                <td><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Ứng dụng trí tuệ nhân tạo trong nhận
                        diện khuôn mặt.</a></td>
                <td class="text-center">Chờ xét duyệt</td>
                <td class="text-center">Nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD03</td>
                <td><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Phát triển thuật toán học máy để dự
                        đoán giá cổ phiếu.</a></td>
                <td class="text-center">Chờ xét duyệt</td>
                <td class="text-center">Nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD04</td>
                <td><a type="button" data-bs-toggle="modal" data-bs-target="#xembaocao">Tối ưu hóa hiệu suất mạng bằng thuật
                        toán học sâu.</a></td>
                <td class="text-center">Đã xét duyệt</td>
                <td class="text-center">Đã nộp báo cáo</td>
            </tr>
            <tr class="empty-row">
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
            </tr>
            <tr class="empty-row">
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
                <div class="modal-header" style="border-bottom: 1px solid #17488C;">
                    <h5 class="modal-title fw-bold" style="color: #17488C;">Thông tin chi tiết của đề tài</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <div class="modal-body" style="color: #17488C; font-size: 16px; line-height: 2;">
                    <p><strong>Tên đề tài:</strong></p>
                    <p><strong>Mô tả:</strong></p>
                    <p><strong>Trạng thái:</strong></p>
                    <p><strong>Lĩnh vực nghiên cứu:</strong></p>
                    <p><strong>Số lượng sinh viên:</strong></p>
                </div>

                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn fw-bold" data-bs-toggle="modal" data-bs-target="#suadetai"
                        style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                        Sửa
                    </button>
                    <button type="button" class="btn fw-bold"
                        style="background-color: #799DCB; color: #17488C; border-radius: 10px; padding: 8px 20px;">
                        Xóa
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="suadetai" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
            <div class="modal-content" style="background-color: #e3f0ff; padding: 20px; border-radius: 10px; border: none;">

                <!-- Header -->
                <div class="modal-header" style="border-bottom: 2px solid #17488C;">
                    <h4 class="modal-title fw-bold" style="color: #17488C;">Sửa đề tài</h4>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <form>
                        <div class="row mb-3 align-items-center">
                            <label for="tenDeTai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Tên đề
                                tài:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tenDeTai"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="moTa" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Mô tả:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="moTa"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="trangThai" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Trạng
                                thái:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="trangThai"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;width:30%">
                                    <option>Mặc định</option>
                                    <option>Đã duyệt</option>
                                    <option>Chưa duyệt</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="linhVuc" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Lĩnh vực
                                nghiên cứu:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="linhVuc"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label for="soLuongSV" class="col-sm-3 col-form-label fw-bold" style="color: #17488C;">Số lượng
                                sinh viên:</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="soLuongSV"
                                    style="background-color: #799DCB; border: none; border-radius: 10px; color: #17488C;width:20%">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#dongyy" style="background-color: #799DCB; color: #17488C; font-weight: bold;
                                        border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                        Đồng ý
                    </button>
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #799DCB; color: #17488C; font-weight: bold;
                                        border-radius: 15px; padding: 8px 25px; font-size: 16px;">
                        Hủy
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dongyy" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
            <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;color:#17488C">
                <div class="modal-header" style="border-bottom: 2px solidrgb(24, 83, 165) !important;">
                    <h1 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h1>
                </div>
                <div class="modal-body text-center">
                    <h3 id="thongbaoText">Bạn có muốn lưu thông tin này?</h3>
                </div>
                <div class="modal-footer d-flex">
                    <button type="button" class="btn btn-primary flex-grow-1 mx-5" style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                                        border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                        id="btnTaiLen">Xác
                        nhận</button>
                    <button type="button" class="btn btn-secondary flex-grow-1 mx-2" style="background-color: rgba(81, 131, 202, 0.6); color: #17488C;
                                        border-radius: 22px; padding: 10px 30px; font-size: 20px; font-weight: bold;"
                        data-bs-dismiss="modal">Hủy</button>
                </div>

            </div>
        </div>
    </div>

@endsection