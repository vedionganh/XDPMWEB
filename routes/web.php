<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//front
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');


////////


Route::get('/chi-tiet/{product_id}','ProductController@chitietsp');


/////////giohang
Route::post('/them-gio','CartController@themgio');
Route::get('/hien-thi','CartController@hienthi');
Route::get('/xoa-sp/{rowId}','CartController@xoasp');
Route::post('/cap-nhat','CartController@capnhat');

//back
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@dashboard');

/*danh muc san pham*/
Route::get('/add-category-product','CategoryController@addcategory');
Route::get('/edit-category/{category_id}','CategoryController@editcategory');
Route::get('/delete-category/{category_id}','CategoryController@deletecategory');
Route::get('/all-category-product','CategoryController@allcategory');
Route::post('/save-category','CategoryController@savecategory');


Route::get('/active/{category_id}','CategoryController@active1');
Route::get('/notactive/{category_id}','CategoryController@notactive0');

Route::post('/update-category/{category_id}','CategoryController@updatecategory');
/////product


Route::get('/add-product','ProductController@addproduct');
Route::get('/edit-product/{product_id}','ProductController@editproduct');
Route::get('/delete-product/{product_id}','ProductController@deleteproduct');
Route::get('/all-product','ProductController@allproduct');
Route::post('/save-product','ProductController@saveproduct');



Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/notactive-product/{product_id}','ProductController@notactive_product');



Route::post('/update-product/{product_id}','ProductController@updateproduct');
/////////////////////////////////////////////loginnnnnnn


Route::get('/lo-gin','LoginController@login');
Route::get('/log-out','LoginController@logout');
Route::post('/dangki-kh','LoginController@dangkikh');
Route::post('/dangnhap-kh','LoginController@dangnhapkh');
Route::get('/thanh-toan','LoginController@thanhtoan');
Route::get('/payment','LoginController@chonthanhtoan');
Route::post('/luu-thanhtoan','LoginController@luuthanhtoan');
Route::post('/hoan-tat','LoginController@hoantat');
/////////////////////////////////////////////
Route::get('/quanli-dh','LoginController@quanlidh');
Route::get('/edit-order/{orderid}','LoginController@xem');

