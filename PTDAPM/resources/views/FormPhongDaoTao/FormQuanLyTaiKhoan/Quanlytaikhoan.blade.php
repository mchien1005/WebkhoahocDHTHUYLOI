@extends('layouts.PDTlayout')

@section('sidebar')
    <div class="menu-item">
        <a href="{{route('phongdaotao.tintuc')}}">
            <img src="{{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('phongdaotao.xembaocao')}}">
            <img src="{{ asset('images/School Director.png') }}" alt="Research Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.phanbienvabaove')}}">
            <img src="{{ asset('images/carbon_result.png') }}" alt="Register Icon" class="sidebar-icon" />
            <span>Phản biện & bảo vệ</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="{{ route('phongdaotao.capnhatketqua') }}">
            <img src="{{ asset('images/New Document.png') }}" alt="Report Icon" class="sidebar-icon" />
            <span>Cập nhật kết quả trình bày bảo vệ</span>
        </a>
    </div>
    <div class="menu-item ">
        <a href="{{ route('phongdaotao.truyvanthongtin') }}">
            <img src="{{ asset('images/mdi_court-hammer.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Truy vấn thông tin</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('phongdaotao.quanlytaikhoan') }}">
            <img src="{{ asset('images/solar_user-linear.png') }}" alt="Invitation Icon" class="sidebar-icon" />
            <span>Quản lý tài khoản</span>
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
            left: 230px;
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
            left: 230px;
            top: 93px;
        }

        .dt03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 230px;
            top: 163px;
        }

        .hd01 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 10px;
        }

        .hd02 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 75px;
        }

        .hd03 {
            color: #255293;
            text-align: left;
            font-family: "Inter-SemiBold", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 600px;
            top: 150px;
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
            left: 935px;
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
            left: 1100px;
            right: 500px;
            top: 245px;
            width: 177px;
            height: 29.67px;
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
            left: 1060px;
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
            left: 510px;
            top: 700px;
        }

        .quaylai {
            text-align: center;
            font-family: "Rasa-Medium", sans-serif;
            font-size: 24px;
            font-weight: 600;
            position: absolute;
            left: 450px;
            top: 700px;
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
            width: 778px;
            height: 242px;
            background: #E7F5FF;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 24px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;

        }

        .popup-container2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 810px;
            height: 308px;
            background: #E7F5FF;
            border: 2px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            overflow: auto;
            border-radius: 10px;
            /* color: #5183ca; */
            font-weight: bolder;
            color: #255293;
            font-size: 24px;
            font-family: "Rasa", sans-serif;
            font-weight: 500;
            word-wrap: break-word;

        }

        .popup-container p {
            padding-left: 30px;
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
            font-size: 32px;
            font-weight: 700;
            color: #255293;
            padding: 10px 20px 10px;
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


        .btn-warning img,
        .btn-danger img {
            width: 33px;
            /* Điều chỉnh kích thước ảnh */
            height: 32px;
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
            width: 778px;
            height: 242px;
            background: #E7F5FF;
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
            margin-top: 70px;
            font-weight: 500;
            word-wrap: break-word
        }

        .confirm-popup .confirm-btn {
            margin-right: 40px;
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
            width: 700px;
            height: 48.23601531982422px;
            border-radius: 10px;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;

            display: flex;
            align-items: center;

        }

        .form-input {
            width: 640px;
            height: 44.790584564208984px;
            border-radius: 10px;
            /* border: 1px solid #255293; */
            border: none;
            padding: 0 40px 0 10px;
            color: #17488C;
            background: #5183CA99;
            font-size: 32px;
            font-family: Rasa;
            font-weight: 700;


        }

        .input-icon {
            position: absolute;

            width: 35px;
            height: 35px;
            right: 70px;

            cursor: pointer;
            top: 50%;
            transform: translateY(-50%);

            pointer-events: none;
            /* Không cản trở nhập liệu */
        }

        .icon:hover {
            background-color: #D0E4FF;
            /* Đổi màu khi hover */
        }

        .error-message {
            padding: 20px;

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

        .error-message img {
            margin-left: 20px;
        }

        .error-message p {
            padding-left: 30px;
        }

        .popup-header2 {
            display: flex;
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-size: 36px;
            font-weight: bold;
            color: #255293;
            padding: 5px;
        }

        .popup-header2 span {
            margin-left: 10px;
        }

        input[type="datetime-local"] {
            color: #17488C;
            /* Màu chữ */
            font-size: 32px;
            /* Điều chỉnh cỡ chữ */
            font-weight: bold;
            /* Đậm chữ */
        }


        .container {
            display: flex;
            /* Căn giữa dọc (nếu cần) */
        }

        .custom-table {
            padding-top: 120px;
            width: 100%;
            /* Điều chỉnh độ rộng bảng */
            max-width: 987px;
            /* Giới hạn chiều rộng tối đa */
            margin: auto;
            /* Căn giữa theo chiều ngang */
            text-align: center;
            /* Căn giữa nội dung */
        }

        .custom-table th {
            background-color: #255293DE;
            color: white;
            text-align: center;
            height: 64.15px;
            font-family: Inter;
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0%;


        }

        .custom-table td {
            background: rgba(81, 131, 202, 0.6);
            color: #255293;
            text-align: center;
            max-height: 100px;
            height: 50px;
            font-family: Inter;
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0%;


        }


        .custom-table th:nth-child(1) {
            width: 20%;
        }

        /* Mã đề tài */
        .custom-table th:nth-child(2) {
            width: 25%;
        }

        /* Tên đề tài */
        .custom-table th:nth-child(3) {
            width: 15%;
        }

        /* Ngày đăng ký */
        .custom-table th:nth-child(4) {
            width: 15%;
        }

        .custom-table th:nth-child(5) {
            width: 15%;
        }

        .custom-table th:nth-child(6) {
            width: 10%;
        }

        .btn-update {
            font-family: 'Rasa', serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;

            /* Cỡ chữ 20px */
            background-color: transparent;
            /* Nền trong suốt */
            border: none;
            /* Không có viền */
            color: #255293;
            /* Màu chữ (có thể điều chỉnh nếu trùng với nền) */
            cursor: pointer;
            /* Hiển thị con trỏ khi rê chuột */
            /* Chữ in đậm để dễ nhìn hơn */
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #5183CA99;
        }

        .close-btn:hover {
            color: red;
        }

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

        .confirm-popup .popup-content {
            font-size: 40px;
            color: #255293;
            font-weight: 500;
            word-wrap: break-word
        }

        .success-popup {
            width: 778px;
            height: 242px;
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
        }

        .success-popup img {
            padding-top: 50px;
            display: flex;
            padding-right: 100px;
            padding-left: 30px;
            justify-content: center;
        }

        .success-popup p {
            padding-top: 70px;
            align-items: center;
            justify-content: center;
            color: #255293;
            font-size: 40px;
            font-family: Rasa;
            font-weight: 500;
            word-wrap: break-word;
        }

        .header-container {
            display: flex;
            /* Căn h1 bên trái, button bên phải */
            justify-content: flex-end;
            /* Căn giữa theo chiều dọc */
            /* Khoảng cách với nội dung bên dưới */
        }

        .add-account-btn {
            display: flex;
            align-items: center;
            /* Căn icon và text cùng dòng */
            gap: 8px;
            background-color: #5183CA;
            /* Màu xanh */
            color: white;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            width: 249px;
            height: 51px;
            margin-right: 20px;
            margin-top: 100px;
            margin-bottom: -100px;
        }

        .add-role-btn {
            display: flex;
            align-items: center;
            /* Căn icon và text cùng dòng */
            gap: 8px;
            background-color: #5183CA;
            /* Màu xanh */
            color: white;
            font-family: Rasa;
            font-weight: 500;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            width: 192px;
            height: 51px;
            margin-right: 20px;
            margin-top: 100px;
            margin-bottom: -100px;
        }

        .add-account-btn:hover,
        .add-role-btn:hover {
            background-color: #3A6EA5;
            /* Màu xanh đậm hơn khi hover */
        }

        .header-container img {
            width: 36px;
            height: 36px;
        }
    </style>
    <div>
        {{-- <div class="d-flex justify-content-between w-100 mb-3">
            <button class="btn btn-primary" onclick="openRolePopup()">👥 Phân quyền</button>
            <button class="btn btn-success" onclick="openAddAccountPopup()">➕ Thêm tài khoản</button>
        </div> --}}
        <div class="header-container">
            <button class="add-role-btn" onclick="openPhanPopup()">
                <img src="{{ asset('images/mdi_account-switch.png') }}" alt="" />Phân quyền</button>
            <button class="add-account-btn" onclick="openAddPopup()">
                <img src="{{ asset('images/material-symbols_add.png') }}" alt="" />Thêm tài khoản</button>
        </div>
        <table class="table table-bordered custom-table responsive-table text-center">
            <thead>
                <tr>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>SĐT</th>
                    <th>Vai trò</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taiKhoans as $tk)
                    <tr>
                        <td>{{ $tk->ten_dang_nhap }}</td> <!-- Lấy tên từ các bảng khác theo email -->
                        <td>{{ $tk->email }}</td>
                        <td>********</td>
                        {{-- <td>{{ $tk->mat_khau }}</td> <!-- Hiển thị mật khẩu không mã hóa --> --}}
                        <td>
                            @if ($tk->vai_tro === 'Giảng viên')
                                {{ optional($tk->giangVien)->sdt ?? 'N/A' }}
                            @else
                                N/A
                            @endif
                        </td> <!-- Số điện thoại nếu là Giảng viên -->
                        <td>{{ $tk->vai_tro }}</td>
                        <td style="display: flex; align-items: center; padding-right: 10px;">
                            <!-- Nút Sửa -->
                            <button class="btn btn-warning" onclick="openEditPopup({{ $tk->email }})"
                                style="background: none; border: none; cursor: pointer;">
                                <img class="megaphone" src="{{ asset('images/bx_edit.png') }}" alt="Chỉnh sửa">
                            </button>

                            <!-- Nút Xóa -->
                            <form action="{{ route('taikhoan.destroy', ['email' => $tk->email]) }}" method="POST"
                                style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <!-- Nút Xóa -->
                                <button type="button" class="btn btn-danger"
                                    style="background: none; border: none; cursor: pointer;"
                                    onclick="openConfirmDeletePopup('{{ $tk->email }}')">
                                    <img class="megaphone" src="{{ asset('images/iconamoon_trash-bold.png') }}" alt="Xóa">
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Popup thêm tài khoản -->
    <div id="addModal" style="display:none">
        <form method="POST" action="{{ route('taikhoan.store') }}">
            @csrf
            <input type="email" name="email" required placeholder="Email">
            <input type="text" name="mat_khau" required placeholder="Mật khẩu">
            <input type="text" name="sdt" placeholder="Số điện thoại">
            <select name="vai_tro">
                <option value="Admin">Admin</option>
                <option value="Giảng viên">Giảng viên</option>
                <option value="Sinh viên">Sinh viên</option>
                <option value="Nhân viên">Nhân viên</option>
            </select>
            <button type="submit">Thêm</button>
        </form>
    </div>
    {{-- <!-- Popup Phân quyền -->
    <div id="phanQuyenModal" class="modal">
        <div class="modal-content">
            <h3>Phân quyền</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->email }}</td>
                        <td>
                            <select class="form-control roleSelect" data-id="{{ $user->id }}">
                                <option value="Admin" {{ $user->vai_tro == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Giảng viên" {{ $user->vai_tro == 'Giảng viên' ? 'selected' : '' }}>Giảng viên
                                </option>
                                <option value="Sinh viên" {{ $user->vai_tro == 'Sinh viên' ? 'selected' : '' }}>Sinh viên
                                </option>
                                <option value="Nhân viên" {{ $user->vai_tro == 'Nhân viên' ? 'selected' : '' }}>Nhân viên
                                </option>
                            </select>
                        </td>
                        <td><button class="btn btn-success btnUpdateRole" data-id="{{ $user->id }}">Lưu</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <div class="popup-overlay" id="confirmDeleteOverlay" style="display: none;"></div>

    <div class="confirm-popup" id="confirmDeletePopup" style="display: none;">
        <div class="popup-header2">
            <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
            <span>Thông báo</span>
        </div>

        <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

        <div class="popup-content" style="padding-top: 30px;">
            <p style="font-size: 36px; ">Bạn có chắc chắn muốn xóa tài khoản này không?</p>
            <button class="confirm-btn" onclick="confirmDelete()">Xác nhận</button>
            <button class="cancel-btn" onclick="closeConfirmDeletePopup()">Hủy</button>
        </div>
    </div>

    <div class="popup-overlay" id="successDeleteOverlay" style="display: none;"></div>
    <div class="popup-container success-popup" id="successDeletePopup" style="display: none;">
        <div style="display: flex; gap: 15px;">
            <img class="done" src="{{ asset('images/Done.png') }}" alt="">
            <p>Xóa tài khoản thành công</p>
        </div>
    </div>


    <script>
        let deleteEmail = null; // Lưu email cần xóa

        function openConfirmDeletePopup(email) {
            deleteEmail = email;
            document.getElementById("confirmDeletePopup").style.display = "block";
            document.getElementById("confirmDeleteOverlay").style.display = "block";
        }

        function closeConfirmDeletePopup() {
            document.getElementById("confirmDeletePopup").style.display = "none";
            document.getElementById("confirmDeleteOverlay").style.display = "none";
        }

        function confirmDelete() {
            if (deleteEmail) {
                let form = document.createElement("form");
                form.method = "POST";
                form.action = `/quanlytaikhoan/${deleteEmail}`; // Route xóa
                form.style.display = "none";

                let csrfToken = document.createElement("input");
                csrfToken.type = "hidden";
                csrfToken.name = "_token";
                csrfToken.value = "{{ csrf_token() }}";

                let methodInput = document.createElement("input");
                methodInput.type = "hidden";
                methodInput.name = "_method";
                methodInput.value = "DELETE";

                form.appendChild(csrfToken);
                form.appendChild(methodInput);
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Kiểm tra nếu có thông báo xóa thành công từ session
        window.onload = function () {
            @if(session('delete_success'))
                showSuccessPopup();
            @endif
                                                                                                                                                                };

        function showSuccessPopup() {
            document.getElementById("successDeletePopup").style.display = "block";
            document.getElementById("successDeleteOverlay").style.display = "block";

            // Tự động ẩn sau 2 giây
            setTimeout(() => {
                document.getElementById("successDeletePopup").style.display = "none";
                document.getElementById("successDeleteOverlay").style.display = "none";
            }, 2000);
        }
    </script>


@endsection