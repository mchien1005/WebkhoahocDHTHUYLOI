@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{route('vanphongkhoa.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('vanphongkhoa.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        .group-13 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-40 {
            background: #5183ca;
            border-radius: 10px;
            width: 345px;
            height: 92px;
            position: absolute;
            left: 558px;
            top: 679px;
        }

        .xuatbaocao {
            color: #e7f5ff;
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 589px;
            top: 681px;
            width: 297.05px;
            height: 56.25px;
        }

        .group-12 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-402 {
            background: #5183ca;
            border-radius: 10px;
            width: 345px;
            height: 92px;
            position: absolute;
            left: 1006px;
            top: 679px;
        }

        .xuatdanhsach {
            color: #e7f5ff;

            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 1050px;
            top: 683px;
            width: 253.28px;
            height: 56.25px;
        }

        .truy-v-n-th-ng-tin2 {
            color: #17488C;
            font-size: 48px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            text-align: center;
            position: absolute;
            left: 460px;
            top: 136px;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            /* Chiếm 90% chiều rộng màn hình */
            max-width: 862px;
            /* Giữ nguyên kích thước tối đa */
            height: 95%;
            /* Chiếm 80% chiều cao màn hình */
            max-height: 887px;
            /* Giữ nguyên kích thước tối đa */
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            color: #255293;
            font-size: 16px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;
            line-height: 1.5;
        }


        /* Nội dung có thể cuộn */
        .popup-content {
            height: 100%;
            overflow-y: auto;
            padding-left: 70px;
            padding-top: 40px;

            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: Rasa;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

            line-height: 1.4;
        }

        .de-tai-trang-thai {
            list-style: none;
            /* Bỏ dấu chấm đầu dòng */
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-left: 50px;
        }

        .indent-text {
            margin-left: 10px;
            /* Thụt vào 10px */
        }

        /* Nút đóng popup */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 20px;
            cursor: pointer;
            color: #255293;
        }

        .export-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 18px;
            font-family: "Rasa", sans-serif;
            font-weight: 600;
            padding: 20px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 485px;
            /* Tạo khoảng cách với nội dung trên */
            width: 300px;
            /* Cố định chiều rộng để đẹp hơn */
            text-align: center;
        }

        .export-btn:hover {
            background-color: #1d417a;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .confirm-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 810px;
            height: 308px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 985px;
            height: 584px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup .popup-header {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 200px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 5px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 30px;
        }

        .confirm-popup .confirm-btn {
            margin-left: -100px;
        }

        .confirm-popup .confirm-btn:hover,
        .confirm-popup .cancel-btn:hover {
            background-color: #1d417a;
        }

        --- .confirm-popup2 .popup-header {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup2 .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup2 .confirm-btn,
        .confirm-popup2 .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 36px;
            width: 200px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 10px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            word-wrap: break-word;
            margin-top: 100px;
        }

        .confirm-popup2 .confirm-btn:hover,
        .confirm-popup2 .cancel-btn:hover {
            background-color: #1d417a;
        }

        .popup-header {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            padding: 10px;
        }

        .megaphone {
            width: 30px;
            /* Kích thước icon */
            height: 50px;
            margin-right: 10px;
            margin-left: 20px;
            /* Tạo khoảng cách giữa icon và chữ */
        }

        .line-16 {
            margin-top: -1px;
            border-style: solid;
            border-color: #255293;
            border-width: 1px 0 0 0;
            width: 1449.01px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 724.12px;
            transform-origin: 0 0;
            transform: rotate(0.168deg) scale(1, 1);
        }

        .success-popup {
            width: 810px;
            height: 307px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 80px;

        }

        .success-popup p {
            color: #255293;
            font-size: 40px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
        }

        a {
            text-decoration: none;
            color: inherit;
            /* Giữ nguyên màu chữ */
        }

        a:hover {
            color: blue;
            /* Màu khi di chuột vào */
        }

        .popup-divider {
            border: 1px solid #255293;
            width: 100%;
            margin: 10px 0;
        }

        /* Container cho radio button */
        .radio-container {
            display: flex;
            align-items: center;
            margin: 10px 0;
            cursor: pointer;
        }

        /* Ẩn radio mặc định */
        .radio-container input {
            display: none;
        }

        /* Tạo vòng tròn radio */
        .radio-custom {
            width: 30px;
            height: 30px;
            background: #5183CA99;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            margin-right: 70px;
            margin-left: 20px;
        }

        /* Khi được chọn, tô màu */
        .radio-container input:checked+.radio-custom {
            background-color: #255293;
        }

        /* Nút xác nhận & hủy */
        .popup-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 0px;
        }

        .custom-table {
            padding-top: 100px;
            /* Màu nền bảng */
            color: white;
            /* Màu chữ */
            text-align: center;
        }

        .custom-table th {
            background-color: #255293DE;
            color: white;
            text-align: center;
            height: 64.15px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0%;

        }

        .custom-table td {
            background: rgba(81, 131, 202, 0.6);
            color: white;
            text-align: center;
            max-height: 100px;
            height: 50px;
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0%;

        }


        .custom-table th:nth-child(1) {
            width: 10%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 25%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 10%;
        }

        /* Ngày đăng ký */
        .custom-table th:nth-child(4) {
            width: 10%;
        }

        /* Trạng thái */
        .custom-table th:nth-child(5) {
            width: 15%;
        }

        /* Giảng viên */
        .custom-table th:nth-child(6) {
            width: 10%;
        }

        /* Số sinh viên */
        .custom-table th:nth-child(7) {
            width: 10%;
        }

        /* Kết quả cấp trường */
        .custom-table th:nth-child(8) {
            width: 10%;
        }
    </style>
    <div class="container mt-4">
        <table class="table table-bordered custom-table responsive-table">
            <thead>
                <tr>
                    <th>Mã đề tài</th>
                    <th>Tên đề tài</th>
                    <th>Ngày đăng ký</th>
                    <th>Trạng thái</th>
                    <th>Giảng viên</th>
                    <th>Số sinh viên</th>
                    <th>Kết quả cấp trường</th>
                    <th>Kết quả cấp khoa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deTaiList as $deTai)
                    <tr>
                        <td>{{ $deTai->ma_de_tai }}</td>
                        <td>{{ $deTai->ten_de_tai }}</td>
                        <td>{{ \Carbon\Carbon::parse($deTai->ngay_dang_ky)->format('d/m/Y') }}</td>
                        <td>{{ $deTai->trang_thai }}</td>
                        <td>{{ $deTai->ma_gv }}</td>
                        <td>{{ $deTai->so_luong_sv }}</td>
                        <td>{{ $deTai->ket_qua_truong ?? 'Chưa có' }}</td>
                        <td>{{ $deTai->ket_qua_khoa ?? 'Chưa có' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="group-13">
        <div class="rectangle-40"></div>
        <button class="xuatbaocao" onclick="openPopup()"
            style="border: none; background: transparent; cursor: pointer; color: white; font-size: 36px; font-weight: 500;">
            Xuất báo cáo thống kê
        </button>
    </div>
    <div class="group-12">
        <div class="rectangle-402"></div>
        <button class="xuatdanhsach" onclick="showConfirmPopup2()"
            style="border: none; background: transparent; cursor: pointer; color: white; font-size: 36px; font-weight: 500;">Xuất
            danh sách đề tài
        </button>
    </div>
    <div class="truy-v-n-th-ng-tin2">Truy vấn thông tin</div>
    @include('FormVanPhongKhoa.FormQuanLyTruyVan.FormXuatBaoCaoThongKe')
    </div>
    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <p style="margin-left: -100px;">Bạn có chắc chắn xuất báo cáo không?</p>
            <button class="confirm-btn" style="margin-right: 20px;" onclick="exportReport()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmPopup()">Hủy</button>
        </div>
    </div>

    <!-- Popup thông báo thành công -->
    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup" style="display: none;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Xuất báo cáo thành công!</p>
        </div>

    </div>

    <!-- Overlay mờ nền khi popup xuất hiện -->
    <div class="popup-overlay" id="popupOverlay" style="display: none;"></div>

    <!-- Popup chính -->
    <div class="confirm-popup2" id="popupRadio" style="display: none;">
        <div class="popup-header">
            <span>Xuất danh sách đề tài</span>
        </div>

        <hr class="popup-divider">

        <!-- Nội dung popup -->
        <div class="popup-content">
            <label class="radio-container">
                <input type="radio" name="topic" value="official">
                <span class="radio-custom"></span>
                Đề tài chính thức
            </label>

            <label class="radio-container">
                <input type="radio" name="topic" value="faculty">
                <span class="radio-custom"></span>
                Đề tài đã nghiên cứu cấp khoa
            </label>

            <label class="radio-container">
                <input type="radio" name="topic" value="university">
                <span class="radio-custom"></span>
                Đề tài đã nghiên cứu cấp trường
            </label>
            <button class="confirm-btn" style="margin-right: 50px;" onclick="exportReport2()">Đồng ý</button>
            <button class="cancel-btn" onclick="closeConfirmPopup2()">Hủy</button>
        </div>

    </div>


    <!-- Popup xác nhận -->

    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay2" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup2" style="display: none;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
            <p>Xuất danh sách đề tài thành công!</p>
        </div>

    </div>



    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        function showConfirmPopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("confirmOverlay").style.display = "flex";
            document.getElementById("confirmPopup").style.display = "block";
        }

        function closeConfirmPopup() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("popup").style.display = "block";

        }

        function exportReport() {
            document.getElementById("confirmOverlay").style.display = "none";
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("successOverlay").style.display = "flex";
            document.getElementById("successPopup").style.display = "block";

            // Tự động đóng sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay").style.display = "none";
                document.getElementById("successPopup").style.display = "none";
            }, 2000);
        }

        function showConfirmPopup2() {
            document.getElementById("popupOverlay").style.display = "block";
            document.getElementById("popupRadio").style.display = "block";
        }

        function closeConfirmPopup2() {
            document.getElementById("popupOverlay").style.display = "none";
            document.getElementById("popupRadio").style.display = "none";

        }
        function exportReport2() {
            document.getElementById("popupOverlay").style.display = "none";
            document.getElementById("popupRadio").style.display = "none";
            document.getElementById("successOverlay2").style.display = "flex";
            document.getElementById("successPopup2").style.display = "block";

            // Tự động đóng sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay2").style.display = "none";
                document.getElementById("successPopup2").style.display = "none";
            }, 2000);
        }

    </script>

@endsection