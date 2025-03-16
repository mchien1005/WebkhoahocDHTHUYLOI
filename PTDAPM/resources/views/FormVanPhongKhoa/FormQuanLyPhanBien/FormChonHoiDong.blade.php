@extends('layouts.layout2')

@section('sidebar')
<div class="menu-item ">
    <a href="{{ route('vanphongkhoa.tintuc') }}">
        <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
    </a>
</div>
<div class="menu-item">
    <a href="{{ route('vanphongkhoa.xembaocao') }}">
        <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
        <span>Báo cáo đề tài</span>
    </a>
</div>
<div class="menu-item active">
    <a href="{{ route('vanphongkhoa.phanbienvabaove') }}">
        <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
        <span>Phản biện & bảo vệ</span>
    </a>
</div>
<div class="menu-item">
    <a href="">
        <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
        <span>Cập nhật kết quả</span>
    </a>
</div>
<div class="menu-item">
    <a href="">
        <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
        <span>Truy vấn thông tin</span>
    </a>
</div>
@endsection

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    background-color: #e7f5ff;
}

.page-wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    width: 100%;
}

/* Header styles */
.header {
    background-color: #245292;
    height: 80px;
    display: flex;
    align-items: center;
    padding: 0 20px;
    width: 100%;
}

.logo {
    width: 60px;
    height: auto;
    margin-right: 20px;
}

.school-name {
    color: #e7f5ff;
    font-size: 28px;
    font-weight: 500;
}

.user-info {
    margin-left: auto;
    display: flex;
    align-items: center;
    color: #e7f5ff;
    position: relative;
}

.user-icon {
    width: 40px;
    height: auto;
    margin-right: 5px;
}

.user-name {
    font-size: 18px;
    font-weight: 700;
    margin-right: 15px;
}

/* Dropdown styles - updated */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 8px;
    display: flex;
    align-items: center;
}

.dropdown-icon {
    width: 20px;
    height: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    background-color: #ffffff;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 100;
    border-radius: 4px;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #eee;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Menu icon styles */
.menu-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-right: 12px;
    background-size: contain;
    background-repeat: no-repeat;
    text-align: center;
}

.profile-icon {
    background-image: url('img/profile-icon.png');
}

.key-icon {
    background-image: url('img/key-icon.png');
}

.logout-icon {
    background-image: url('img/logout-icon.png');
}

/* Main content container */
.content-container {
    display: flex;
    flex: 1;
}

/* Sidebar styles */
.sidebar {
    width: 250px;
    background-color: rgba(36, 82, 146, 0.87);
    flex-shrink: 0;
}

.menu-item {
    height: 60px;
    border: 1px solid #17478c;
    display: flex;
    align-items: center;
    padding-left: 15px;
    color: #e7f5ff;
    font-size: 20px;
    font-weight: 500;
}

.menu-item.active {
    background-color: #5083c9;
}

.menu-item.normal {
    background-color: rgba(36, 82, 146, 0.87);
}

.sidebar-icon {
    width: 24px;
    height: 24px;
    margin-right: 15px;
}

/* Main content styles */
.main-content {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
}

.page-title {
    color: #17478c;
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 20px;
}

.news-section {
    margin-bottom: 30px;
}

.news-item {
    display: flex;
    margin-bottom: 20px;
}

.news-image {
    width: 180px;
    height: 120px;
    object-fit: cover;
    margin-right: 20px;
    flex-shrink: 0;
}

.news-content {
    flex: 1;
}

.news-title {
    color: #245292;
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 10px;
    line-height: 1.2;
}

.news-date {
    color: #245292;
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 10px;
}

.news-excerpt {
    color: #17478c;
    font-size: 14px;
    line-height: 1.4;
    margin-bottom: 10px;
}

.news-link {
    color: #245292;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.news-link img {
    width: 16px;
    height: 16px;
    margin-right: 8px;
}

.divider {
    height: 1px;
    background-color: #cccccc;
    margin: 25px 0;
}

a.text-link {
    color: #17478c;
    text-decoration: underline;
}

