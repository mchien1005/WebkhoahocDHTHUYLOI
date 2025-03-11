@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href="{{ route('capnhatketqua') }}">
            <img src="img/Commercial.png" alt="News Icon" class="sidebar-icon" />
            <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item active">
        <a href="{{ route('truyvanthongtin') }}">
            <img src="img/Saddle Stitched Booklet.png" alt="Research Icon" class="sidebar-icon" />
            <span>Đề tài nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="#dang-ky-nghien-cuu">
            <img src="img/Vector.png" alt="Register Icon" class="sidebar-icon" />
            <span>Đăng ký nghiên cứu</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="#bao-cao-de-tai">
            <img src="img/material-symbols_article-person-outline.png" alt="Report Icon" class="sidebar-icon" />
            <span>Báo cáo đề tài</span>
        </a>
    </div>
    <div class="menu-item">
        <a href="#loi-moi-huong-dan">
            <img src="img/School Director.png" alt="Invitation Icon" class="sidebar-icon" />
            <span>Lời mời hướng dẫn</span>
        </a>
    </div>
@endsection

@section('content')

    {{-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e7f5ff;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            font-size: 28px;
            color: #245292;
            font-weight: 500;
        }

        .add-button {
            background-color: #5083c9;
            color: #e6f4ff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-bottom: 20px;
            max-width: 180px;
        }

        .add-button span {
            margin-right: 10px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #a5c8e6;
        }

        th {
            background-color: #4a75af;
            color: white;
            text-align: left;
            padding: 12px 15px;
            font-weight: 500;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #86b5d9;
            background-color: #bbd5eb;
        }

        tr:nth-child(even) td {
            background-color: #c8dfef;
        }

        .empty-row td {
            height: 50px;
            background-color: #c8dfef;
        }
    </style>
    <h1 class="page-title">Đề tài nghiên cứu</h1>

    <button class="add-button">
        <span>+</span> Thêm đề tài
    </button> --}}

    {{-- <table>
        <thead>
            <tr>
                <th>Mã đề tài</th>
                <th>Tên đề tài</th>
                <th>Trạng thái</th>
                <th>Trạng thái báo cáo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MD01</td>
                <td>Nghiên cứu về sự tiến hóa của Virus trong tương lai.</td>
                <td>Đã xét duyệt</td>
                <td>Đã nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD02</td>
                <td>Ứng dụng trí tuệ nhân tạo trong nhận diện khuôn mặt.</td>
                <td>Chờ xét duyệt</td>
                <td>Nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD03</td>
                <td>Phát triển thuật toán học máy để dự đoán giá cổ phiếu.</td>
                <td>Chờ xét duyệt</td>
                <td>Nộp báo cáo</td>
            </tr>
            <tr>
                <td>MD04</td>
                <td>Tối ưu hóa hiệu suất mạng bằng thuật toán học sâu.</td>
                <td>Đã xét duyệt</td>
                <td>Đã nộp báo cáo</td>
            </tr>
            <tr class="empty-row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="empty-row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table> --}}

@endsection