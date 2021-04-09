<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
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

    public function addcategory()
    { $this->Checklogin();
        return view('admin.add_category_product');

    }
    public function allcategory()
    { $this->Checklogin();
        $allcategory=DB::table('category')->orderby('danhmuc_id','desc')->get();
        $quanli=view('admin.all_category_product')->with('all_category_product',$allcategory);
        return view('admin_welcome')->with('admin.all_category_product',$quanli);

    }
    public function savecategory(Request $request)
    { $this->Checklogin();
        $data=array();
        $data['tendm']=$request->tendanhmuc;
               $data['trangthai']=$request->trangthai;
        DB::table('category')->insert($data);
        Session::put('message','Happy success!!!');
        return redirect::to('/all-category-product' );

    }
    public function active1($category_id)
    { $this->Checklogin();
DB::table('category')->where('danhmuc_id',$category_id)->update(['trangthai'=>0]);
Session::put('message','success notactive!!!');
return redirect::to('/all-category-product' );
    }
    public function notactive0($category_id)
    { $this->Checklogin();
        DB::table('category')->where('danhmuc_id',$category_id)->update(['trangthai'=>1]);
Session::put('message','success active!!!');
return redirect::to('all-category-product');
    }
    public function editcategory($category_id)
    { $this->Checklogin();
        $editcategory=DB::table('category')->where('danhmuc_id',$category_id)->get();//laydu lieu
        $quanli=view('admin.edit_category')->with('edit_category',$editcategory);
        return view('admin_welcome')->with('admin.all_category_product',$quanli);
    }
    public function updatecategory(Request $request, $category_id)
    { $this->Checklogin();
        $data=array();
       $data['tendm']=$request->tendanhmuc;
        $data['mota']=$request->mota;
         DB::table('category')->where('danhmuc_id',$category_id)->update($data);
         Session::put('message','update success!!!');
return redirect::to('/all-category-product' );
    }
    public function deletecategory($category_id)
    { $this->Checklogin();
DB::table('category')->where('danhmuc_id',$category_id)->delete();
         Session::put('message','delete success!!!');
return redirect::to('/all-category-product' );
    }

}


