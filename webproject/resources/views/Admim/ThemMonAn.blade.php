<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm món ăn </title>
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/datepicker3.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/Admim/css/styles.css')}}">
	<script src="{{ asset('JS/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('JS/js/lumino.glyphs.js') }}"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
					<li >

					</li>
					<li>
						<a href="{{ URL('DSDiaDiem') }}">
							<svg class="glyph stroked calendar">
								<use xlink:href="#stroked-calendar">

								</use>
							</svg> Địa điểm
						</a>
					</li>
					<li class="active">
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

			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Món ăn</h1>
					</div>
				</div><!--/.row-->

				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Thêm món ăn</div>
							<div class="panel-body">

								<form action="{{url('ThemMonAn')}}" method="post" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div  class="form-group" > 
										<label>Ảnh món ăn</label><br><br>
										<input  type="file" name="anh" required="true">   
									</div>
									
									<div class="row" style="margin-bottom:40px">
										<div class="col-xs-8">
											<div class="form-group" >
												<label>Tên món ăn</label>
												<input type="text" name="name_sanpham" class="form-control" >
											</div>
											
											<div class="form-group" >
												<label>Thể loại</label>
												<select required name="theloai" class="form-control">
													@foreach ($TheLoai as $key)
													<option value="{{$key->id_theloai}}">{{$key->theloai}}</option>
													@endforeach	
												</select>	
											</div>	
											<div class="form-group" >
												<label>Giá</label>
												<input required type="text" name="gia" class="form-control" >
											</div>
											<div class="form-group" >
												<label>Tên địa điểm</label>
												<select required type="text" name="id_diadiem" class="form-control">
													@foreach ($DiaDiem as $key)
													<option value="{{$key->id_diadiem}}">{{$key->ten}}</option>
													@endforeach
												</select>
											</div>	
											<input type="submit" name="submit" value="Thêm" class="btn btn-primary">

										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>	<!--/.main-->
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
				});
				function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		    	var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
			$('#avatar').click(function(){
				$('#img').click();
			});
		});
	</script>	
</body>

</html>