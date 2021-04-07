<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function Checklogin()
    {
        $id=Session::get('id');
        if($id)
        {
            return redirect::to('/dashboard');
        }else
        {
            return redirect::to('/admin')->send();
        }
    }
    public function index()
    {
        return view('admin_login');
    }
    public function show()
    {
        $this->Checklogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {$this->Checklogin();
        $email=$request->email;
        $matkhau=md5($request->matkhau);

        $result=DB::table('tbl_admin')->where('email',$email)->where('matkhau',$matkhau)->first();
        if($result)
        {
            Session::put('ten',$result->ten);
            Session::put('id',$result->id);
            return redirect::to('/dashboard');
        }
        else
        {
        return redirect::to('/admin');
        }
    }
    public function logout()
    {$this->Checklogin();
        Session::put('ten',null);
        Session::put('id',null);
        return redirect::to('/admin');
    }
}
