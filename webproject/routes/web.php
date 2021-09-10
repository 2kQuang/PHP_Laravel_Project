<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('top','trangchu@danhsach');
Route:: get ('monan','trangchu@monan');
Route::post('Monan/TimKiem','ControllerMonan@TimKiemSanPham');
Route::get ('monan/{id_theloai}','ControllerMonan@theloai');



Route::get('trangchu','ControllerTOP@toptop')->name('trangchu');

Route::get('chitiet','Chitietmonan@chitiet');



Route::get('chitietdiadiem/{id_diadiem}','ControllerDiaDiem@ChiTietDiaDiem');





Route::get('gioithieu',function () {
    return view('GIOITHIEU');}
);

//goi trang dang nhap
Route::get('DangNhap','DangNhapController@GetDangNhap')->name('DangNhap');
Route::post('DangNhap','DangNhapController@PostDangNhap');

Route::get("DangKy","DangNhapController@GetDangKy")->name('DangKy');
Route::post("DangKy","DangNhapController@PostDangKy");

Route::get('DangXuat','DangNhapController@DangXuat');

// Route::get('NhapThongTin','DangNhapController@GetNhapThongTin')->name('NhapThongTin');
// Route::post('NhapThongTin','DangNhapController@PostNhapThongTin');

Route::get('DangKy',function(){
	return view('DangNhap.DangKy');}
);


//admin
Route::get('admin',function(){
	return view('Admim.index');}
);
Route::get('DanhSach',function(){
	return view('Admim.TaiKhoan');}
);
//dia diem
Route::get('DSDiaDiem','ControllerDanhSachDiaDiem@DanhSachDiaDiem')->name('DSDiaDiem');
Route::get('ThemDiaDiem','ControllerDanhSachDiaDiem@ThemDiaDiem');
Route::post('ThemDiaDiem','ControllerDanhSachDiaDiem@PostThem');
Route::get('DSDiaDiem/SuaDiaDiem/{id_diadiem}','ControllerDanhSachDiaDiem@GetSuaDiaDiem');
Route::post('DSDiaDiem/SuaDiaDiem','ControllerDanhSachDiaDiem@PostSuaDiaDiem');
Route::get('DSDiaDiem/XoaDiaDiem/{id_diadiem}','ControllerDanhSachDiaDiem@GetXoaDiaDiem');

//mon an
Route::get('DSMonAn','ControllerDanhSachMonAn@DanhSachMonAn');
Route::get('ThemMonAn','ControllerDanhSachMonAn@ThemMonAn');
Route::post('ThemMonAn	','ControllerDanhSachMonAn@PostThem');

Route::get('DSMonAn/SuaMonAn/{id_sanpham}','ControllerDanhSachMonAn@GetSuaMonAn');
Route::post('DSMonAn/SuaMonAn','ControllerDanhSachMonAn@PostSuaMonAn');

Route::get('DSMonAn/XoaMonAn/{id_sanpham}','ControllerDanhSachMonAn@GetXoaMonAn');

//tai khoan
Route::get('DanhSach','TaiKhoanController@GetDanhSach');

Route::get('Them','TaiKhoanController@GetThem');
Route::post('Them','TaiKhoanController@PostThem');

Route::get('Sua/{id_taikhoan}','TaiKhoanController@GetSua');
Route::post('Sua/{id_taikhoan}','TaiKhoanController@PostSua');

Route::get('Xoa/{taikhoan}','TaiKhoanController@GetXoa');
//quan lý đơn đặt
Route::get('QuanLyDon',function(){
	return view('Admim.QuanLyDon');}
);
Route::get('QuanLyDon','ControllerQuanLyDon@GetDanhSach');