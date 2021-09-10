<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/bootstrap1.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/datepicker3.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/styles.css')}}">
<script src="{{ asset('JS/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('JS/js/lumino.glyphs.js') }}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin</a>
                <ul class="user-menu">
                   <?php  
                        if( Session::get('TenNVSS')!=null ){
                    ?>

                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        {{Session::get('TenNVSS')}} 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        
                                <li>
                                    <a href="{{URL::to('DangXuat')}}"> 
                                        <svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel">
                                        </use>
                                    </svg>Đăng xuất</a>
                                </li>
                        </ul>
                    </li>
                    <?php  } ?>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>

    
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            
            <li>
                <a href="{{ URL('DSDiaDiem') }}">
                    <svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar">
                            
                        </use>
                    </svg> Địa điểm
                </a>
                </li>
            <li>
                <a href="{{ URL('DSMonAn') }}">
                    <svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph">
                            
                        </use>
                    </svg> Món ăn 
                </a>
            </li>
            <li class="active">
                <a href="{{ URL('DanhSach') }}">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"/>
                    </svg> Tài khoản
                </a>
            </li>
            <li>
                <a href="{{ URL('QuanLyDon') }}">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"/>
                    </svg> Quản lý đơn đặt
                </a>
            </li>
            <li role="presentation" class="divider"></li>
        </ul>
    </div><!--/.sidebar-->
                    
    <div class="row">
    	<div class="col-sm-12">
    		<div class="alert alert-success">Danh Sách Tài Khoản</div>
    		@if(session('thongbao'))
				<div class="alert alert-success">{{session('thongbao')}}</div>
			@endif
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="20%">Tên</td>
                    <td width="20%">Tài Khoản</td>
                    <td width="10%">Số điện thoại</td>
                    <td width="10%">Quyền</td>
                    <td width="10%">Trạng Thái</td>
                    <td width="15%">Tùy Chọn</td>
                </tr>
                @foreach ($TaiKhoan as $key)
                    <tr>
                         <td>{{$key->ten}}</td>
                        <td>{{$key->taikhoan}}</td>
                        <td>{{$key->sdt}}</td>
                        
                        @if (strcmp('0', $key->quyen) == 0)
                            <td>Admin</td>
                        @elseif (strcmp('2', $key->quyen) == 0)
                            <td>Quản lí địa điểm</td>
                            @else 
                                <td>Khách hàng</td>
                        @endif

                        @if (strcmp('1', $key->trangthai) == 0)
                            <td>Sử Dụng</td>
                        @else
                           <td>Đã Khóa</td>
                        @endif
                        <td>
                            <a href="Sua/{{$key->taikhoan}}" class="btn btn-warning">Sửa</a>
                            @if (strcmp('1', $key->trangthai) == 0)
                                <a href="Xoa/{{$key->taikhoan}}" class="btn btn-danger">Xóa</a>
                            @else
                                <a href="KhoiPhuc/{{$key->taikhoan}}" class="btn btn-danger">K P</a>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach

               
			</table>
            <div class="btn btn-primary">
                    <a style="color:white;text-decoration: none;" href="Them">Thêm tài khoản</a>
            </div>
            
        </div>
    </div>
</div>

</body>
</html>
