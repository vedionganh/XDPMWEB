<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
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
    public function search(Request $request)
    {
        $timkiem=$request->search;
        $timthay=DB::table('product')->where('ten','like','%'.$timkiem.'%')->get();
        Session::put('ten',$timthay);
         return view('pages.sanpham.timkiem')->with('tim', $timthay);
    }
    public function Loginfb()
    {
        return Socialite::driver('facebook')->redirect();
    }
   public function callfacebook(Request $request)
    {
        $fbuser= Socialite::driver('facebook')->user();
        $ttuser=DB::table('khachhang')->where('fb_id',$fbuser->id)->first();
        if(!$ttuser)
        {
        $data=array();
        $data['tenkh']=$fbuser->name;
        $data['email']=$fbuser->email;
        $data['fb_id']=$fbuser->id;
        $khachhang_id=DB::table('khachhang')->insertGetId($data);
            Session::put('khachhang_id',$khachhang_id);
        Session::put('tenkh',$fbuser->name);
        }
        $id=$fbuser->id;

        $result=DB::table('khachhang')->where('fb_id',$id)->first();
        if($result){
        Session::put('khachhang_id',$result->khachhang_id);
        Session::put('tenkh',$result->tenkh);
        return redirect::to('/');
         }else
         {
             return redirect::to('/lo-gin');
         }

    }
    public function Logingg()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callgoogle(Request $request)
    {
        $gguser = Socialite::driver('google')->user();
         $ttuser=DB::table('khachhang')->where('gg_id',$gguser->id)->first();

        if(!$ttuser)
        {
        $data=array();
        $data['tenkh']=$gguser->name;
        $data['email']=$gguser->email;
        $data['gg_id']=$gguser->id;
        $khachhang_id=DB::table('khachhang')->insertGetId($data);
            Session::put('khachhang_id',$khachhang_id);
        Session::put('tenkh',$gguser->name);
        }
        $id=$gguser->id;

        $result=DB::table('khachhang')->where('gg_id',$id)->first();
        if($result){
        Session::put('khachhang_id',$result->khachhang_id);
        Session::put('tenkh',$result->tenkh);
        return redirect::to('/');
         }else
         {
             return redirect::to('/lo-gin');
         }


    }


}
