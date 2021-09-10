<!-- 	@extends('master')
	@section('css')

	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="CSS/w3.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TRANGCHU1.css') }}">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
	</style>


	<style>
		.mySlides {display:none;}
	</style>-->

	@endsection
	@section('menu')

	 <div class="container">  
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="ANHTRANGCHU/1.jpg" alt=""  style="height: 50%; width:100%; ">
				</div>

				<div class="item">
					<img src="ANHTRANGCHU/4.png" alt="" style="height: 50%; width:100%; ">	
				</div>

				<div class="item">
					<img src="ANHTRANGCHU/3.jpg" alt="" style="height: 50%; width:100%; ">				
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="Q">
		<h2>
			<bdi>Địa Điểm Mới</bdi>
		</h2>
		<h1 class="e">
			<bdi>ĐỊA ĐIỂM NỔI BẬT</bdi>
		</h1>


		<div class="w3-row-padding">
			@foreach ($user as $key)
			<a href="chitietdiadiem/{{$key->id_diadiem}}">
				<div class="w3-third w3-container w3-margin-bottom">
					<img src="{{ URL::asset('ANHDD/'.$key->avt_diadiem) }}" alt="Norway" style="width:100%; height: 250px" class="w3-hover-opacity">
					<div class="w3-container w3-white">
						<p><b><h4>Quán: {{$key->ten}}</h4></b></p>
						<p>Địa chỉ: {{$key->diachi}}</p>
						<p>Liên hệ:{{$key->lienhe}}</p>
						
							 <p><b>Đánh Giá:</b><b style="color: red; font-size: 18px"> {{$key->danhgia}}</b></p>
						</div>
						 <p>
							<a href="" id="datHang" onclick="quest()"><button type="button" class="btn btn-danger">ĐẶT NGAY</button></a>
							<script>
								var datHang = document.getElementById("muaHang")
								function quest() {
									var check = confirm("Nhà hàng sẽ liên hệ bạn trong ít phút ");
									if (check == true) {
										datHang.href = "trangchu"
									}
								}
							</script></p>
					</div>

				</a>

				@endforeach
			</div>

			<script>
				var myIndex = 0;
				carousel();

				function carousel() 
				{
					var i;
					var x = document.getElementsByClassName("mySlides");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
					setTimeout(carousel, 2000); 
				}
			</script>
			@endsection
 -->