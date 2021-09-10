<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerTOP extends Controller
{
   public function toptop()
   {
   		$users = DB::select('SELECT ten, avt_diadiem,danhgia, id_diadiem, diachi,lienhe FROM diadiem ORDER BY RAND() LIMIT 12');
    
    	return View('TOP',['user'=>$users]);
   
   } 

}