/* Media queries for laptop screens */
@media screen and (min-width: 1024px) {
    .header {
        height: 90px;
    }

    .logo {
        width: 75px;
    }

    .school-name {
        font-size: 32px;
    }

    .user-name {
        font-size: 20px;
    }

    .sidebar {
        width: 300px;
    }

    .menu-item {
        height: 75px;
        font-size: 24px;
    }

    .sidebar-icon {
        width: 30px;
        height: 30px;
    }

    .page-title {
        font-size: 32px;
    }

    .news-image {
        width: 220px;
        height: 140px;
    }

    .news-title {
        font-size: 26px;
    }

    .news-date {
        font-size: 18px;
    }

    .news-excerpt {
        font-size: 16px;
    }

    .news-link {
        font-size: 18px;
    }
}

/* Media queries for larger screens */
@media screen and (min-width: 1440px) {
    .header {
        height: 109px;
    }

    .logo {
        width: 104px;
    }

    .school-name {
        font-size: 40px;
    }

    .user-icon {
        width: 55px;
    }

    .user-name {
        font-size: 24px;
    }

    .sidebar {
        width: 354px;
    }

    .menu-item {
        height: 95px;
        font-size: 32px;
        padding-left: 20px;
    }

    .sidebar-icon {
        width: 40px;
        height: 40px;
        margin-right: 22px;
    }

    .news-image {
        width: 261px;
        height: 147px;
        margin-right: 30px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Rasa', serif;
    }

    body {
        background-color: #e7f5ff;
    }

    .page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        width: 100%;
    }

    .sidebar {
        background-color: #4267B2;
        color: white;
        width: 100%;
        max-width: 500px;
    }

    .menu-item {
        padding: 0;
        background-color: #255293DE;
    }

    .menu-item a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
        width: 100%;
        padding: 20px 15px;
    }

    .menu-item:hover {
        background-color: #365899;
        cursor: pointer;
    }

    .menu-item.active {
        background: rgba(80.75, 131.22, 201.88, 0.60);
    }

    .icon-container {
        width: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 15px;
    }

    .sidebar-icon {
        width: 40px;
        height: 40px;
        filter: brightness(0) invert(1);
    }

    span {
        color: #E7F5FF;
        font-size: 32px;
        font-family: Rasa;
        font-weight: 500;
        word-wrap: break-word
    }

    /* Header styles */
    .header {
        background-color: #255293;
        height: 80px;
        display: flex;
        align-items: center;
        padding: 0 20px;
        width: 100%;
        border-bottom: 2px solid #82b0f1;
    }

    .logo {
        width: 60px;
        height: auto;
        margin-right: 20px;
    }

    .school-name {
        color: #e7f5ff;
        font-size: 28px;
        font-weight: 500;
    }

    .user-info {
        margin-left: auto;
        display: flex;
        align-items: center;
        color: #e7f5ff;
        position: relative;
    }

    .user-icon {
        width: 40px;
        height: auto;
        margin-right: 5px;
    }

    .user-name {
        font-size: 18px;
        font-weight: 700;
        margin-right: 15px;
    }

    /* Dropdown styles - updated */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding: 8px;
        display: flex;
        align-items: center;
    }

    .dropdown-button img {
        width: 20px;
        height: 60px;
    }

    .dropdown-icon {
        width: 20px;
        height: 20px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        margin-right: -20px;
        top: 100%;
        background-color: rgba(36, 82, 147, 0.95);
        min-width: 250px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 10px 10px;
        border: 1px solid #17488C;
        z-index: 100;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .dropdown-content a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Menu icon styles */
    .menu-icon {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    /* Main content container */
    .content-container {
        display: flex;
        flex: 1;
    }

    /* Sidebar styles */
    .sidebar {
        width: 250px;
        background-color: rgba(36, 82, 146, 0.87);
        flex-shrink: 0;
    }

    .menu-item {
        height: 60px;
        border: 1px solid #02367f;
        display: flex;
        align-items: center;
        padding-left: 15px;
        color: #e7f5ff;
        font-size: 20px;
        font-weight: 500;
    }

    .menu-item.active {
        background-color: #5083c9;
    }

    .menu-item.normal {
        background-color: rgba(36, 82, 146, 0.87);
    }

    .sidebar-icon {
        width: 24px;
        height: 24px;
        margin-right: 15px;
    }

    /* Main content styles */
    .main-content {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
    }

    .page-title {
        color: #17478c;
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .news-section {
        margin-bottom: 30px;
    }

    .news-item {
        display: flex;
        margin-bottom: 20px;
    }

    .news-image {
        width: 180px;
        height: 120px;
        object-fit: cover;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .news-content {
        flex: 1;
    }

    .news-title {
        color: #245292;
        font-size: 22px;
        font-weight: 500;
        margin-bottom: 10px;
        line-height: 1.2;
    }

    .news-date {
        color: #245292;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .news-excerpt {
        color: #17478c;
        font-size: 14px;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    .news-link {
        color: #245292;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .news-link img {
        width: 16px;
        height: 16px;
        margin-right: 8px;
    }

    .divider {
        height: 1px;
        background-color: #cccccc;
        margin: 25px 0;
    }

    a.text-link {
        color: #17478c;
        text-decoration: underline;
    }

    /* Media queries for laptop screens */
    @media screen and (min-width: 1024px) {
        .header {
            height: 90px;
        }

        .logo {
            width: 75px;
        }

        .school-name {
            color: #E7F5FF;
            font-size: 40px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
        }

        .user-name {
            font-size: 20px;
        }

        .sidebar {
            width: 300px;
        }

        .menu-item {
            height: 75px;
            font-size: 24px;
        }

        .sidebar-icon {
            width: 30px;
            height: 30px;
        }

        .page-title {
            font-size: 32px;
        }

        .news-image {
            width: 220px;
            height: 140px;
        }

        .news-title {
            font-size: 26px;
        }

        .news-date {
            font-size: 18px;
        }

        .news-excerpt {
            font-size: 16px;
        }

        .news-link {
            font-size: 18px;
        }
    }

    /* Media queries for larger screens */
    @media screen and (min-width: 1440px) {
        .header {
            height: 109px;
        }

        .logo {
            width: 104px;
        }

        .school-name {
            font-size: 40px;
        }

        .user-icon {
            width: 55px;
        }

        .user-name {
            font-size: 24px;
        }

        .sidebar {
            width: 400px;
        }

        .menu-item {
            height: 95px;
            font-size: 32px;
            padding-left: 20px;
        }

        .sidebar-icon {
            width: 40px;
            height: 40px;
            margin-right: 22px;
        }

        .news-image {
            width: 261px;
            height: 147px;
            margin-right: 30px;
        }

        .news-title {
            font-size: 32px;
        }

        .news-date {
            font-size: 24px;
        }

        .news-excerpt {
            font-size: 20px;
        }

        .news-link {
            font-size: 24px;
        }

        .news-link img {
            width: 21px;
            height: 20px;
        }

        .dropdown-content {
            min-width: 300px;
        }

        .dropdown-content a {
            padding: 16px 20px;
            font-size: 20px;
        }

        .menu-icon {
            width: 24px;
            height: 24px;
            margin-right: 16px;
        }
    }

    .news-title {
        font-size: 32px;
    }

    .news-date {
        font-size: 24px;
    }

    .news-excerpt {
        font-size: 20px;
    }

    .news-link {
        font-size: 24px;
    }

    .news-link img {
        width: 21px;
        height: 20px;
    }

    .dropdown-content {
        min-width: 300px;
    }

    .dropdown-content a {
        padding: 16px 20px;
        font-size: 20px;
    }

    .menu-icon {
        width: 24px;
        height: 24px;
        margin-right: 16px;
    }

}

/* Toàn bộ giao diện */
.flex-1 {
    background-color: #E7F5FF;
    min-height: 100vh;
    padding: 20px;
}

/* Tiêu đề */
h1 {
    color: #17488C;
}

h2 {
    color: #17488C;
    margin-top: 40px;
}

/* Chọn số lượng hội đồng */
select {
    padding: 10px;
    border: 2px solid #1E3A8A;
    border-radius: 8px;
    font-size: 16px;
    background-color: rgba(81, 131, 202, 0.60);
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

select:hover {
    border-color: #2563EB;
}

/* Bảng danh sách giảng viên */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #EFF6FF;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Header bảng */
thead tr {
    background-color: rgba(37, 82, 147, 0.87);
    color: white;
}

/* Ô trong bảng */
th,
td {
    padding: 12px;
    border: 1px solid #A7C7E7;
    text-align: center;
    background-color: rgba(81, 131, 202, 0.60);
}

/* Hiệu ứng hover trên từng dòng */
tbody tr:hover {
    background-color: #BFDBFE;
    transition: 0.3s;
}

/* Checkbox */
input[type="checkbox"] {
    width: 20px;
    height: 20px;
    accent-color: #1E3A8A;
    cursor: pointer;
}

/* Nút Tiếp theo */
button {
    background-color: #2563EB;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 8px;
    transition: 0.3s ease-in-out;
}

button:hover {
    background-color: #1D4ED8;
    transform: scale(1.05);
}

/* Link trong nút */
button a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    display: block;
    text-align: center;
}

.flex.justify-end {
    display: flex;
    justify-content: flex-end;
    margin-top: 40px;
}

body {
    background-color: #E7F5FF;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-blue-900">Chọn số lượng hội đồng</h1>
        <div class="flex items-center">
            <i class="fas fa-user-circle text-xl text-blue-900 mr-2"></i>
            <i class="fas fa-caret-down text-blue-900 ml-2"></i>
        </div>
    </div>

    <div class="mb-6">
        <select class="p-2 border border-blue-900 rounded">
            @for ($i = 1; $i <= 6; $i++) <option value="{{ $i }}">{{ $i }}</option>
                @endfor
        </select>
    </div>

    <h2 class="text-4xl font-bold text-blue-900 mb-4">Chọn giảng viên phản biện</h2>

    <table class="w-full bg-blue-200 text-blue-900">
        <thead>
            <tr class="bg-blue-300">
                <th class="p-2 border border-blue-400">Mã giảng viên</th>
                <th class="p-2 border border-blue-400">Tên giảng viên</th>
                <th class="p-2 border border-blue-400">Lĩnh vực nghiên cứu</th>
                <th class="p-2 border border-blue-400">Chọn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($giangVien as $gv)
            <tr>
                <td class="p-2 border border-blue-400"
                    style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal;">
                    {{ $gv->ma_gv }}
                </td>

                <td class="p-2 border border-blue-400">
                    <!-- Khi nhấn vào tên giảng viên, hiển thị modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#GVchitietModal{{ $gv->ma_gv }}"
                        class="hover:underline"
                        style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal; text-decoration: none;">
                        {{ $gv->ten_gv }}
                    </a>



                </td>
                <td class="p-2 border border-blue-400"
                    style="color: #255293; font-family: Inter; font-size: 24px; font-style: normal; font-weight: 600; line-height: normal;">
                    {{ $gv->linh_vuc_nc }}
                </td>

                <td class="p-2 border border-blue-400 text-center">
                    <input type="checkbox" name="chon_gv[]" value="{{ $gv->ma_gv }}" />
                </td>
            </tr>

            <!-- Modal hiển thị thông tin giảng viên -->
            <div class="modal fade" id="GVchitietModal{{ $gv->ma_gv }}" tabindex="-1"
                aria-labelledby="GVchitietModalLabel{{ $gv->ma_gv }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="background-color: #E7F5FF; border-radius: 0;">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2 d-flex justify-content-start align-items-start">
                                    <div
                                        style="width: 130px; height: 160px; background-color: rgba(81, 131, 202, 0.6); 
                                            display: flex; justify-content: center; align-items: center; border-radius: 8px;">
                                        <img src="{{ asset('img/User02.png') }}" class="img-fluid" width="100"
                                            height="100" style="border-radius: 45%;">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Họ và tên:</div>
                                        <div class="col-md-9">{{ $gv->ten_gv }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Mã giảng viên:</div>
                                        <div class="col-md-3">{{ $gv->ma_gv }}</div>
                                        <div class="col-md-2 fw-bold">Mã khoa:</div>
                                        <div class="col-md-4">{{ $gv->ma_khoa }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Học vị:</div>
                                        <div class="col-md-9">{{ $gv->hoc_vi }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Số điện thoại:</div>
                                        <div class="col-md-9">{{ $gv->sdt }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-3 fw-bold">Email:</div>
                                        <div class="col-md-9">{{ $gv->email }}</div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-md-4 fw-bold">Lĩnh vực nghiên cứu:</div>
                                        <div class="col-md-8">{{ $gv->linh_vuc_nc }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-2">
                                <div class="col-md-12">
                                    <p><strong>Định hướng nghiên cứu:</strong> {{ $gv->dinh_huong_nc }}</p>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <p><strong>Số sinh viên hướng dẫn:</strong> {{ $gv->so_sv_huong_dan }}</p>
                                </div>
                            </div>
                            <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                                data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Kết thúc modal -->
            @endforeach
        </tbody>
    </table>

    <div class="flex justify-end mt-12">
        <button class="bg-blue-700 text-white px-4 py-2 rounded">
            <a href="{{ route('vanphongkhoa.chiahoidong') }}">Tiếp theo</a>
        </button>
    </div>
</div>
@endsection