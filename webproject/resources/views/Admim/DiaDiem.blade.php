<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Địa điểm</title>
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
		
	<<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li>
				
			</li>
			<li class="active">
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
				<h1 class="page-header">Địa Điểm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách địa điểm</div>
					@if(session('thongbao'))
										{{session('thongbao')}}
									@endif
									@if(count($errors)>0)
										<div class="alert alert-danger">
											@foreach ($errors->all() as $err ):
											<h2>{{$err}}</h2><br>
											@endforeach
										</div>
									@endif
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="ThemDiaDiem" class="btn btn-primary">Thêm địa điểm</a>
								<table class="table table-bordered" style="margin-top:20px;">			
									<thead>
										<tr class="bg-primary">
											<th>Ảnh địa điểm</th>
											<th style="display:none;">Tên Ảnh</th>
											<th style="display:none;">id_diadiem</th>
											<th>Tên Địa điểm</th>
											<th>Id_theloai</th>
											<th>Địa Chỉ</th>
											<th>Vùng</th>
											<th>Liên Hệ</th>
											<th> Giờ mở cửa</th>
											<th>Gio đóng cửa</th>
											<th width="100px" height="50%">Bản đồ</th>
											<th width="20%">Tùy Chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($DiaDiem as $key)
										<tr>
											<td>
												<img width="65px" src="{{ asset('/ANHDD/'.$key->avt_diadiem)}}" class="thumbnail">
											</td>
										
											<td style="display:none;">{{$key->id_diadiem}}</td>
											<td>{{$key->ten}}</td>
										
											
												@if (strcmp('3', $key->id_theloai) == 0)
							                    	<td>Nước uống</td>
							                    @elseif (strcmp('2', $key->id_theloai) == 0)
							                    	<td>Món ăn</td>
							                    	@else 
							                    		<td>Ăn vặt</td>
							                  	@endif
											<td>{{$key->diachi}}</td>
											<td>{{$key->vung}}</td>
											<td>{{$key->lienhe}}</td>
											<td>{{$key->open}}</td>
											<td>{{$key->close}}</td>
											<td width="100px">{{$key->bando}}</td>
												
											<td>
												<a href="DSDiaDiem/SuaDiaDiem/{{$key->id_diadiem}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="DSDiaDiem/XoaDiaDiem/{{$key->id_diadiem}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach	
									</tbody>
								</table>
							</div>
						</div>
						<div class="clearfix"></div>
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
		})
	</script>	
</body>

</html>
