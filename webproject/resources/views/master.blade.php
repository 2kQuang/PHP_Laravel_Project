<!DOCTYPE html>
<html>

<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/CHITIETDD.css') }}">
	<script>
		if ( window.history.replaceState ) 
		{
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/SANPHAM.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TOP.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('CSS/TOP.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="CSS/w3.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TRANGCHU1.css') }}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
  	.container-fluid{
  		background-color: #630118;
  	}

  	.navbar-brand{
  		width: 200px;
      height: auto;
  		
  	}

  	
  	.navbar-nav li{
  		width: 150px;
      height: auto;
      font-size: 16px;
  	}

    .navbar-nav li a{
      padding-top: 28px;
    }



  	.input-group{
  		width: 350px; 
      margin-top: 10px;
      margin-left: 100px;
  	}
    

    .dropdown:hover {
      background-color: #630118;
    }

    .logo{
      display: block;
      margin: auto;
      width: 60%;
    }

  
  </style>


</head>
<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    <div class="navbar-header" >
      <a class="navbar-brand" href="{{URL::to('trangchu')}}"><img class="logo" src="{{ URL::asset('ANHTRANGCHU/logoH.png') }}" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{URL::to('trangchu')}}">Trang chủ</a></li>
      <li><a href="{{URL::to('monan')}}">Thể Loại</a></li>
      <li><a href="{{URL::to('gioithieu')}}">Giới thiệu</a></li>
     <?php 
      if( Session::get('TenNVSS')!=null ){
        ?>
        <li><a>{{Session::get('TenNVSS')}}
        <li><a href="{{URL::to('DangXuat')}}">Đăng xuất</a></li></a>
        <?php }else { ?>
          <li><a></a>
          <?php  } ?>
          <ul class="sub-menu">
            <?php  
            if( Session::get('TenNVSS')!=null ){
              ?>
              <li><a href="">Quản lý tài khoản</a></li>
              <li><a href="{{URL::to('GioHang/LichSu')}}">Đơn hàng của tôi</a></li>
              <li><a href="{{URL::to('DangXuat')}}">Đăng xuất</a></li>
            <?php }else { ?>
              <li><a href="{{URL::to('DangNhap')}}">Đăng nhập</a></li>
              <li><a href="{{URL::to('DangKy')}}">Đăng ký</a></li>
            <?php } ?>
          </ul>
        </li> 
      
    <li><a href="{{URL::to('DangNhap')}}">Đăng nhập</a></li>
    </ul>
    <form class="navbar-form " action="{{ url('Monan/TimKiem')}}" method="post">
      <div class="input-group">
      	<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="form-control" name="TimKiem" type="text" placeholder="Tìm Kiếm..." >
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

  </div>
  
</nav>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

	<form method="post">
		@csrf 
		@yield('menu')
	</form>
</body>
</html>



