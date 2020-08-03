@extends('layout.layout')

@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">GIẢNG VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">SINH VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">DOANH NGHIỆP</a>
        </li>    
      </ul>
    </div>   
  </div>
</nav>
@endsection()