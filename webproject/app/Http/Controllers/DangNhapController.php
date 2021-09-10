<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Session;
use Illuminate\Support\Facades\DB;

class DangnhapController  extends Controller
{

	public function GetDangNhap()
	{
		return view('DangNhap.DangNhap');
	}
	public function PostDangNhap(Request $request)
	{
      //bat loi


    //echo 'fgadfgahgfhahg';
		$KiemTraSP = DB::table('taikhoan')
		->where('taikhoan', '=', $request->name)
		->where('matkhau', '=', $request->password)
		->first();

		$TaiKhoan = $request->name;
		$MatKhau = $request->password;

    if (is_null($KiemTraSP)) //kiem tra xem ton tai hay chua
    {
				//SP chua ton tai
    	echo "sai mat khau";
    } 
    else 
    {
		//SP da ton tai 
    	echo "đăng nhập thành công ";
    	$ThongTin = DB::select('SELECT *
								FROM taikhoan
								WHERE taikhoan = '."'$TaiKhoan'");

    	foreach ($ThongTin as $key)
        {
            $MaNV = $key->id_taikhoan ;
            $TenNV = $key->ten;
            $SDT = $key->sdt;
            $DiaChi = $key->diachi;
            $Vung = $key->vung;
            $Quyen = $key->quyen;
        }
        //ad 0
        //ng thuong 1
        //nhahang 2
        //ngu3
        if ( strcmp($Quyen, 0) == 0 ) {
            Session::put('MaNVSS', $MaNV);
            Session::put('TenNVSS', $TenNV);
            return View('Admim.index'); 
        }
        if ( strcmp($Quyen, 1) == 0 ) {
            //echo "nguoithuong";
            Session::put('MaNVSS', $MaNV);
            Session::put('TenNVSS', $TenNV);
            return redirect()->route('trangchu');
        }
        if ( strcmp($Quyen, 2) == 0 ) {
            Session::put('MaNVSS', $MaNV);
            Session::put('TenNVSS', $TenNV);
              return redirect()->route('DSDiaDiem');
              
        }     
	
    }
}
    public function GetDangKy()
   {
    return view('DangNhap.DangKy');
   }
    public function DangXuat()
    {
      //xoa het session
      Session()->flush();
      return redirect()->route('trangchu');
    }
}

  