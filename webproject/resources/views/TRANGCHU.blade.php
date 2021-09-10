

<!DOCTYPE html>
<html>

<head>
	<title>Trang chủ</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="CSS/w3.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TRANGCHU1.css') }}">
	<style>
		.mySlides {display:none;}
	</style>

</head>
<body>
	<div class="w3-content w3-section">
		<img class="mySlides" src="{{ asset('ANHTRANGCHU/1.jpg') }}" >
		<img class="mySlides" src="{{ asset('ANHTRANGCHU/2.jpg') }}" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	</div>
	<div id="Q">
		<h2>
			<bdi>Địa Điểm Mới</bdi>
		</h2>
		<h1 class="e">
			<bdi>ĐỊA ĐIỂM NỔI BẬT</bdi>
		</h1>

		<div class="danhsach">
			<ul>
				@foreach ($user as $key)
				<li>
					<a href="chitietdiadiem/{{$key->id_diadiem}}">
					<img src="{{ URL::asset('ANHDD/'.$key->avt_diadiem) }}">
					{{$key->ten}}<br>
					<span>Địa chỉ: {{$key->diachi}}</span>
					<span>SDT: {{$key->lienhe}}</span>
					<span><h6 class="b">Danh gia:{{$key->danhgia}}</h6></span>
					</a>
				</li>

				@endforeach
				

			</ul>
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
				setTimeout(carousel, 1500); 
			}
		</script>
	</body>
	</html>
