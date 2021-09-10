<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ControllerDanhSachMonAn extends Controller
{

  public function DanhSachMonAn()
  {
     // if( empty(Session::get('Admin')) )
     //     return redirect()->route('DangNhap');
       
    $DSMonAn = DB::select('SELECT DD.id_diadiem, DD.ten, DD.diachi,DD.avt_diadiem, SP.id_sanpham, SP.name_sanpham,SP.id_theloai, SP.gia, SP.avt_sanpham,SP.id_diadiem
      FROM diadiem DD
      LEFT JOIN sanpham SP
      ON DD.id_diadiem = SP.id_diadiem');

    return View('Admim.MonAn',['DSMonAn'=>$DSMonAn]); 
} 
    //Thêm
public function ThemMonAn()
{
 {

  $DiaDiem = DB::select('SELECT DISTINCT id_diadiem, ten FROM diadiem');
  $TheLoai = DB::select('SELECT DISTINCT * FROM theloai');
  return View('Admim.ThemMonAn',['TheLoai'=>$TheLoai], ['DiaDiem'=>$DiaDiem]);

} 
}
public function PostThem(request $request)
{
   // if( empty(Session::get('Admin')) )
   //       return redirect()->route('DangNhap'); 
  $TenAnh;
       
  if ($request->hasFile('anh')) 
  {
          //
    $TenAnh = $request->file('anh')->getClientOriginalName();

    $request->file('anh')->move('ANHSP',$TenAnh);

    DB::table('sanpham')->insert(
      [   
        'avt_sanpham'=> $TenAnh,
        'name_sanpham' => $request->name_sanpham,
        'id_theloai'=>$request->theloai,
        'gia'=>$request->gia,
        'id_diadiem'=>$request->id_diadiem
      ]  
    );
    
    return redirect('DSMonAn')->with('thongbao','Thêm Món ăn '.$request->name_sanpham.' Thành Công'); 
    
  }
  else
    echo "k thanh cong";
}

//sua mon an
public function GetSuaMonAn($id_sanpham)
{
  if( empty(Session::get('Admin')) )
         return redirect()->route('DangNhap'); 
  $DiaDiem = DB::select('SELECT DISTINCT id_diadiem, ten FROM diadiem');
  $TheLoai = DB::select('SELECT DISTINCT * FROM theloai');
  $SanPham = DB::select('SELECT * FROM sanpham WHERE id_sanpham ='."'$id_sanpham'");
  return View('Admim.SuaMonAn')
          ->with([
            'DiaDiem' => $DiaDiem,
            'TheLoai' => $TheLoai,
            'SanPham' => $SanPham
          ]);
  //return $SanPham;
 
}


public function PostSuaMonAn(request $request)
{
        // if( empty(Session::get('Admin')) )
        //     return redirect()->route('DangNhap');

  DB::table('sanpham')
  ->where('id_sanpham',$request->id_sanpham)
  ->update([   

   'name_sanpham' => $request->name_sanpham,
   'id_theloai'=>$request->theloai,
   'gia'=>$request->gia,
   'id_diadiem'=>$request->id_diadiem]
 );
  return redirect('DSMonAn')->with('thongbao','Sửa món ăn '.$request->name_sanpham.' Thành Công'); 
}
//xoa mon an
public function GetXoaMonAn($id_diadiem)
{   
   if( empty(Session::get('Admin')) )
         return redirect()->route('DangNhap'); 
        // $TaiKhoan = DB::table('diadiem')
        //     ->where('id_diadiem', $manv)
        //     ->update(['' => '0']);
 DB::table('sanpham')
 ->where('id_diadiem' , '=', $id_diadiem)
 ->delete();

 DB::table('diadiem')
 ->where('id_diadiem' , '=', $id_diadiem)
 ->delete();

 return redirect('DSMonAn')
 ->with('thongbao','Đã Xóa Thành Công');


}
}