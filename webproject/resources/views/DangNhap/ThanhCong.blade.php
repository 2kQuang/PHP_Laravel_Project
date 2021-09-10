@if(Auth::guard('TaiKhoanMD')->check())//kiem tra nguoi dung dang nhap
	<h1>Đăng nhập thành công</h1>
	@if(isset($user))//in thong tin ng dung
		{{ "taikhaon: ".$user->taikhoan}}<br>
		{{ "matkhau: ".$user->password}}<br>
	@endif
	<a href="{{ url('DangXuat') }}">Đăng xuất</a>
@else
	<h1>Chưa Đăng nhập</h1>
	<h1>return view('DangNhap.DangNhap');</h1>
@endif
<h1>{{var_dump($qq)}}</h1>