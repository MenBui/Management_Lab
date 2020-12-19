@extends('layout.layout')

@section('css')
  <link rel="stylesheet" href="{{asset('/vendor/bootstrap4/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/jscrollpane/jquery.jscrollpane.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/waves/waves.min.css')}}">
  <link rel="stylesheet" href="{{asset('/vendor/switchery/dist/switchery.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/core.css')}}">
@endsection()

@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">PROJECT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">LICH ĐĂNG KÝ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">SINH VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login')}}">ĐĂNG KÝ</a>
        </li>    
      </ul>
    </div>   
  </div>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    	<div class="box box-block bg-white">
    		<ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Quản lý lịch đăng ký</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quản lý người dùng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quản lý phòng Lab</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quản lý Project</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    	</div>
    </div>
    <div class="col-sm-9">
      <div class="box box-block bg-white">
        @if( count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
              <h5>Thêm mới Tài khoản</h5>
              <br>
              <form action="{{URL::route('postAddUser')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label">Họ tên</label>
                <div class="col-xs-10">
                  <input class="form-control" type="text" name="name" value="{{old('name')}}" id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
                <div class="col-xs-10">
                  <input class="form-control" type="email" name="email" value="{{old('email')}}" id="example-email-input">
                </div>
              </div>
              <!-- <div class="form-group row">
                <label for="example-number-input" class="col-xs-2 col-form-label">Loại Tài khoản</label>
                <div class="col-xs-10">
                  <input class="form-control" type="number" name="role" value="{{old('role')}}" id="example-number-input">
                </div>
              </div> -->
              <div class="form-group row">
				<label for="example-number-input" class="col-xs-2 col-form-label">Loại tài khoản</label>
				<div class="col-xs-10">
					<select class="form-control" type="number" id="example-number-input" name="role">
						<option value="1">Sinh viên</option>
						<option value="2">Giảng viên</option>
						<option value="3">Doanh nghiệp</option>
					</select>
				</div>
			  </div>	
              <div class="form-group row">
				<label for="example-password-input" class="col-xs-2 col-form-label">Mật Khẩu</label>
				<div class="col-xs-10">
					<input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}" id="example-password-input">
				</div>
			  </div>
			 <div class="form-group row">
				<label for="example-password-input" class="col-xs-2 col-form-label">Nhập lại</label>
				<div class="col-xs-10">
					<input type="password" class="form-control" name="confirm_password" placeholder="Password" value="{{old('password')}}" id="example-password-input">
				</div>
			  </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              </form>
            </div>
      <br>
      </div>
  </div>
</div>
@endsection()

@section('js')
  <script type="text/javascript" src="{{asset('/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/tether/js/tether.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/jscrollpane/mwheelIntent.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/waves/waves.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('/vendor/switchery/dist/switchery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
@endsection()