@extends('layouts.app')

@section('sidebar')
<div class="menu-item">
    <a href="{{ route('FormSinhVien.student.index') }}">
        <img src="{{ asset('img/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('FormSinhVien.detai.index') }}">
        <img src="{{ asset('img/Saddle Stitched Booklet.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Đề tài nghiên cứu</span>
    </a>
</div>
<div class="menu-item">
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
    margin: auto;
}

.table {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    font-weight: 600;
    /* Semi Bold */
    border-radius: 10px;
    overflow: hidden;
}

.table thead th {
    background-color: #255293;
    color: white;
    text-align: center;
    border: 2px solid white;
    vertical-align: middle;
    padding: 15px;
}

.table tbody td {
    background-color: rgba(81, 131, 202, 0.6);
    color: white;
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
</style>

<div class="container mt-5">
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Mã đề tài</th>
                        <th class="text-center">Tên đề tài</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Trạng thái báo cáo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">
                                MD01
                            </a>
                        </td>

                        <td>Nghiên cứu về sự tiến hóa của Virus trong tương lai.</td>
                        <td class="text-center-col">Chờ xét duyệt</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#baocaoModal">
                                Nộp báo cáo
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">
                                MD02
                            </a>
                        </td>
                        <td>Ứng dụng trí tuệ nhân tạo trong nhận diện khuôn mặt.</td>
                        <td class="text-center-col">Chờ xét duyệt</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#baocaoModal">
                                Nộp báo cáo
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">
                                MD01
                            </a>
                        </td>
                        <td>Phát triển thuật toán học máy để dự đoán giá cổ phiếu.</td>
                        <td class="text-center-col">Chờ xét duyệt</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#baocaoModal">
                                Nộp báo cáo
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#DTchitietModal">
                                MD01
                            </a>
                        </td>
                        <td>Tối ưu hóa hiệu suất mạng bằng thuật toán học sâu.</td>
                        <td class="text-center-col">Chờ xét duyệt</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#baocaoModal">
                                Nộp báo cáo
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center-col"></td>
                        <td></td>
                        <td class="text-center-col"></td>
                        <td class="text-center-col"></td>
                    </tr>
                    <tr>
                        <td class="text-center-col"></td>
                        <td></td>
                        <td class="text-center-col"></td>
                        <td class="text-center-col"></td>
                    </tr>
                    <tr>
                        <td class="text-center-col"></td>
                        <td></td>
                        <td class="text-center-col"></td>
                        <td class="text-center-col"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal Nộp Báo Cáo -->
<div class="modal fade" id="baocaoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header">
                <h4 class="modal-title"><img src="{{ asset('img/baocao.png') }}" width="40"> Nộp báo cáo</h4>
            </div>
            <div class="modal-body">
                <form id="baoCaoForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="fileBaoCao" class="col-md-3 col-form-label">Tệp báo cáo:</label>
                        <div class="col-md-9">
                            <input type="file" id="fileBaoCao" name="file" class="form-control" required>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                    style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px;"
                    id="btnTaiLen">Tải lên</button>
                <button type="button" class="btn btn-secondary"
                    style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px;"
                    data-bs-dismiss="modal">Hủy bỏ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Thông báo -->
<div class="modal fade" id="thongbaoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header">
                <h4 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo</h4>
            </div>
            <div class="modal-body text-center">
                <p id="thongbaoText"></p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="modal fade" id="DTchitietModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 1250px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Thông tin chi tiết của đề tài</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-left: 50px;">
                    <p><strong>Tên đề tài:</strong> adasdad</p>
                    <p><strong>Mã đề tài:</strong> ádsadasd</p>
                    <p><strong>Mô tả:</strong> ádsadasd</p>
                    <p><strong>Trạng thái:</strong> sadasda</p>
                    <p><strong>Mã giảng viên:</strong> ádsad</p>
                    <p><strong>Ngày đăng ký:</strong> sssss</p>
                    <p><strong>Số lượng sinh viên:</strong> ssssssssss</p>
                    <p><strong>Lĩnh vực nghiên cứu:</strong> ssssssssssss</p>
                    <p><strong>Điểm phản biện:</strong> ssssssssssssss</p>
                    <p><strong>Kết quả cấp khoa:</strong> sssssssssssssss</p>
                    <p><strong>Kết quả cấp trường:</strong> 21.5</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#btnTaiLen').click(function(e) {
        e.preventDefault();

        let formData = new FormData($('#baoCaoForm')[0]);

        $.ajax({
            url: "{{ route('nop-bao-cao') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#baocaoModal').modal('hide'); // Ẩn modal nộp báo cáo

                if (response.success) {
                    $('#thongbaoText').text(response.message);
                    $('#thongbaoModal').modal('show');
                } else {
                    $('#thongbaoText').text("Tải lên thất bại!");
                    $('#thongbaoModal').modal('show');
                }
            },
        });
    });
});
</script>
<div class="content">
    @yield('content')
</div>

@endsection