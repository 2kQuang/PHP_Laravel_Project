<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMonan extends Controller
{
    public function monan()
   {
   		$sanpham = DB::select('SELECT* FROM sanpham');
   		
    	return View('MONAN',['sanpham'=>$sanpham]);
	   
   } 
   public function TimKiemSanPham(Request $request)
   {
   	 	$TheLoai = DB::select('SELECT * FROM theloai');
   	 	$SX = DB::select('SELECT ten, avt_diadiem, vung, id_diadiem FROM diadiem ORDER BY RAND()
			LIMIT 5');
      $SanPham = DB::select(' SELECT avt_diadiem ,DD.ten ,DD.vung,DD.danhgia, id_diadiem, lienhe, diachi
                FROM diadiem DD 
                WHERE ten LIKE N'."'%$request->TimKiem%'");

      $DD= DB::select('SELECT ten, avt_diadiem,danhgia, id_diadiem, diachi,lienhe FROM diadiem ');
      
             return view('MONAN',['SanPham' => $SanPham ,'SX'=>$SX,'theloai'=>$TheLoai,'DD'=>$DD]);
   }
   public function theloai($id_theloai)
   {
      $TheLoai = DB::select('SELECT * FROM theloai');
      $SX = DB::select('SELECT ten, avt_diadiem, vung, id_diadiem FROM diadiem ORDER BY RAND()
      LIMIT 5');
      $SanPham = DB::select('SELECT avt_diadiem ,DD.ten ,DD.vung,DD.danhgia, id_diadiem, lienhe, diachi
                FROM diadiem DD
                WHERE id_theloai ='."'$id_theloai'");
      
        return view('MONAN',['SanPham' => $SanPham ,'SX'=>$SX,'theloai'=>$TheLoai]);
   }
 
 } 
