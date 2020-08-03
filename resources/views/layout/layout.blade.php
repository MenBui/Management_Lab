<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hệ thống quản lý phòng Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
<body>

<<<<<<< HEAD
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>HỆ THỐNG QUẢN LÝ PHÒNG LAB</h1>
  <p>TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI - VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Giảng viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sinh viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Doanh nghiệp</a>
      </li>    
    </ul>
  </div>  
</nav>
=======
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
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
        @else
        <div class="header-profile-panel" aria-hidden="true" style="display: none;">
          <div class="dropdown header-account-info-panel" width="250px">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <div class="imageAvatar" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                <img class="gwt-Image" aria-hidden="true" style="display: none; width: 35px;">
                <img class="gwt-Image" src="/images/default_avatar.jpg" style="width: 35px;">
                <div style="display: flex; align-items: flex-start; flex-direction: column; padding: 5px;">
                  <div class="gwt-HTML btn-link" style="cursor: pointer; font-size: 13px;"></div>
                  <div class="gwt-HTML" aria-hidden="true" style="display: none;"></div>
                </div>
              </div>
            </div>
            <ul>
             <li class="header-account-info">
              {{ Auth::user()->name }}
               <div class="imageAvatar" style="display: flex; align-items: center; justify-content: center; flex-direction: row; padding: 10px; border-bottom: 1px solid rgb(221, 221, 221);">
                 <img class="gwt-Image" aria-hidden="true" style="display: none; width: 50px;">
                 <img class="gwt-Image" src="/images/default_avatar.jpg" style="width: 50px;">
                 <div style="display: flex; align-items: flex-start; flex-direction: column; padding: 5px;">
                   <div class="gwt-HTML btn-link" style="cursor: pointer; font-size: 13px;"></div>
                   <div class="gwt-HTML" aria-hidden="true" style="display: none;"></div>
                 </div>
               </div>
             </li> 
             <li>
               <a class="gwt-Anchor">Thông tin cá nhân</a>
             </li>
             <li>
               <a class="button-change-password">Thay đổi mật khẩu</a>
             </li>
             <li>
               <a class="gwt-Anchor">Cài đặt hệ thống</a>
             </li>
             <li>
               <a class="gwt-Anchor" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Đăng xuất</a>
             </li>
            </ul>
          </div>
        </div>
        @endguest
        <div class="gwt-HTML"></div>
      </div>
    </div>
  </div>
</div>

@yield('content')
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
