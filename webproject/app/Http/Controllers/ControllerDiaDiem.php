<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Illuminate\Support\Facades\DB;

class ControllerDiaDiem extends Controller
{
    //
    public function ChiTietDiaDiem($id_diadiem)
    {
    
    	$DiaDiem =DB::select('SELECT * FROM `diadiem` WHERE id_diadiem ='."'$id_diadiem'" );
    	$SanPham = DB::select('SELECT * FROM sanPham WHERE id_diadiem ='."'$id_diadiem'" );

    	return view ('CHITIETDIADIEM',['DiaDiem' => $DiaDiem, 'SanPham'=>$SanPham]);

    } 

}
