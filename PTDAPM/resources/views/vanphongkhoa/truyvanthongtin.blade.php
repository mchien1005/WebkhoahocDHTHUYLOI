<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
</head>

<style>
    .truyvanphanbien,
    .truyvanphanbien * {
        box-sizing: border-box;
    }

    .truyvanphanbien {
        background: #e7f5ff;
        height: 1024px;
        overflow: hidden;
    }

    .rectangle-4 {
        background: #255293;
        width: 100%;
        height: 109px;
        position: absolute;
        left: 0px;
        top: -1px;
    }

    .DHTL {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 40px;
        font-weight: 500;
        position: absolute;
        left: 167px;
        top: 35px;
        width: 608px;
        height: 54px;
    }

    .v-n-ph-ng-khoa {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Bold", sans-serif;
        font-size: 24px;
        font-weight: 700;
        position: absolute;
        left: 1500px;
        top: 37px;
        width: 200px;
        height: 28px;
    }

    .rectangle-5 {
        background: rgba(37, 82, 147, 0.87);
        width: 400px;
        height: 917px;
        position: absolute;
        left: 0px;
        top: 103px;
    }

    .rectangle-6 {
        background: rgba(37, 82, 147, 0.87);
        border-style: solid;
        border-color: #17488c;
        border-width: 1px;
        width: 400px;
        height: 95px;
        position: absolute;
        left: 0px;
        top: 111px;
    }

    .tin-t-c {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 32px;
        font-weight: 500;
        position: absolute;
        left: 80px;
        top: 140px;
    }

    .rectangle-7 {
        background: rgba(37, 82, 147, 0.87);
        border-style: solid;
        border-color: #17488c;
        border-width: 1px;
        width: 400px;
        height: 94px;
        position: absolute;
        left: 0px;
        top: 206px;
    }

    .b-o-c-o-t-i {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 32px;
        font-weight: 500;
        position: absolute;
        left: 80px;
        top: 234px;
    }

    .rectangle-8 {
        background: rgba(37, 82, 147, 0.87);
        border-style: solid;
        border-color: #17488c;
        border-width: 1px;
        width: 400px;
        height: 95px;
        position: absolute;
        left: 0px;
        top: 300px;
    }

    .ph-n-bi-n-b-o-v {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 32px;
        font-weight: 500;
        position: absolute;
        left: 80px;
        top: 328px;
    }

    .rectangle-9 {
        background: rgba(37, 82, 147, 0.87);
        border-style: solid;
        border-color: #17488c;
        border-width: 1px;
        width: 400px;
        height: 95px;
        position: absolute;
        left: 0px;
        top: 395px;
    }

    .rectangle-10 {
        background: rgba(81, 131, 202, 0.6);
        border-style: solid;
        border-color: #17488c;
        border-width: 1px;
        width: 400px;
        height: 95px;
        position: absolute;
        left: 0px;
        top: 490px;
    }

    .c-p-nh-t-k-t-qu {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 32px;
        font-weight: 500;
        position: absolute;
        left: 87px;
        top: 423px;
    }

    .truy-v-n-th-ng-tin {
        color: #e7f5ff;
        text-align: left;
        font-family: "Rasa-Medium", sans-serif;
        font-size: 32px;
        font-weight: 500;
        position: absolute;
        left: 70px;
        top: 517px;
    }

    .test-account {
        width: 59px;
        height: 45px;
        position: absolute;
        left: 1440px;
        top: 26.96px;
        transform-origin: 0 0;
        transform: rotate(2.053deg) scale(1, 1);
        object-fit: cover;
    }

    .logo-thuy-loi {
        width: 104px;
        height: 86px;
        position: absolute;
        left: 18px;
        top: 17px;
        object-fit: cover;
        aspect-ratio: 104/86;
    }

    .commercial {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 18px;
        top: 145px;
        object-fit: cover;
    }

    .school-director {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 18px;
        top: 518px;
        object-fit: cover;
    }

    .chevron-down {
        width: 23px;
        height: 67px;
        position: absolute;
        left: 1720px;
        top: 17px;
        object-fit: cover;
    }

    .carbon-result {
        width: 2.5%;
        height: 36px;
        position: absolute;
        right: 96.18%;
        left: 1.32%;
        top: 423px;
        overflow: visible;
        aspect-ratio: 1;
    }

    .new-document {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 17px;
        top: 234px;
        object-fit: cover;
    }

    .mdi-court-hammer {
        width: 36px;
        height: 36px;
        position: absolute;
        left: 19px;
        top: 328px;
        overflow: visible;
        aspect-ratio: 1;
    }

    .group-14 {
        position: absolute;
        inset: 0;
    }

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
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 16px;
        top: 19px;
    }

    .nghi-n-c-u-v-s-ti-n-h-a-c-a-virus-trong-t-ng-lai {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 116px;
        top: 12px;
    }

    .md-02 {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 16px;
        top: 100px;
    }

    .md-04 {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 16px;
        top: 236px;
    }

    .md-03 {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 16px;
        top: 170px;
    }

    .ng-d-ng-tr-tu-nh-n-t-o-trong-nh-n-di-n-khu-n-m-t {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 117px;
        top: 88px;
    }

    .ph-t-tri-n-thu-t-to-n-h-c-m-y-d-o-n-gi-c-phi-u {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 116px;
        top: 158px;
    }

    .t-i-u-h-a-hi-u-su-t-m-ng-b-ng-thu-t-to-n-h-c-s-u {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 111px;
        top: 228.06px;
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
        left: 520.56px;
        top: 242.86px;
        transform-origin: 0 0;
        transform: rotate(90deg) scale(1, 1);
    }

    .madetai {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 430px;
        top: 263px;
        width: 107.23px;
        height: 30.14px;
    }

    .tendetai {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 20px;
        font-weight: 600;
        position: absolute;
        left: 556.1px;
        top: 263.31px;
        width: 200.32px;
        height: 30.14px;
    }

    .ngaydangky {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 800px;
        top: 260.53px;
        width: 200px;
        height: 29.67px;
    }

    .trangthai {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 980px;
        top: 260.53px;
        width: 115.32px;
        height: 30.14px;
    }

    .giangvien {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 1140px;
        top: 260.53px;
        width: 88.39px;
        height: 29.75px;
    }

    .sinhvien {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 1360px;
        top: 260.53px;
        width: 65.88px;
        height: 29.75px;
    }

    .ketquacaptruong {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 1520px;
        top: 245px;
        width: 65.88px;
        height: 29.75px;
    }

    .ketquacapkhoa {
        color: #e7f5ff;
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 16px;
        font-weight: 600;
        position: absolute;
        left: 1690px;
        top: 245px;
        width: 65.88px;
        height: 29.75px;
    }

    .line-9 {
        margin-top: -1px;
        border-style: solid;
        border-color: #ffffff;
        border-width: 1px 0 0 0;
        width: 549.77px;
        height: 0px;
        position: absolute;
        left: 780.39px;
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
        left: 930px;
        top: 242.86px;
        transform-origin: 0 0;
        transform: rotate(90deg) scale(1, 1);
    }

    .line-20 {
        border-style: solid;
        border-color: #e7f5ff;
        border-width: 1px 0 0 0;
        width: 549.77px;
        height: 0px;
        position: absolute;
        left: 1100.56px;
        top: 242.86px;
        transform-origin: 0 0;
        transform: rotate(90deg) scale(1, 1);
    }



    .line-21 {
        border-style: solid;
        border-color: #e7f5ff;
        border-width: 1px 0 0 0;
        width: 549.77px;
        height: 0px;
        position: absolute;
        left: 1300.56px;
        top: 242.86px;
        transform-origin: 0 0;
        transform: rotate(90deg) scale(1, 1);
    }


    .line-22 {
        border-style: solid;
        border-color: #e7f5ff;
        border-width: 1px 0 0 0;
        width: 549.77px;
        height: 0px;
        position: absolute;
        left: 1450.56px;
        top: 242.86px;
        transform-origin: 0 0;
        transform: rotate(90deg) scale(1, 1);
    }

    .line-23 {
        border-style: solid;
        border-color: #e7f5ff;
        border-width: 1px 0 0 0;
        width: 549.77px;
        height: 0px;
        position: absolute;
        left: 1650.56px;
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
        width: 862px;
        height: 930px;
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
        line-height: 1.1;
    }


    /* Nội dung có thể cuộn */
    .popup-content {
        height: 100%;
        overflow-y: auto;
        padding-left: 70px;
        padding-top: 20px;

        /* Điều chỉnh khoảng cách giữa các dòng */
        font-size: 14px;
        font-weight: bolder;
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
        padding: 10px 10px;
        border: none;
        border-radius: 10px;
        cursor: pointer;

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
</style>
<main>
    <div class="truyvanphanbien">
        <div class="rectangle-4"></div>
        <div class="DHTL">TRƯỜNG ĐẠI HỌC THỦY LỢI</div>
        <a class="v-n-ph-ng-khoa">Văn phòng khoa</a>
        <div class="rectangle-5"></div>
        <div class="rectangle-6"></div>
        <a class="tin-t-c">Tin tức</a>
        <div class="rectangle-7"></div>
        <a class="b-o-c-o-t-i">Báo cáo đề tài</a>
        <div class="rectangle-8"></div>
        <a class="ph-n-bi-n-b-o-v">Phản biện & bảo vệ</a>
        <div class="rectangle-9"></div>
        <div class="rectangle-10"></div>
        <a href="{{ route('capnhatketqua') }}" class="c-p-nh-t-k-t-qu">Cập nhật kết quả</a>
        <a href="{{ route('truyvanthongtin') }}" class="truy-v-n-th-ng-tin">Truy vấn thông tin</a>
        <img class="test-account" src="{{ asset('images/Test Account.png') }}" />
        <img class="logo-thuy-loi" src="{{ asset('images/Logo-Thuy_Loi.png') }}" />
        <img class="commercial" src="{{ asset('images/Commercial.png') }}" />
        <img class="school-director" src="{{ asset('images/School Director.png') }}" />
        <img class="chevron-down" src="{{ asset('images/Chevron Down.png') }}" />
        <img class="carbon-result" src="{{ asset('images/carbon_result.png') }}" />
        <img class="new-document" src="{{ asset('images/New Document.png') }}" />
        <img class="mdi-court-hammer" src="{{ asset('images/mdi_court-hammer.png') }}" />
        <div class="frame-1">
            <div class="md-01">MD01</div>
            <div class="nghi-n-c-u-v-s-ti-n-h-a-c-a-virus-trong-t-ng-lai">
                Nghiên cứu về sự tiến hóa của
                <br />
                Virus trong tương lai.
            </div>
            <div class="md-02">MD02</div>
            <div class="md-04">MD04</div>
            <div class="md-03">MD03</div>
            <div class="ng-d-ng-tr-tu-nh-n-t-o-trong-nh-n-di-n-khu-n-m-t">
                Ứng dụng trí tuệ nhân tạo trong
                <br />
                nhận diện khuôn mặt.
            </div>
            <div class="ph-t-tri-n-thu-t-to-n-h-c-m-y-d-o-n-gi-c-phi-u">
                Phát triển thuật toán học máy
                <br />
                để dự đoán giá cổ phiếu.
            </div>
            <div class="t-i-u-h-a-hi-u-su-t-m-ng-b-ng-thu-t-to-n-h-c-s-u">
                Tối ưu hóa hiệu suất mạng bằng
                <br />
                thuật toán học sâu.
            </div>
        </div>
        <div class="rectangle-38"></div>
        <div class="line-8"></div>
        <div class="madetai">Mã đề tài</div>
        <div class="tendetai">Tên đề tài</div>
        <div class="ngaydangky">Ngày đăng ký</div>
        <div class="trangthai">Trạng thái</div>
        <div class="giangvien">Giảng viên</div>
        <div class="sinhvien">Số sinh viên</div>
        <div class="ketquacaptruong">Kết quả cấp trường</div>
        <div class="ketquacapkhoa">Kết quả cấp khoa</div>
        <div class="line-9"></div>
        <div class="line-10"></div>
        <div class="line-11"></div>
        <div class="line-12"></div>
        <div class="line-13"></div>
        <div class="line-14"></div>
        <div class="line-19"></div>
        <img class="line-20" src="line-200.svg" />
        <img class="line-21" src="line-210.svg" />
        <img class="line-22" src="line-220.svg" />
        <img class="line-23" src="line-230.svg" />
        <div class="line-15"></div>
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
        <div class="popup-container" id="popup">
            <span class="close-btn" onclick="closePopup()">✖</span>
            <div class="popup-content">
                <h2>BÁO CÁO THỐNG KÊ ĐỀ TÀI NGHIÊN CỨU KHOA HỌC</h2>
                <p><b>I. Thông tin tổng quan</b></p>
                <p>1. Tổng số đề tài đăng ký: ...............</p>
                <p>2. Số đề tài theo trạng thái:</p>
                <ul>
                    Đang chờ duyệt: ........... Được duyệt: ........... Hoàn thành: ........... Bị từ chối:
                    ...........
                </ul>
                <p>3. Số lượng đề tài theo lĩnh vực nghiên cứu:</p>
                <ul>
                    <li>Công nghệ thông tin: ...........</li>
                    <li>Khoa học xã hội: ...........</li>
                    <li>Khoa học tự nhiên: ...........</li>
                    <li>Khác: ...........</li>
                </ul>
                <p>4. Số lượng đề tài theo khoa:</p>
                <ul>
                    <li>Khoa A: ...........</li>
                    <li>Khoa B: ...........</li>
                    <li>Khoa C: ...........</li>
                </ul>
                <p>5. Tổng số giảng viên hướng dẫn: ...........</p>
                <p>6. Tổng số sinh viên tham gia: ...........</p>

                <p><b>IV. Thống kê kết quả đề tài</b></p>
                <p>1. Số đề tài đạt cấp khoa: ...........</p>
                <p>2. Số đề tài đạt cấp trường: ...........</p>
                <p>3. Điểm phản biện trung bình: ...........</p>

                <p><b>V. Thống kê lịch trình bảo vệ</b></p>
                <p>1. Số đề tài bảo vệ trong từng đợt:</p>
                <ul>
                    <li>Đợt 1: ...........</li>
                    <li>Đợt 2: ...........</li>
                </ul>
                <p>2. Tỷ lệ đề tài bảo vệ thành công: ...........</p>
                <p>3. Danh sách đề tài có lịch bảo vệ sắp tới:</p>
                <p>4. MãđềtàiNgàybảovệGiờbảovệĐịađiểm.................</p>

                <p><b>VI. Thống kê hội đồng phản biện</b></p>
                <p>1. Tổng số hội đồng phản biện: ...........</p>
                <p>2. Tổng số giảng viên phản biện: ...........</p>
                <button class="export-btn" onclick="showConfirmPopup()">XUẤT BÁO CÁO THỐNG KÊ</button>
            </div>
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

        <!-- Popup xác nhận -->
        <div class="popup-overlay" id="confirmOverlay2" style="display: none;"></div>
        <div class="confirm-popup" id="confirmPopup2" style="display: none;">
            <div class="popup-header">
                <img class="megaphone" src="{{ asset('images/Megaphone.png') }}" alt="Thông báo">
                <span>Thông báo</span>
            </div>

            <hr style="border: 1px solid #255293; width: 100%; margin: 0;">

            <div class="popup-content">
                <p style="margin-left: -100px;">Bạn có chắc chắn xuất danh sách đề tài không?</p>
                <button class="confirm-btn" style="margin-right: 20px;" onclick="exportReport2()">Xác nhận</button>
                <button class="cancel-btn" onclick="closeConfirmPopup2()">Hủy</button>
            </div>
        </div>

        <!-- Popup thông báo thành công -->
        <div class="popup-overlay" id="successOverlay2" style="display: none;"></div>
        <div class="popup-container success-popup" id="successPopup2" style="display: none;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                <img class="done" src="{{ asset('images/Done.png') }}" alt="Xuất báo cáo thành công!">
                <p>Xuất danh sách đề tài thành công!</p>
            </div>

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
            document.getElementById("confirmOverlay2").style.display = "flex";
            document.getElementById("confirmPopup2").style.display = "block";
        }

        function closeConfirmPopup2() {
            document.getElementById("confirmOverlay2").style.display = "none";
            document.getElementById("confirmPopup2").style.display = "none";
        }

        function exportReport2() {
            document.getElementById("confirmOverlay2").style.display = "none";
            document.getElementById("confirmPopup2").style.display = "none";
            document.getElementById("successOverlay2").style.display = "flex";
            document.getElementById("successPopup2").style.display = "block";

            // Tự động đóng sau 2 giây
            setTimeout(() => {
                document.getElementById("successOverlay2").style.display = "none";
                document.getElementById("successPopup2").style.display = "none";
            }, 2000);
        }

        // function closeSuccessPopup() {
        //     document.getElementById("successOverlay").style.display = "none";
        //     document.getElementById("successPopup").style.display = "none";
        // }


        // function exportReport() {
        //     // Add your export report logic here
        //     closeConfirmPopup();
        //     alert("Báo cáo đã được xuất!");
        // }
    </script>

</main>

</html>