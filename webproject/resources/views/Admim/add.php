<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm tài khoản</title>
<link href="css/bootstrap1.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
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
                <a href="{{ URL('Admim/DiaDiem/DanhSach') }}">
                    <svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar">
                            
                        </use>
                    </svg> Địa Điểm
                </a>
                </li>
            <li>
                <a href="{{ URL('Admim/TheLoai/DanhSach') }}">
                    <svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph">
                            
                        </use>
                    </svg> Thể Loại
                </a>
            </li>
            <li class="active">
                <a href="{{ URL('Admim/TaiKhoan/DanhSach') }}">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"/>
                    </svg> Tài khoản
                </a>
            </li>
            <li role="presentation" class="divider"></li>
        </ul>
    </div><!--/.sidebar-->

    <div class="row">
    	<div class="col-sm-6">
        	<div class="alert alert-danger">User exist!</div>
        	<form method="post">
            	<div class="form-group">
                	<label>Fullname</label>
                    <input type="text" name="full" class="form-control" placeholder="Fullname" required />
                </div>
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Username" required />
                </div>
                <div class="form-group">
                	<label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required />
                </div>
                <div class="form-group">
                	<label>Email</label>
                    <input type="text" name="mail" class="form-control" placeholder="Email" required />
                </div>
                <div class="form-group">
                	<label>Level</label>
                    <select name="level" class="form-control">
                    	<option value="1">Admin</option>
                        <option value="2">Mod</option>
                        <option value="3" selected="selected">User</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>

</body>
</html>
