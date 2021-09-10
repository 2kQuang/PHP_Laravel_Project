@extends('master')
@section('menu')
<!DOCTYPE html>
<html>
<head>
	<title>Chi tiet</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/CHITIETDD.css') }}">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script>
		if ( window.history.replaceState ) 
		{
			window.history.replaceState( null, null, window.location.href );
		}
	</script>

	<style type="text/css">
		body {
			background-color: #fff;
		}
	</style>

</head>
<body>
	<div id="Sach1">
		@foreach ($DiaDiem as $key)
		<div id="ThongTin">
			<div class="Anh">
				<img src="{{ URL::asset('ANHDD/'.$key->avt_diadiem) }}" alt="Pineapple" >
			</div>
			<div id="Q">
				<h1 class="e">
					<bdi>
						{{$key->ten}}
					</bdi>
				</h1>
				<div class="Gia">
					<label id="GiaBan"><b>Địa Chỉ</b>: {{$key->diachi}}</label><label></label><br>
					<label id="GiaBan"><b>Liên hệ</b>:+ {{$key->lienhe}}</label><label></label>
					<div id="TinhTrang">
					<label id="TinhTrang1"><b>Giờ mở cửa<b> : <label id="TinhTrang2">{{$key->open}} - {{$key->close}}</label>  </label>
					

				</div>
				</div>
				
				<div class="widget-box">
				<ul class="menu-list" >
					<li style="width: 80px; height: 100px;  text-align: center; padding: 0px;"><a href="#">Đánh giá tích cực</a><b>
								90%
					</b></li>
					<li style="width: 80px;height: 100px;  text-align: center;"><a href="#">Tỷ lệ phản hồi: </a><b>100%<b></li>
					
					<li style="width: 80px;height: 100px;  text-align: center;"><a href="#">Uy tín chất lượng  </a><b> 95%</b></li>

					
				</ul>
			</div>
			</div>

		@endforeach	
		</div>
		@foreach ($DiaDiem as $key)
		<div id="BaoHanh">
			{!!html_entity_decode($key->bando)!!}
		</div>
		@endforeach	
	</div>
</div>


<br>
<div id="Sach4">
	<h1 id="ChiTiet1"><h1>Món Ăn</h1>
	<div class="w3-row-padding">
		@foreach ($SanPham as $key)
			<div class="w3-third w3-container w3-margin-bottom">
			  <img src="{{ URL::asset('ANHSP/'.$key->avt_sanpham) }}" alt="Norway" style="width:100%; height: 250px; object-fit: cover;" class="w3-hover-opacity">
			  <div class="w3-container w3-white">
			    <p><b><h3>{{$key->name_sanpham}}</h3></b></p>
			    <p><b>Giá::</b><b style="color: red; font-size: 18px"> {{$key->gia}} đ</b></p>
			  </div>
			</div>
			
		@endforeach
	</div>
</body>
</html>
@endsection