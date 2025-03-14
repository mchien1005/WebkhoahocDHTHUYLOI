@extends('layouts.layout2')

@section('sidebar')
    <div class="menu-item ">
        <a href=" {{ route('vanphongkhoa.tintuc') }}"">
                            <img src=" {{ asset('images/Commercial.png') }}" alt="News Icon" class="sidebar-icon" />
        <span>Tin tức</span>
        </a>
    </div>
    <div class="menu-item">
        <a href=" {{ route('vanphongkhoa.xembaocao') }}"">
                            <img src=" {{ asset('images/School Director.png') }}" alt="Research Icon"
            class="sidebar-icon" />
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
            <span>Cập nhật kết quả <br />trình bày bảo vệ</span>
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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');



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
            background-color: rgba(81, 131, 202, 0.60);
        }

        th {
            background-color: #4a75af;
            color: white;
            text-align: center;
            padding: 12px 15px;
            font-weight: 500;
            border: 1px solid #ffffff;
        }

        td {
            padding: 12px 15px;
            background-color: #bbd5eb;
            border: 1px solid #ffffff;
        }

        .empty-row td {
            height: 50px;
            background-color: #c8dfef;
        }

        .table-header {
            color: #E7F5FF;
            font-family: Inter, sans-serif;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
    </style>
    <div class="main-content">
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-4">
                Báo cáo đề tài
            </h1>
            <table class="w-full bg-blue-200 text-center">
                <thead>
                    <thead>
                        <tr class="bg-blue-300" style="background-color: rgba(37, 82, 147, 0.87);">
                            <th class="p-2 border table-header">Mã báo cáo</th>
                            <th class="p-2 border table-header">Tên đề tài</th>
                            <th class="p-2 border table-header">Tiêu đề</th>
                            <th class="p-2 border table-header">Hoạt động</th>
                        </tr>
                    </thead>

                </thead>
                <tbody style="background-color: rgba(81, 131, 202, 0.60);">
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border"
                            style="color: #E7F5FF; font-family: Inter, sans-serif; font-size: 24px; font-weight: 600;text-align: center;">
                            Xem báo cáo
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border">
                        </td>
                        <td class="p-2 border text-blue-800">
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection