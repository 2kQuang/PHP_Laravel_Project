<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\User;
use App\TaiKhoanMD;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;


class TaiKhoanController extends Controller
{
    //
  public function GetDanhSach()
  {
    $TaiKhoan = DB::select('SELECT * FROM taikhoan');
    return view('Admim.TaiKhoan',['TaiKhoan' => $TaiKhoan]);
  }
  public function GetThem()
  {
         // if( empty(Session::get('Admin')) )
         //    return redirect()->route('DangNhap');
   $TaiKhoan = DB::select('SELECT * FROM taikhoan');

   return view('Admim.ThemTaiKhoan');
 }
 public function PostThem(Request $request)
 {
         // if( empty(Session::get('Admin')) )
         //    return redirect()->route('DangNhap');
  DB::table('taikhoan')->insert(
    [   
      'taikhoan' => $request->taikhoan,
      'ten' => $request->ten,
      'matkhau'=>1,
      'sdt'=>$request->sdt,
      'trangthai'=>$request->trangthai,
      'quyen'=>$request->quyen
    ]  
  );

  return redirect('DanhSach')->with('thongbao','Thêm tài khoản '.$request->taikhoan.' thành công'); 
}
public function GetSua($taikhoan)
{


    $TaiKhoan = DB::select('SELECT * FROM taikhoan');
  return view('Admim.SuaTaiKhoan',['TaiKhoan' => $TaiKhoan]);
}
public function PostSua(request $request)
{


  DB::table('taikhoan')
  ->where('id_taikhoan', $id_taikhoan)
  ->update([
              'taikhoan' => $request->taikhoan,
              'matkhau'=>1,
              'sdt'=>$request->sdt,
              'trangthai'=>$request->trangthai,
              'quyen'=>$request->quyen 
  ]);

 return redirect('DanhSach')->with('thongbao','Sửa tài khoản '.$request->taikhoan.' thành công'); 
}
    public function GetXoa($taikhoan)

    {
         // if( empty(Session::get('Admin')) )
         //    return redirect()->route('DangNhap');

       DB::table('taikhoan')
        ->where('taikhoan' , '=', $taikhoan)
        ->delete();

        DB::table('taikhoan')
        ->where('taikhoan' , '=', $taikhoan)
        ->delete();

        return redirect('DanhSach')
            ->with('thongbao','Đã Xóa Thành Công');


    }
    
}
