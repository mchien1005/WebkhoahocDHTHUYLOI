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
<div class="menu-item ">
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

.custom-modal {
    max-width: 1044px !important;
    width: 1044px !important;
}

.custom-modal .modal-content {
    height: 733px !important;
    overflow-y: auto;
    /* Để tránh tràn nội dung */
}
</style>

<body class="" style="background-color: #E6F0FA;font-family: Inter;">
    <div class="container d-flex flex-column align-items-start">

        <!-- Form tìm kiếm -->
        <form id="searchForm" action="{{ route('FormSinhVien.searchgv.index') }}" method="GET">
            <input type="hidden" name="submitted" value="1">
            <div class="mb-3 search-container">
                <input type="text" class="form-control" name="search" id="searchInput"
                    style="width: 524px; background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 32px; border-radius: 18px; height: 51px;"
                    value="{{ request('search') }}">
                <button type="submit" class="btn" id="searchButton"
                    style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; font-size: 32px; border-radius: 18px; border: none; height: 51px; width: 152px;">
                    Tìm kiếm
                </button>
            </div>

            <!-- Dropdown lĩnh vực nghiên cứu -->
            <div class="mb-3">
                <select name="field" class="form-control"
                    style="width: 524px; background-color: rgba(81, 131, 202, 0.6);color: #17488C; font-size: 32px; border-radius: 18px; height: 51px;">
                    <option value="" style="text-align: center;">-- Chọn lĩnh vực nghiên cứu --</option>
                    @foreach ($fields as $field)
                    <option value="{{ $field }}" {{ request('field') == $field ? 'selected' : '' }}>
                        {{ $field }}
                    </option>
                    @endforeach
                </select>
            </div>
        </form>

        <!-- Thông báo lỗi -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <!-- Kết quả tìm kiếm -->
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
                        @if($giangVien->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center">Không có giảng viên phù hợp với tiêu chí cần tìm
                            </td>
                        </tr>
                        @else
                        @foreach($giangVien as $gv)
                        <tr>
                            <td class="text-center-col">{{ $gv->ma_gv }}</td>
                            <td class="text-center-col">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#GVchitietModal{{ $gv->ma_gv }}"
                                    style="color: #17488C; display: inline-block; cursor: pointer;">{{ $gv->ten_gv }}</a>
                            </td>
                            <td class="text-center-col">{{ $gv->linh_vuc_nc }}</td>
                            <td class="text-center-col">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#inviteModal">
                                    Gửi lời mời hướng dẫn
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modals cho từng giảng viên -->
        @foreach($giangVien as $gv)
        <!-- Modal Chi tiết Giảng viên -->
        <div class="modal fade" id="GVchitietModal{{ $gv->ma_gv }}" tabindex="-1"
            style="color: #17488C; border-radius: 18px ;font-size:20px"
            aria-labelledby="GVchitietModalLabel{{ $gv->ma_gv }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: #E7F5FF; border-radius: 0; display: flex; justify-content: flex-start;">
                    <div class="modal-body d-flex flex-column text-start">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-start align-items-start">
                                <div
                                    style="width: 130px; height: 160px; background-color: rgba(81, 131, 202, 0.6); display: flex; justify-content: center; align-items: center; border-radius: 8px;">
                                    <img src="{{ asset('img/User02.png') }}" class="img-fluid" width="100" height="100"
                                        style="border-radius: 45%;">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-3 fw-bold">Họ và tên:</div>
                                    <div class="col-md-9 text-wrap" style="word-break: break-word;">
                                        {{ $gv->ten_gv }}</div>
                                </div>
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-3 fw-bold">Mã giảng viên:</div>
                                    <div class="col-md-3 text-wrap" style="word-break: break-word;">{{ $gv->ma_gv }}
                                    </div>
                                    <div class="col-md-2 fw-bold">Mã khoa:</div>
                                    <div class="col-md-4 text-wrap" style="word-break: break-word;">
                                        {{ $gv->ma_khoa }}</div>
                                </div>
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-3 fw-bold">Học vị:</div>
                                    <div class="col-md-9 text-wrap" style="word-break: break-word;">
                                        {{ $gv->hoc_vi }}</div>
                                </div>
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-3 fw-bold">Số điện thoại:</div>
                                    <div class="col-md-9 text-wrap" style="word-break: break-word;">{{ $gv->sdt }}
                                    </div>
                                </div>
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-3 fw-bold">Email:</div>
                                    <div class="col-md-9 text-wrap" style="word-break: break-word;">{{ $gv->email }}
                                    </div>
                                </div>
                                <div class="row g-0" style="color: #17488C;">
                                    <div class="col-md-4 fw-bold">Lĩnh vực nghiên cứu:</div>
                                    <div class="col-md-8 text-wrap" style="word-break: break-word; ;font-size:20px">
                                        {{ $gv->linh_vuc_nc }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mt-2">
                            <div class="col-md-12">
                                <p><strong>Định hướng nghiên cứu:</strong>
                                    <span class="text-wrap"
                                        style="word-break: break-word;color: #17488C ;font-size:20px">{{ $gv->dinh_huong_nc }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <p><strong>Số sinh viên hướng dẫn:</strong>
                                    <span class="text-wrap"
                                        style="word-break: break-word; color: #17488C;font-size:20px">{{ $gv->so_sv_huong_dan }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #E7F5FF; border-radius: 0; color: #225293;">
                    <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                        <h5 class="modal-title fw-bold" id="modalTitle" style="text-decoration: none !important;">
                            Gửi lời
                            mời hướng dẫn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body"
                        style="padding-bottom: 120px;padding-left: 20px;padding-right: 20px;font-family: 'Rasa', serif;">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Tên
                                giảng viên:</label>
                            <div class="col-md-8">
                                <span class="fw-bold "
                                    style="text-decoration: none !important; color: #225293;">{{ $gv->ten_gv }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Tên
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control  "
                                    style="text-decoration: none !important; background-color: rgba(81, 131, 202, 0.6);"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Mã
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control  "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Email:</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control  "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Đề
                                tài:</label>
                            <div class="col-md-8">
                                <select class="form-select "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
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
                        <button type="submit" class="btn btn-primary"
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
                        <h5 class="modal-title fw-bold" id="modalTitle" style="text-decoration: none !important;">
                            Gửi lời
                            mời hướng dẫn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Tên
                                giảng viên:</label>
                            <div class="col-md-8">
                                <span class="fw-bold "
                                    style="text-decoration: none !important; color:#225293">{{ $gv->ten_gv }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Tên
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control"
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold " style="text-decoration: none !important;">Mã
                                sinh viên:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label fw-bold "
                                style="text-decoration: none !important;">Email:</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <label class="col-md-4 btn btn-secondary"
                                style="background-color: rgba(81, 131, 202, 0.6); color: #225293; font-weight: bolder;">
                                Đã có đề tài
                            </label>
                            <div class="col-md-8">
                                <input type="email" class="form-control "
                                    style="text-decoration: none !important;background-color: rgba(81, 131, 202, 0.6);">
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
        <div class="modal fade" id="emptySearchModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
                <div class="modal-content" style="background-color: #d9eaff; padding: 10px; border-radius: 10px;">
                    <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                        <h4 class="modal-title" style="color: #225293;">
                            <img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo
                        </h4>
                    </div>
                    <div class="modal-body text-center">
                        <h4 style="color: #225293;">Vui lòng nhập thông tin tìm kiếm</h4>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const fieldSelect = document.querySelector('select[name="field"]');

    searchForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Ngăn form submit ngay lập tức

        // Kiểm tra cả hai trường tìm kiếm có trống không
        if ((!searchInput.value || searchInput.value.trim() === '') &&
            (!fieldSelect.value || fieldSelect.value === '')) {

            // Hiển thị modal
            var emptySearchModal = new bootstrap.Modal(document.getElementById('emptySearchModal'));
            emptySearchModal.show();
        } else {
            // Nếu có ít nhất một trường có giá trị, submit form
            this.submit();
        }
    });
});
</script>

@if(session('error'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
    errorModal.show();
});
</script>
@endif
@endsection
