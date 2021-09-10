<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông Tin Người Dùng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('CSS/style.css')}}">
</head>
<body>
	
    <div class="registration-form">
        <form action="{{ url('NhapThongTin')}}" method="post">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
            	@if(count($errors)>0)
            	<div class="alert alert-danger">
            		@foreach ($errors->all() as $err ):
            		{{$err}}<br>
            		@endforeach
            	</div>
            	@endif
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Họ và tên" name="tennv">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Địa chỉ" name="diachi">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" id="username" placeholder="Số điện thoại" name="sdt"  maxlength="10">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Giới tính" name="gioitinh">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Địa chỉ giao hàng" name="diachigh">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Create Account</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="{{ asset('JS/script.js') }}"></script>
</body>
</html>
