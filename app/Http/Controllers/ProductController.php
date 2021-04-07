<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function Checklogin()
    {
        $id=Session::get('id');
        if($id)
        {
            return redirect::to('dashboard');
        }else
        {
            return redirect::to('admin')->send();
        }
    }
    public function addproduct()
    {
        $this->Checklogin();
        $cate_product=DB::table('category')->orderby('danhmuc_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product);

    }
    public function allproduct()
    {
        $this->Checklogin();
        $allproduct=DB::table('product')->join('category','product.danhmuc_id','=','category.danhmuc_id')
        ->orderby('product_id','desc')->get();
        $quanli=view('admin.all_product')->with('all_product',$allproduct);
        return view('admin_welcome')->with('admin.all_product',$quanli);

    }
    public function saveproduct(Request $request)
    {
        $this->Checklogin();
        $data=array();
        $data['danhmuc_id']=$request->danhmuc;
        $data['ten']=$request->tensanpham;
        $data['mota']=$request->mota;
        $data['gia']=$request->gia;
        $get_image=$request->file('hinh');
        $data['status']=$request->trangthai;
        if($get_image)
        {
            $get_name_h=$get_image->getClientOriginalExtension();
            $name_hinh=current(explode('.',$get_name_h));
            $newhinh= $get_name_h.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/sanpham',$newhinh);
            $data['hinh']=$newhinh;
            DB::table('product')->insert($data);
            Session::put('message','Happy success!!!');
            return redirect::to('/all-product' );
        }
        $data['hinh']='';


        DB::table('product')->insert($data);
        Session::put('message','Happy success!!!');
        return redirect::to('/add-product' );

    }
    public function active_product($product_id)
    {
        $this->Checklogin();
        DB::table('product')->where('product_id',$product_id)->update(['status'=>1]);

        Session::put('message','kích hoạt sản phẩm thành công');
        return redirect::to('all-product' );
    }
    public function notactive_product($product_id)
    {
      DB::table('product')->where('product_id',$product_id)->update(['status'=>0]);
      Session::put('message','Không kích hoạt sản phẩm thành công');
      return redirect::to('all-product' );
  }
  public function editproduct($product_id)
  {
    $cate_product=DB::table('category')->orderby('danhmuc_id','desc')->get();
    $editproduct=DB::table('product')->where('product_id',$product_id)->get();
    $quanli=view('admin.edit_product')->with('edit_product',$editproduct)->with('cate_product',$cate_product);;
    return view('admin_welcome')->with('admin.edit_product',$quanli);
}
public function updateproduct(Request $request, $product_id)
{
    $this->Checklogin();
    $data=array();
    $data['danhmuc_id']=$request->danhmuc;
    $data['ten']=$request->tensanpham;
    $data['mota']=$request->mota;
    $data['gia']=$request->gia;

    $get_image=$request->file('hinh');
    if($get_image)
    {
        $get_name_h=$get_image->getClientOriginalExtension();
        $name_hinh=current(explode('.',$get_name_h));
        $newhinh= $get_name_h.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/sanpham',$newhinh);
        $data['hinh']=$newhinh;
        DB::table('product')->where('product_id',$product_id)->update($data);
        Session::put('message','Happy success!!!');
        return redirect::to('/all-product' );
    }
    DB::table('product')->where('product_id',$product_id)->update($data);
    Session::put('message','Happy success!!!');
    return redirect::to('/all-product' );
}
public function deleteproduct($product_id)
{
    $this->Checklogin();

    DB::table('product')->where('product_id',$product_id)->delete();
    Session::put('message','delete success!!!');
    return redirect::to('/all-product' );
}
/*--------------------------------------------*/
public function chitietsp($product_id)
{

    $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();

    $dtproduct=DB::table('product')->join('category','product.danhmuc_id','=','category.danhmuc_id')
    ->where('product.product_id',$product_id)->get();



    foreach($dtproduct as $key => $value){
          $danhmuc_id=$value->danhmuc_id;
    }

    $splienquan=DB::table('product')->join('category','product.danhmuc_id','=','category.danhmuc_id')
    ->where('category.danhmuc_id',$danhmuc_id)->whereNotIn('product.product_id',[$product_id])->limit(4)->get();
    return view('pages.sanpham.show_details')->with('category', $cate_product)->with('chi_tiet', $dtproduct)->with('splq', $splienquan);
}
}
