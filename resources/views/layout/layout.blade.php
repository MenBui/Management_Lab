<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hệ thống quản lý phòng Lab</title>
  <link rel="shortcut icon" type="image/png" href="/front-end/image/Logo_Hust.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>

<div class="style-body">
  <body>

<div class="container">
  <div class="first-header-panel clearfix">
    <div class="col-xs-12 col-sm-7 first-header-logo-panel">
      <img class="gwt-Image" src="http://storage.googleapis.com/hust-edu.appspot.com/images/347519313-1553408625211-logo_hust.png" style="width: 55px;">
      <div>
        <div class="web-name-title">
          HỆ THỐNG QUẢN LÝ PHÒNG LAB
        </div>
        <div class="school-name-title">
          TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI - VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-5 first-header-info-panel">
      <div style="float:right">
        @guest
        <div class="header-login-panel">
          <a href="{{URL::route('login')}}">
          <button type="button" class="btn-login-main-style">Đăng nhập</button>
          </a>
        </div>
        @else
        <div>Xin chào</div>
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
          <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Thoát') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        </div>
        @endguest
        <div class="gwt-HTML"></div>
      </div>
    </div>
  </div>
</div>
@yield('css')

@yield('content')

@yield('js')
<div class="footer-panel clearfix">
  <div class="container">
    <div class="col-xs-12 col-sm-8 contact-info-footer">
      <img class="gwt-Image" src="http://storage.googleapis.com/hust-edu.appspot.com/images/347519313-1553408625211-logo_hust.png" style="height: 60px;">
      <div>
        <div class="gwt-HTML">HỆ THỐNG DO TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI THIẾT KẾ & PHÁT TRIỂN</div>
        <p>
          Để hỗ trợ vui lòng gửi mail đến 
          <b>
            <a href="MGB">hung.nguyenthanh2@hust.edu.vn</a>
          </b>
        </p>
        <p>
          Hotline: 
          <b>
            <div class="MGB">09.77.86.33.11</div>
          </b>
        </p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4">Số 1 Đại Cồ Việt, Phường Bách Khoa, Quận Hai Bà Trưng, Thành phố Hà Nội</div>
  </div>
</div>

</body>
</div>

</html>
