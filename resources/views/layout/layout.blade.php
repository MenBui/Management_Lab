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
@yield('content')
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
