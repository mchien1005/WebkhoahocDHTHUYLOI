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
<div class="menu-item">
    <a href="{{ route('FormSinhVien.searchgv.index') }}">
        <img src="{{ asset('img/Vector.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Tìm kiếm giảng viên</span>
    </a>
</div>
<div class="menu-item active">
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
                        <th class="text-center">ID lời mời</th>
                        <th class="text-center">Mã giảng viên</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Thời gian gửi</th>
                        <th class="text-center">Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loiMois as $loiMoi)
                    <tr>
                        <td class="text-center-col">{{ $loiMoi->id }}</td>
                        <td class="text-center-col">{{ $loiMoi->ma_gv }}</td>
                        <td class="text-center-col">{{ $loiMoi->trang_thai }}</td>
                        <td class="text-center-col">{{ $loiMoi->thoi_gian_gui }}</td>
                        <td class="text-center-col">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#xacnhanModal{{ $loiMoi->id }}">
                                Thu hồi
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Fixed Modal - Now inside the foreach loop -->
@foreach($loiMois as $loiMoi)
<div class="modal fade" id="xacnhanModal{{ $loiMoi->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                <h4 class="modal-title">
                    <img src="{{ asset('img/Megaphone.png') }}" width="30"> Thông báo
                </h4>
            </div>

            <div class="modal-body text-center">
                <h4 id="thongbaoText">Bạn chắc chắn muốn thu hồi lời mời?</h4>
            </div>

            <div class="modal-footer d-flex">
                <form action="{{ route('sinhvien.loimoi.thuhoi', $loiMoi->id) }}" method="POST" class="w-100">
                    @csrf
                    @method('DELETE')
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary flex-grow-1 mx-5" data-bs-toggle="modal"
                            data-bs-target="#TCModal{{ $loiMoi->id }}"
                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 18px; font-weight: bold;">
                            Xác nhận
                        </button>

                        <button type="button" class="btn btn-secondary flex-grow-1 mx-2"
                            style="background-color: rgba(81, 131, 202, 0.6); color: #17488C; border-radius: 18px;"
                            data-bs-dismiss="modal">Hủy bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Thông báo Thu hồi -->
<div class="modal fade" data-bs-dismiss="modal" id="TCModal{{ $loiMoi->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background-color: #d9eaff; padding: 20px; border-radius: 10px;">
            <div class="modal-header" style="border-bottom: 2px solid #225293 !important;">
                <h4 class="modal-title">
                    <img src="{{ asset('images/Done.png') }}" width="30"> Thông báo
                </h4>
            </div>

            <div class="modal-body text-center">
                <h4 id="thongbaoText">Đã thu hồi lời mời</h4>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection