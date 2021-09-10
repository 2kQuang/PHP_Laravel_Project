@extends('DangNhap.index')

@section('NoiDung')

<form action="{{ url('DangNhap')}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
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

  <div class="login__form">

    <div class="login__row">

      <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
        <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"></path>
      </svg>
      <input type="text" class="login__input name" placeholder="Tài Khoản" name="name">
    </div>

    <div class="login__row">
      <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
        <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"></path>
      </svg>
      <input type="password" class="login__input pass" placeholder="Mật Khẩu" name="password">
    </div>
    <button type="submit" class="login__submit">Đăng Nhập</button>
    <p class="login__signup">Bạn chưa có tài khoản ? &nbsp;<a href="{{ url('DangKy') }}">Đăng Ký</a></p>
  </div>
</form>

@endsection