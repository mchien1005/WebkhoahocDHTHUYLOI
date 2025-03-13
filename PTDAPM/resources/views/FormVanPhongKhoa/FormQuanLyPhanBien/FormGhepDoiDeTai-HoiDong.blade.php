@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('vanphongkhoa.quanlyphanbien')}}">
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
    <div class="menu-item">
        <a href="{{ route('vanphongkhoa.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
@endsection

@section('content')
    <style>
        .frame-1 {
            background: rgba(81, 131, 202, 0.6);
            width: 822px;
            height: 433px;
            position: absolute;
            left: 700px;

            top: 307.94px;
            overflow: hidden;
        }

        .md-01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 19px;
        }

        .dt01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 20px;
        }

        .md-02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 93px;
        }

        .md-03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 25px;
            top: 163px;
        }

        .dt02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 93px;
        }

        .dt03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 163px;
        }

        .hd01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 20px;
        }

        .hd02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 90px;
        }

        .hd03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 620px;
            top: 165px;
        }

        .rectangle-38 {
            background: rgba(37, 82, 147, 0.87);
            width: 822px;
            height: 64.15px;
            position: absolute;
            left: 700px;
            top: 242.86px;
        }

        .line-8 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 880px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .hoidong {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 740px;
            top: 260px;
            width: 220px;
            height: 30.14px;
        }

        .detai {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 940px;
            top: 260px;
            width: 188px;
            height: 30.14px;
        }

        .lichtrinhbaove {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1250px;
            right: 500px;
            top: 260px;
            width: 177px;
            height: 30.14px;
        }

        .hoatdong {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1310px;
            top: 260.53px;
            width: 237px;
            height: 30.14px;
        }

        .line-9 {
            margin-top: -1px;
            border-style: solid;
            border-color: #ffffff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1160px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(89.684deg) scale(1, 1);
        }

        .line-10 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 375.97px;
            transform-origin: 0 0;
            transform: rotate(0.109deg) scale(1, 1);
        }

        .line-11 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 446.64px;
            transform-origin: 0 0;
            transform: rotate(0.313deg) scale(1, 1);
        }

        .line-12 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 396px;
            top: 513.15px;
            transform-origin: 0 0;
            transform: rotate(0.455deg) scale(1, 1);
        }

        .line-13 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 586.94px;
            transform-origin: 0 0;
            transform: rotate(0.189deg) scale(1, 1);
        }

        .line-14 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1420px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 657.6px;
            transform-origin: 0 0;
            transform: rotate(0.112deg) scale(1, 1);
        }

        .line-19 {
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1250px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .line-15 {
            margin-top: -1px;
            border-style: solid;
            border-color: #e7f5ff;
            border-width: 1px 0 0 0;
            width: 1449.01px;
            height: 0px;
            position: absolute;
            left: 410px;
            top: 724.12px;
            transform-origin: 0 0;
            transform: rotate(0.168deg) scale(1, 1);
        }

        .group-13 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .rectangle-40 {
            background: #5183CA99;
            border-radius: 10px;
            width: 174px;
            height: 60px;
            position: absolute;
            left: 690px;
            top: 800px;
        }

        .quaylai {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 630px;
            top: 800px;
            width: 297.05px;
            height: 56.25px;
        }

        .rectangle-402 {
            background: #5183CA99;
            border-radius: 10px;
            width: 174px;
            height: 60px;
            position: absolute;
            left: 1350px;
            top: 800px;
        }

        .luu {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 1290px;
            top: 800px;
            width: 297.05px;
            height: 56.25px;
        }

        .group-12 {
            width: 345px;
            height: 92px;
            position: static;
        }

        .xuatdanhsach {
            color: #e7f5ff;

            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 1100px;
            top: 883px;
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
            width: 1048px;
            height: 428px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 20px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;
            line-height: 1.8;
        }


        /* Nội dung có thể cuộn */
        .popup-content {
            height: 100%;
            overflow-y: auto;
            padding-left: 20px;
            padding-top: 20px;

            /* Điều chỉnh khoảng cách giữa các dòng */
            font-family: Rasa;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
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
            height: 307px;
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
            width: 1048px;
            height: 428px;
            background: #e7f5ff;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            border-radius: 10px;
            text-align: center;

        }

        .confirm-popup .popup-header2 {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .popup-header {
            font-size: 32px;
            font-weight: bold;
            color: #255293;
            font-weight: 700;
            padding-left: 30px;
            word-wrap: break-word
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup2 .btn-update {
            background-color: #5183CA99;
            color: #255293;
            font-size: 32px;
            width: 169px;
            font-family: Rasa;
            font-weight: 700;
            word-wrap: break-word;

            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 40px;
            margin-left: 700px;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn:hover,
        .confirm-popup .cancel-btn:hover {
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

        .popup-header2 {
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

        .cancel {
            width: 90px;
            /* Kích thước icon */
            height: 90px;

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

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background-color: #5183CA99;
            color: #255293;
            font-size: 32px;
            width: 200px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            padding: 5px;
            margin-top: 40px;
            border: none;
            border-radius: 20px;
            cursor: pointer;

            font-weight: 500;
            word-wrap: break-word
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

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 40px;
        }

        .form-label {
            color: #17488C;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;
            width: 300px;
            /* Điều chỉnh độ rộng của nhãn */
        }

        .input-container {
            position: relative;
            width: 640px;
            height: 48.23601531982422px;
            border-radius: 10px;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;

        }

        .form-input {
            width: 640px;
            height: 44.790584564208984px;
            border-radius: 10px;
            border: 1px solid #255293;
            padding: 0 40px 0 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;
        }

        .icon {
            position: absolute;
            right: 41px;
            top: 47%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            cursor: pointer;
            /* Làm nổi bật icon */
            padding: 3px;
            border-radius: 50%;
            margin-left: -120px;
            background-color: #D0E4FF;
        }

        .icon:hover {
            background-color: #D0E4FF;
            /* Đổi màu khi hover */
        }

        .error-message {
            padding: 30px;
            display: flex;
            /* Sử dụng flexbox */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            gap: 10px;
            /* Khoảng cách giữa icon và văn bản */
            color: #17488C;
            /* Màu chữ */
            font-size: 40px;
            /* Cỡ chữ */
            font-weight: 500;
            font-family: Rasa;
        }

        input[type="datetime-local"] {
            color: #17488C;
            /* Màu chữ */
            font-size: 32px;
            /* Điều chỉnh cỡ chữ */
            font-weight: bold;
            /* Đậm chữ */
        }

        input[type="checkbox"] {
            width: 20px;
            height: 20px;
        }
    </style>
    <div class="frame-1">
        <div class="md-01">Đề tài 1</div>
        <div class="dt01">
            <input type="checkbox">
        </div>
        <div class="md-02">Đề tài 7</div>
        <div class="md-03">Đề tài 1</div>
        <div class="dt02">
            <input type="checkbox">
        </div>
        <div class="dt03">
            <input type="checkbox">
        </div>
        <div class="hd01" onclick="openPopup()">
            <input type="checkbox">
        </div>
        <div class="hd02" onclick="openPopup()">
            <input type="checkbox">
        </div>
        <div class="hd03" onclick="openPopup()">
            <input type="checkbox">
        </div>
    </div>
    <div class="rectangle-38"></div>
    <div class="line-8"></div>
    <div class="hoidong">Tên đề tài</div>
    <div class="detai">Hội đồng 1</div>
    <div class="lichtrinhbaove">Hội đồng 2</div>
    <div class="line-9"></div>
    <div class="line-10"></div>
    <div class="line-11"></div>
    <div class="line-12"></div>
    <div class="line-13"></div>
    <div class="line-14"></div>
    <div class="line-15"></div>
    <div class="group-13">
        <div class="rectangle-40"></div>
        <a href="{{ route('vanphongkhoa.quanlyphanbien') }}">
            <button class="quaylai"
                style="border: none;background: transparent; cursor: pointer; color: #255293DE; font-size: 24px; font-weight: 600;">
                Thoát
            </button>
        </a>
    </div>
    <div class="group-12">
        <div class="rectangle-402"></div>
        <button class="luu" onclick="validateCheckbox()""
                                                                                    style=" border: none; background:
            transparent; cursor: pointer; color: #255293DE; font-size: 24px; font-weight: 600;">
            Lưu

        </button>
    </div>
    <div class="truy-v-n-th-ng-tin2">Cập nhật lịch trình bảo vệ</div>


    <!-- Popup xác nhận -->
    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <p style="margin-left: -100px;">Bạn có chắc chắn muốn lưu các ghép đôi đề<br />tài-hội đồng này không?</p>
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
            <p>Ghép đôi đề tài-hội đồng thành công!</p>
        </div>

    </div>

    {{-- pop lỗi --}}
    <div class="popup-overlay" id="errorOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="errorPopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="error-message">
            <img class="cancel" src="{{ asset('images/Cancel.png') }}">
            <p>Số lượng giảng viên không hợp lệ,<br />vui lòng nhập lại.</p>
        </div>
    </div>

    <script>


        function saveResult() {
            // Ẩn popup xác nhận
            document.getElementById("Popupupdate").style.display = "none";
            document.getElementById("updateOverlay").style.display = "none";

            // Hiện popup thành công
            document.getElementById("confirmOverlay").style.display = "block";
            document.getElementById("confirmPopup").style.display = "block";

            // Tự động đóng popup sau 2 giây
            setTimeout(() => {
                document.getElementById("confirmOverlay").style.display = "none";
                document.getElementById("confirmPopup").style.display = "none";
            }, 2000);
        }
        function showConfirmPopup() {

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

        function validateCheckbox() {
            let checkboxes = document.querySelectorAll("input[type='checkbox']");
            let isChecked = false;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                // Hiển thị popup lỗi
                document.getElementById("errorOverlay").style.display = "block";
                document.getElementById("errorPopup").style.display = "block";

                // Ẩn popup sau 2 giây
                setTimeout(() => {
                    document.getElementById("errorOverlay").style.display = "none";
                    document.getElementById("errorPopup").style.display = "none";
                }, 2000);
            } else {
                showConfirmPopup();
            }
        }
    </script>

@endsection