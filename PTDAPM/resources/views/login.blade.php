<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: "Inter", sans-serif;
        background: #e7f5ff;
    }

    .login {
        background: #e7f5ff;
        width: 1440px;
        height: 1020px;
        position: relative;
        overflow: hidden;
    }

    .image {
        width: 733px;
        height: 100%;
        position: absolute;
        object-fit: cover;
    }

    .logo-1 {
        width: 706px;
        height: 118px;
        position: absolute;
        left: 700px;
        top: 26px;
        object-fit: cover;
    }

    .ng-nh-p {
        color: #255293;
        font-size: 64px;
        font-weight: 700;
        position: absolute;
        left: 884px;
        top: 234px;
        width: 370px;
    }

    .input-container {
        position: absolute;
        left: 760px;
        width: 672px;
    }

    .input-box {
        background: rgba(24, 99, 152, 0.2);
        border-radius: 24px;
        width: 100%;
        height: 77px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        padding: 0 20px;
    }

    .input-box input {
        width: 100%;
        border: none;
        background: transparent;
        font-size: 24px;
        outline: none;
        color: #255293;
    }

    .input-box input::placeholder {
        color: white;
        opacity: 0.7;
    }

    .login-button {
        background: #255293;
        color: white;
        font-size: 40px;
        font-weight: 500;
        border-radius: 24px;
        width: 100%;
        height: 77px;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-button:hover {
        background: #1a3c72;
    }

    .forgot-password {
        color: #255293;
        font-size: 24px;
        position: absolute;
        left: 1248px;
        top: 748px;
        text-decoration: none;
    }
    </style>
</head>

<body>

    <div class="login">
        <img src="{{ asset('img/dangnhap.png') }}" alt="Background" class="image">
        <img src="{{ asset('img/logo 1.png') }}" alt="Logo" class="logo-1">

        <div class="ng-nh-p">Đăng nhập</div>
        @if ($errors->any())
    <div class="input-container" style="top: 345px;">
        <div class="input-box">
            <input type="email" name="email">
        </div>
        @error('email')
        <div style="color: red; font-size: 16px; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    @endif
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            
            <div class="input-container" style="top: 345px;">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Tài Khoản" required>
                </div>
            </div>

            <div class="input-container" style="top: 491px;">
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mật Khẩu" required>
                </div>
            </div>
            
            <div class="input-container" style="top: 637px;">
                <button type="submit" class="login-button">Đăng nhập</button>
            </div>
        </form>
        
        <a href="#" class="forgot-password">Quên mật khẩu?</a>
        
    </div>
   

</body>

</html>
