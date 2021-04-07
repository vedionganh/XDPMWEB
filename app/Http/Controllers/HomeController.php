<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
          $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();
           $newproduct=DB::table('product')->where('status','1')->orderby('product_id','desc')->limit(8)->get();
          $allproduct=DB::table('product')->where('status','0')->orderby('product_id','desc')->limit(4)->get();
          $tatca_sp=DB::table('product')->paginate(8);

        return view('pages.home')->with('category', $cate_product)->with('all_product', $allproduct)->with('tatca', $tatca_sp)->with('new_sp', $newproduct);
    }
}
