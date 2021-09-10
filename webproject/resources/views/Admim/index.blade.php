<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/bootstrap.min.css')}}">
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
			<li  class="active">
				
			</li>
			<li>
				<a href="{{ URL('DSDiaDiem') }}">
					<svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar">
							
						</use>
					</svg> Địa Điểm 
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
			<li>
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

	

		<!--/.row-->		  

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script>
			$('#calendar').datepicker({
			});

			!function ($) {
				$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
					$(this).find('em:first').toggleClass("glyphicon-minus");      
				}); 
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function () {
				if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function () {
				if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
	</script>	
</body>

</html>
