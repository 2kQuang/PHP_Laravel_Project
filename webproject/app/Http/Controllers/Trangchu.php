<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Trangchu extends Controller
{
		
	public function monan()
	{
		$sanpham = DB::select('SELECT ten, avt_diadiem,danhgia, id_diadiem, diachi,lienhe,id_theloai,vung FROM diadiem');
		$SX = DB::select('SELECT ten, avt_diadiem, vung, id_diadiem FROM diadiem ORDER BY danhgia DESC
			LIMIT 5');
		$theloai = DB::select('SELECT id_theloai, theloai FROM theloai');

		return View('MONAN',['SanPham'=>$sanpham,'SX'=>$SX,'theloai'=>$theloai]);
	}

}
