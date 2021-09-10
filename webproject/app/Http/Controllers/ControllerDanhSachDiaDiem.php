<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ControllerDanhSachDiaDiem extends Controller
{

  public function DanhSachDiaDiem()
  { 
     // if( empty(Session::get('Admin')) )
     //     return redirect()->route('DangNhap'); 
     $DSDiaDiem = DB::select('SELECT id_diadiem,id_theloai,ten,diachi,vung,lienhe,open,close,avt_diadiem,danhgia,SUBSTRING(bando, 1, 50) AS bando FROM diadiem');

     return View('Admim.DiaDiem',['DiaDiem'=>$DSDiaDiem]);
   
 } 
    //Thêm
 public function ThemDiaDiem()
 {

  {
    $DSDiaDiem = DB::select('SELECT * FROM diadiem');

    return View('Admim.ThemDiaDiem',['ThemDiaDiem'=>$DSDiaDiem]);
  } 
} 
public function PostThem(request $request)
{ 
    // if( empty(Session::get('Admin')) )
    //      return redirect()->route('DangNhap'); 
  $TenAnh;
      
  if ($request->hasFile('anh')) 
  {
          //
    $TenAnh = $request->file('anh')->getClientOriginalName();
          //
          //$file->move('ANHDD', $request->file('anh')->getClientOriginalName());
    $request->file('anh')->move('ANHDD',$TenAnh);

    DB::table('diadiem')->insert(
      [   
        'ten' => $request->ten,
        'id_theloai'=>$request->theloai,
        'avt_diadiem'=>$TenAnh,
        'danhgia'=>4,  
        'diachi' => $request->diachi,
        'vung' => $request->vung,
        'lienhe'=>$request->lienhe,
        'open'=>"12:00:00",
        'close'=>"17:00:00",
        'bando' => $request->bando]
      );

  }
  
  return redirect('DSDiaDiem')->with('thongbao','Thêm Địa Điểm '.$request->ten.' Thành Công'); 

}
    //Sửa
public function GetSuaDiaDiem($id_diadiem)
{
  // if( empty(Session::get('Admin')) )
  //           return redirect()->route('DangNhap');
   $DSDiaDiem = DB::select('SELECT * FROM diadiem 
                WHERE id_diadiem = '."'$id_diadiem'");

  return View('Admim.SuaDiaDiem',['DSDiaDiem'=>$DSDiaDiem]);
}
 

public function PostSuaDiaDiem(request $request)
{
        // if( empty(Session::get('Admin')) )
        //     return redirect()->route('DangNhap');

  DB::table('diadiem')
  ->where('id_diadiem',$request->id_diadiem)
  ->update([   

    'ten' => $request->ten,
    'danhgia'=>4,  
    'id_theloai'=>$request->theloai,
    'avt_diadiem'=>$request->avt_diadiem, 
    'diachi' => $request->diachi,
    'vung' => $request->vung,
    'lienhe'=>$request->lienhe,
    'open'=>"12:00:00",
    'close'=>"17:00:00",
    'bando' =>$request->bando]
  );
  return redirect('DSDiaDiem')->with('thongbao','Sửa Địa Điểm '.$request->ten.' Thành Công'); 
}
public function GetXoaDiaDiem($id_diadiem)
    {
         // if( empty(Session::get('Admin')) )
         //    return redirect()->route('DangNhap');

       DB::table('sanpham')
        ->where('id_diadiem' , '=', $id_diadiem)
        ->delete();

        DB::table('diadiem')
        ->where('id_diadiem' , '=', $id_diadiem)
        ->delete();

        return redirect('DSDiaDiem')
            ->with('thongbao','Đã Xóa Thành Công');


    }
}
