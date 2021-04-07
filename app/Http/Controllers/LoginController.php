<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use Cart;
class LoginController extends Controller
{
    public function xem($orderid)
    {
         $dathang=DB::table('order')->join('khachhang','order.khachhang_id','=','khachhang.khachhang_id')
         ->join('thanhtoan','order.thanhtoan_id','=','thanhtoan.thanhtoan_id')
         ->join('chitietorder','order.order_id','=','chitietorder.order_id')
        ->select('order.*','khachhang.*','thanhtoan.*','chitietorder.*')
        -> where('order.order_id',$orderid)->get();

        $quanlidathang = view('admin.xem_order')->with('dat_hang',$dathang);
        return view('admin_welcome')->with('admin.xem_order',$quanlidathang);
        /*return view('admin.xem_order');
*/    }
    public function login()
    {
         $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();



        return view('pages.Thanhtoan.login_check')->with('category', $cate_product);

    }
    public function dangkikh(Request $request){
        $data=array();
        $data['tenkh']=$request->tenkh;
        $data['email']=$request->em;
        $data['matkhau']=md5($request->mk);
        $data['sdt']=$request->ph;
        $khachhang_id=DB::table('khachhang')->insertGetId($data);
        Session::put('khachhang_id',$khachhang_id);
         Session::put('tenkh',$request->tenkh);
        /* session()->put('khachhang__id', $khachhang_id);
         session()->put('tenkh', $request->tenkh);*/

        return redirect::to('/thanh-toan');
    }

    public function thanhtoan(){

         $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();
        return view('pages.Thanhtoan.thanhtoan')->with('category', $cate_product);

    }
    public function luuthanhtoan(Request $request)
    {
        $data=array();
        $data['ten_ttkh']=$request->ten_ttkh;
        $data['email_ttkh']=$request->email_ttkh;
        $data['diachi']=$request->diachi;
        $data['sdt_ttkh']=$request->sdt_ttkh;
        $data['ghichu']=$request->ghichu;
        /*$ttkh_id =DB::table('ttkh')->insertGetId($data);
        session::put('ttkh_id',$ttkh_id);*/
        $shipping_id = DB::table('ttkh')->insertGetId($data);

        Session::put('ttkh_id',$shipping_id);



       /* Session::put('ttkh_id',$request->ttkh_id);*/


        return redirect::to('/chonthanhtoan');
    }
    public function chonthanhtoan()
    {
        $cate_product=DB::table('category')->where('trangthai','0')->orderby('danhmuc_id','desc')->get();

         return view('pages.Thanhtoan.payment')->with('category', $cate_product);
    }
    public function hoantat(Request $request)
    {////////////

        $data=array();
        $data['phuongthuc']=$request->chon;
        $data['kichhoat']='dang xu li';
         $data['ten_ttkh']=$request->ten_ttkh;
        $data['email_ttkh']=$request->email_ttkh;
        $data['diachi']=$request->diachi;
        $data['sdt_ttkh']=$request->sdt_ttkh;
        $data['ghichu']=$request->ghichu;
        $thanhtoan_id=DB::table('thanhtoan')->insertGetId($data);
     //////////////////
        $order_data=array();
        $order_data['khachhang_id']=Session::get('khachhang_id');
        /*$order_data['ttkh_id']=Session::get('ttkh_id');*/
        $order_data['thanhtoan_id']=$thanhtoan_id;
        $order_data['tienorder']=Cart::total();
        $order_data['tinhtrang']='dang xu li';
        $order_id=DB::table('order')->insertGetId($order_data);
        ////////////////////////////
        $content=cart::content();
        foreach ($content as $value) {
        $orderdt_data=array();
        $orderdt_data['order_id']=$order_id;
        $orderdt_data['product_id']=$value->id;
        $orderdt_data['ten']=$value->name;
         $orderdt_data['soluong']=$value->qty;
        $orderdt_data['gia']=$value->price;

        $result=DB::table('chitietorder')->insert($orderdt_data);
        }
        ///////
        if($data['phuongthuc']==1)
        {
            cart::destroy();
            return view('pages.Thanhtoan.tienmat');
        }else{
            echo 'Chua thuc hien';
        }

       /* return redirect::to('/chonthanhtoan');*/
    }

     public function dangnhapkh(Request $request)

    {
        $email=$request->taikhoan;
        $matkhau=md5($request->matkhau);
        $result=DB::table('khachhang')->where('email',$email)->where('matkhau',$matkhau)->first();


        if($result){
            Session::put('khachhang_id',$result->khachhang_id);
        return redirect::to('/thanh-toan');
         }else
         {
             return redirect::to('/lo-gin');
         }

    }
    public function quanlidh()
    {

        $allorder=DB::table('order')->join('khachhang','order.khachhang_id','=','khachhang.khachhang_id')
        ->select('order.*','khachhang.tenkh')
        ->orderby('order.order_id','desc')->get();
        $quanlidonhang = view('admin.quanlidonhang')->with('all_order',$allorder);
        return view('admin_welcome')->with('admin.all_order',$quanlidonhang);
        /*return view('admin.quanlidonhang');*/
    }

    public function logout()
    {
        Session::flush();
        return redirect::to('/lo-gin');
    }
}
