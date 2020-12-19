@extends('layout.layout')

@section('css')
	<link rel="stylesheet" href="{{asset('vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/core.css')}}">
	<style type="text/css">
	.delete:before {
		content: "\e61d";
	}
</style>
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
		@if( Session::has('flash_message'))
	                <div class="alert alert-{{ Session::get('flash_level')}}">
	                    {{ Session::get('flash_message')}}
	                </div>
	            @endif
				<h5 class="mb-1">Danh sách phòng Lab</h5>
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên phòng Lab</th>
							<th>Loại phòng Lab</th>
							<th>Số lượng chỗ</th>
							<th><a href="{{URL::route('addLab')}}">Thêm</a></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$stt = 1;
						?>
						@foreach($labs as $lab)
						<tr>
							<td>{{$stt++}}</td>
							<td>{{$lab->name}}</td>
							<td>{{$lab->type}}</td>
							<td>{{$lab->seat}}</td>
							<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center " style="width: 50px;">
								<a href="{{URL::route('deleteLab',[$lab->id])}}" onclick="return confirmDelete('Bạn có chắc chắn muốn xóa phòng lab này không?')"><button class="jsgrid-button jsgrid-edit-button ti-trash" type="button" title="Delete" ></button></a>
								<a href="{{URL::route('editLab',[$lab->id])}}"><button class="jsgrid-button jsgrid-delete-button ti-pencil-alt" type="button" title="Edit"></button></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
      <br>
      </div>
  </div>
</div>
  </div>
</div>
@endsection()

@section('js')
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.12.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/tether/js/tether.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/jscrollpane/mwheelIntent.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/waves/waves.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/switchery/dist/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/JSZip/jszip.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/tables-datatable.js')}}"></script>
@endsection()