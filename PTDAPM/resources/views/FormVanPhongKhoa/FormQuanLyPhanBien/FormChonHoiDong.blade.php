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
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

h2
{
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
th, td {
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

    </style>
        <div class="flex-1 p-6">
          <div class="flex justify-between items-center mb-6">
           <h1 class="text-2xl font-bold text-blue-900">
            Chọn số lượng hội đồng
           </h1>
           <div class="flex items-center">
            <i class="fas fa-user-circle text-xl text-blue-900 mr-2">
            </i>
            <i class="fas fa-caret-down text-blue-900 ml-2">
            </i>
           </div>
          </div>
          <div class="mb-6">
           <select class="p-2 border border-blue-900 rounded">
            <option value="1">
             1
            </option>
            <option value="2">
             2
            </option>
            <option value="3">
             3
            </option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
           </select>
          </div>
          <h2 class="text-4xl font-bold text-blue-900 mb-4">
           Chọn giảng viên phản biện
          </h2>
          <table class="w-full bg-blue-200 text-blue-900">
           <thead>
            <tr class="bg-blue-300">
             <th class="p-2 border border-blue-400">
              Mã giảng viên
             </th>
             <th class="p-2 border border-blue-400">
              Tên giảng viên
             </th>
             <th class="p-2 border border-blue-400">
              Lĩnh vực nghiên cứu
             </th>
             <th class="p-2 border border-blue-400">
              Chọn
             </th>
            </tr>
           </thead>
           <tbody>
            <tr>
             <td class="p-2 border border-blue-400">
              GV01
             </td>
             <td class="p-2 border border-blue-400">
              Nguyễn Văn B
             </td>
             <td class="p-2 border border-blue-400">
              Trí tuệ nhân tạo
             </td>
             <td class="p-2 border border-blue-400 text-center">
              <input type="checkbox"/>
             </td>
            </tr>
            <tr>
             <td class="p-2 border border-blue-400">
              GV2
             </td>
             <td class="p-2 border border-blue-400">
              Nguyễn Văn C
             </td>
             <td class="p-2 border border-blue-400">
              Khoa học
             </td>
             <td class="p-2 border border-blue-400 text-center">
              <input type="checkbox"/>
             </td>
            </tr>
            <tr>
             <td class="p-2 border border-blue-400">
              GV03
             </td>
             <td class="p-2 border border-blue-400">
              Nguyễn Văn D
             </td>
             <td class="p-2 border border-blue-400">
              Học sâu
             </td>
             <td class="p-2 border border-blue-400 text-center">
              <input type="checkbox"/>
             </td>
            </tr>
           </tbody>
          </table>
          <div class="flex justify-end mt-12">
            <button class="bg-blue-700 text-white px-4 py-2 rounded">
              <a href="{{ route('vanphongkhoa.chiahoidong')}}">Tiếp theo</a>
            </button>
           </div>
         </div>
        </div>
        @endsection