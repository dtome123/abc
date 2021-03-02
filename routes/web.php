<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\ShopController;
use app\Http\Controllers\TestController;
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
//hello
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@Home');//(tên controller@tên function)
Route::get('shopgrid', 'HomeController@ShopGrid');
Route::get('blog', 'HomeController@Blog');
Route::get('cart', 'HomeController@Cart');
Route::get('checkout', 'HomeController@CheckOut');
Route::get('contact', 'HomeController@Contact');
Route::get('shop/page={page}', 'ShopController@display');
Route::group(['prefix' => 'admin/sanpham'], function () {
    Route::get('add', function () {
        echo 'Đây là chức năng thêm';
    });
    Route::get('delete', function () {
        echo 'Đây là chức năng xóa';
    });
    Route::get('edit', function () {
        echo 'Đây là chức năng sửa';
    });
});
Route::get('form', function () {
    return view("test");
});
Route::post('tinhtoan','TestController@tinhtoan' )->name("tinhtoan");
Route::get('product/{id}', 'HomeController@detail');
Route::get('upload', function(){
    return view('upfile');
});
//route up file
Route::post('upload', 'UpFile@up')->name('upfile');
//route add vào giỏ hàng
Route::get('shopgrid/AddToCart', 'CartController@add');
Route::get('shopgrid/re', 'CartController@remove');


    
