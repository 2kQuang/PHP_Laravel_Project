<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\User;
use App\TaiKhoanMD;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;


class ControllerQuanLyDon extends Controller
{
    //
  public function GetDanhSach()
  {
    $TaiKhoan = DB::select('SELECT * FROM taikhoan');
    return view('Admim.QuanLyDon',['QuanLyDon' => $TaiKhoan]);
  }
}
