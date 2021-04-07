<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function themgio(Request $request)
    {    $product_id=$request->product_id_hide;
        $soluong=$request->soluong;

        $info=DB::table('product')->where('product_id',$product_id)->first();
         $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();



        $data['id']=$info->product_id;
        $data['qty']=$soluong;
        $data['name']=$info->ten;
        $data['price']=$info->gia;
        $data['weight']='10';
        $data['options']['image']=$info->hinh;
        cart::add($data);


        return redirect::to('/hien-thi');

        /*return view('pages.cart.show_cart')->with('category', $cate_product);*/

    }
    public function hienthi()
    {
        $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();
        return view('pages.cart.show_cart')->with('category', $cate_product);

    }
     public function xoasp($rowId)
     {
        Cart::update($rowId,0);
        return redirect::to('/hien-thi');
     }
    public function capnhat(Request $request)
     {
        $rowId=$request->idrow;
        $sl=$request->sl;
        Cart::update($rowId,$sl);

        return redirect::to('/hien-thi');
     }
}

