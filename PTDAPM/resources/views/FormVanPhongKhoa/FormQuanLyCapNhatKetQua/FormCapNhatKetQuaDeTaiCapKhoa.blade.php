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
    <div class="menu-item">
        <a href="{{route('vanphongkhoa.quanlyphanbien')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item active">
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
            width: 1380px;
            height: 481.62px;
            position: absolute;
            left: 420px;
            top: 307.94px;
            overflow: hidden;
        }

        .md-01 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 19px;
        }

        .nghi-n-c-u-v-s-ti-n-h-a-c-a-virus-trong-t-ng-lai {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 18px;
        }

        .md-02 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 100px;
        }

        .md-04 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 236px;
        }

        .md-03 {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 40px;
            top: 170px;
        }

        .ng-d-ng-tr-tu-nh-n-t-o-trong-nh-n-di-n-khu-n-m-t {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 90px;
        }

        .ph-t-tri-n-thu-t-to-n-h-c-m-y-d-o-n-gi-c-phi-u {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 160px;
        }

        .t-i-u-h-a-hi-u-su-t-m-ng-b-ng-thu-t-to-n-h-c-s-u {
            color: #e7f5ff;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 20px;
            font-weight: 600;
            position: absolute;
            left: 300px;
            top: 230.06px;
        }

        .rectangle-38 {
            background: rgba(37, 82, 147, 0.87);
            width: 1380px;
            height: 64.15px;
            position: absolute;
            left: 420px;
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
            left: 560px;
            top: 242.86px;
            transform-origin: 0 0;
            transform: rotate(90deg) scale(1, 1);
        }

        .madetai {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 440px;
            top: 263px;
            width: 107.23px;
            height: 30.14px;
        }

        .tendetai {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 900px;
            top: 263.31px;
            width: 200.32px;
            height: 30.14px;
        }

        .ketqua {
            color: #E7F5FF;
            font-size: 24px;
            font-family: Inter;
            font-weight: 600;
            word-wrap: break-word;
            position: absolute;
            left: 1600px;
            top: 260.53px;
            width: 200px;
            height: 29.67px;
        }

        .line-9 {
            margin-top: -1px;
            border-style: solid;
            border-color: #ffffff;
            border-width: 1px 0 0 0;
            width: 549.77px;
            height: 0px;
            position: absolute;
            left: 1500px;
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
            background: #5183ca;
            border-radius: 10px;
            width: 345px;
            height: 92px;
            position: absolute;
            left: 608px;
            top: 879px;
        }

        .xuatbaocao {
            color: #e7f5ff;
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 36px;
            font-weight: 500;
            position: absolute;
            left: 639px;
            top: 881px;
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
            left: 1056px;
            top: 879px;
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
            font-size: 64px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            position: absolute;
            left: 460px;
            top: 136px;
        }

        .popup-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 8px;
            width: 300px;
        }

        .popup-content {
            display: flex;
            flex-direction: column;

            margin-left: 70px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
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

        .confirm-popup .popup-header {
            font-size: 40px;
            font-weight: bold;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word;
            margin-left: 60px;
        }

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn,
        .confirm-popup .cancel-btn {
            background: rgba(80.75, 131.22, 201.88, 0.60);
            border-radius: 20px;
            color: #17488C;
            font-size: 36px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
            width: 200px;
            border: none;
            cursor: pointer;

            font-weight: 500;
            word-wrap: break-word;
            margin-top: 50px;
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
    </style>
    <div class="frame-1">
        <div class="md-01">MD01</div>
        <div class="nghi-n-c-u-v-s-ti-n-h-a-c-a-virus-trong-t-ng-lai">
            Nghiên cứu về sự tiến hóa của
            Virus trong tương lai.
        </div>
        <div class="md-02">MD02</div>
        <div class="md-04">MD04</div>
        <div class="md-03">MD03</div>
        <div class="ng-d-ng-tr-tu-nh-n-t-o-trong-nh-n-di-n-khu-n-m-t">
            Ứng dụng trí tuệ nhân tạo trong
            nhận diện khuôn mặt.
        </div>
        <div class="ph-t-tri-n-thu-t-to-n-h-c-m-y-d-o-n-gi-c-phi-u">
            Phát triển thuật toán học máy
            để dự đoán giá cổ phiếu.
        </div>
        <div class="t-i-u-h-a-hi-u-su-t-m-ng-b-ng-thu-t-to-n-h-c-s-u">
            Tối ưu hóa hiệu suất mạng bằng
            thuật toán học sâu.
        </div>
    </div>
    <div class="rectangle-38"></div>
    <div class="line-8"></div>
    <div class="madetai">Mã đề tài</div>
    <div class="tendetai">Tên đề tài</div>
    <div class="ketqua" onclick="openPopup()">Kết quả</div>
    <div class="line-9"></div>
    <div class="line-10"></div>
    <div class="line-11"></div>
    <div class="line-12"></div>
    <div class="line-13"></div>
    <div class="line-14"></div>

    <div class="line-15"></div>
    <!-- <div class="group-13">
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
                                                                        </div> -->
    <div class="truy-v-n-th-ng-tin2">Cập nhật kết quả đề tài cấp khoa</div>

    <div class="popup-overlay" id="confirmOverlay" style="display: none;"></div>
    <div class="confirm-popup" id="confirmPopup" style="display: none;">
        <div class="popup-header">
            <span>Cập nhật kết quả</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content">
            <div style="display: flex; align-items: center; margin: 20px 0;">
                <label for="result" style="margin-right: 10px; color: #17488C; font-size: 40px; font-family: Rasa; font-weight: 500;
                                                                word-wrap: break-word;">Kết quả:</label>
                <input type="text" id="result"
                    style="width: 455px; height: 52px; border-radius: 20px; border: 1px solid #255293; padding: 0 10px; background: #5183CA99;">
            </div>
            <button class="confirm-btn" style="margin-left: 260px; margin-top:40px;" onclick="saveResult()">Xác
                nhận</button>
        </div>
    </div>
    <!-- Popup thông báo thành công -->
    <div class="popup-overlay" id="successOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successPopup" style="display: none;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="Cập nhật thành công!">
            <p>Cập nhật thành công!</p>
        </div>
    </div>

    </div>

    </div>

    <script>
        function openPopup() {
            document.getElementById("confirmPopup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("confirmPopup").style.display = "none";
        }

        function saveResult() {
            // Ẩn popup xác nhận
            document.getElementById("confirmPopup").style.display = "none";
            document.getElementById("confirmOverlay").style.display = "none";

            // Hiện popup thành công
            document.getElementById("successOverlay").style.display = "block";
            document.getElementById("successPopup").style.display = "block";

            // Tự động đóng popup sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay").style.display = "none";
                document.getElementById("successPopup").style.display = "none";
            }, 2000);
        }
    </script>

@endsection