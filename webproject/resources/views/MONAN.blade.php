	@extends('master')
	@section('menu')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/SANPHAM.css') }}">
	<link rel="stylesheet" href="CSS/w3.css">


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		
		body{
			background-color: #fff;
		}

		.w3-sidebar w3-collapse w3-white w3-animate-left{
			background-color: #CA7474;
		}

		.w3-bar-block {
			color: #630118;
		}

		body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
	</style>


	<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <h4><b>THỂ LOẠI</b></h4>
  </div>
  <div class="w3-bar-block">
  	@foreach ($theloai as $key)
			
			<a class="w3-bar-item w3-button w3-padding w3-text-teal"  href="{{URL::to('monan/'.$key->id_theloai)}}" >{{$key->theloai}}</a>
					
			@endforeach
  	
    
   
  </div>
  <div class="w3-container">
    <h4><b>TOP ĐỊA ĐIỂM</b></h4>
  </div>
  <div class="w3-bar-block">
  	
	@foreach ($SX as $key)
	<a class="w3-bar-item w3-button w3-padding w3-text-teal" href="chitietdiadiem/{{$key->id_diadiem}}">
		<img align="left" src="{{ URL::asset('ANHDD/'.$key->avt_diadiem) }}" style="width: 50%; height: 50%; object-fit: cover; margin-right: 5px">
		<p id="ten_monan">{{$key->ten}}</p>
		<p id="danhgia">{{$key->vung}}</p>
	
	</a>
	@endforeach
			
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Địa điểm</b></h1>
    </div>
  </header>

  <div class="w3-row-padding">
  	@foreach ($SanPham as $key)
  	<a href="chitietdiadiem/{{$key->id_diadiem}}">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="{{ URL::asset('ANHDD/'.$key->avt_diadiem) }}" alt="Norway" style="width:100%; height: 200px;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
					
        <p><b>Quán: {{$key->ten}}</b></p>
        <p><b>Địa chỉ</b>: {{$key->diachi}}</p>
        <p><b>Liên hệ:</b> {{$key->lienhe}}</p>
        <!-- <p><b>Đánh Giá:</b><b style="color: red; font-size: 18px"> {{$key->danhgia}}</b></p> -->
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
</div>
@endsection