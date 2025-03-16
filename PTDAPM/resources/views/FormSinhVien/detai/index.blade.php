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
                    @foreach ($deTais as $deTai)
                    <tr>
                        <td class="text-center-col">
                            {{ $deTai->ma_de_tai }}
                        </td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal"
                                data-bs-target="#DTchitietModal{{ str_replace(' ', '_', $deTai->ma_de_tai) }}">
                                {{ $deTai->ten_de_tai }}
                            </a>
                        </td>
                        <td class="text-center-col">{{ $deTai->trang_thai }}</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#baocaoModal">
                                Nộp báo cáo</a>
                        </td>
                    </tr>
                    @endforeach
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

                <form action="{{ route('baocao.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label for="tep_bao_cao">Tệp báo cáo:</label>
                        <input type="file" name="tep_bao_cao" id="tep_bao_cao" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"
                            style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px;"
                            id="btnTaiLen">Tải lên</button>
                        <button type="button" class="btn btn-secondary"
                            style="background-color: rgba(81, 131, 202, 0.6);color: #17488C; border-radius: 18px;"
                            data-bs-dismiss="modal">Hủy bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Thông Báo Lỗi -->
<div class="modal fade" id="thongbaoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header">
                <h4 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Nộp báo cáo thất bại
                </h4>
            </div>
        </div>
    </div>
</div>

<!-- Modal Thông báo Thành Công -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header">
                <h4 class="modal-title"><img src="{{ asset('img/Megaphone.png') }}" width="30"> Nộp báo cáo thành công
                </h4>
            </div>
            <div class="modal-body">
                <p>Báo cáo đã được nộp thành công!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 18px;"
                    data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

@foreach ($deTais as $deTai)
<div class="modal fade" id="DTchitietModal{{ str_replace(' ', '_', $deTai->ma_de_tai) }}" tabindex="-1"
    aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1250px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle{{ $deTai->ma_de_tai }}">Thông tin chi tiết của đề tài</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left: 50px;">
                <p><strong>Tên đề tài:</strong> {{ $deTai->ten_de_tai }}</p>
                <p><strong>Mã đề tài:</strong> {{ $deTai->ma_de_tai }}</p>
                <p><strong>Mô tả:</strong> {{ $deTai->mo_ta }}</p>
                <p><strong>Trạng thái:</strong> {{ $deTai->trang_thai }}</p>
                <p><strong>Mã giảng viên:</strong> {{ $deTai->ma_gv }}</p>
                <p><strong>Ngày đăng ký:</strong> {{ $deTai->ngay_dang_ki }}</p>
                <p><strong>Số lượng sinh viên:</strong> {{ $deTai->so_luong_sv }}</p>
                <p><strong>Lĩnh vực nghiên cứu:</strong> {{ $deTai->linh_vuc_nc }}</p>
                <p><strong>Điểm phản biện:</strong> {{ $deTai->diem_phan_bien }}</p>
                <p><strong>Kết quả cấp khoa:</strong> {{ $deTai->ket_qua_khoa }}</p>
                <p><strong>Kết quả cấp trường:</strong> {{ $deTai->ket_qua_truong }}</p>
            </div>
        </div>
    </div>
</div>


@endforeach




<!-- @if($errors->any())
<script>
window.onload = function() {
    var thongbaoModal = new bootstrap.Modal(document.getElementById('thongbaoModal'));
    thongbaoModal.show();
};
</script>
@endif

@if(session('success'))
<script>
window.onload = function() {
    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
    successModal.show();
};
</script>
@endif -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection