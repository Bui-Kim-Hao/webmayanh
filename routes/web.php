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
//frontend
Route::get('/','Site\HomeController@index');
Route::get('/trang-chu','Site\HomeController@index')->name('trangchu');
Route::get('/camera/{masanpham}','Site\SanphamController@ctsanpham')->name('chitiet');
Route::get('/camera/loaisanpham/{maloai}','Site\LoaisanphamController@danhmucsanpham')->name('loaisanpham');
Route::get('/tin-tuc','Site\TintucController@tintuc')->name('tintuc');

//Giỏ hàng
Route::get('/cart','Site\GiohangController@index')->name('giohang.index');
Route::post('/save-cart','Site\GiohangController@save_cart')->name('giohang.save');
Route::get('/demo','Site\GiohangController@demo');
Route::post('/update-giohang','Site\GiohangController@update_cart')->name('giohang.update');
Route::get('/delete-giohang/{masanpham}','Site\GiohangController@delete_sanpham')->name('giohang.delete');
Route::post('/thanhtoan','Site\GiohangController@thanhtoan')->name('thanhtoan');


Route::get('/tim-kiem','Site\HomeController@search');

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard')->name('dashboard');
    //
    Route::group(['prefix'=>'loaisanpham','namespace'=>'Loaisanpham'],function(){
        Route::get('all-loai-san-pham',"LoaisanphamController@index")->name('lsp.all');
        Route::get('add-loai-san-pham',"LoaisanphamController@add")->name('lsp.add');

        Route::post('save-loai-san-pham',"LoaisanphamController@save")->name('lsp.save');
        Route::get('sua-loai-san-pham/{id}',"LoaisanphamController@edit")->name('lsp.edit');

        Route::post('cap-nhat-loai-san-pham/{id}',"LoaisanphamController@update")->name('lsp.update');
        Route::get('xoa-loai-san-pham/{id}',"LoaisanphamController@delete")->name('lsp.delete');
    });
    //
    Route::group(['prefix'=>'sanpham','namespace'=>'Sanpham'],function(){
        Route::get('all-san-pham',"SanphamController@All")->name('sp.all');
        Route::get('add-san-pham',"SanphamController@Add")->name('sp.add');

        Route::post('save-san-pham',"SanphamController@save")->name('sp.save');
        Route::get('sua-san-pham/{id}',"SanphamController@edit")->name('sp.edit');

        Route::post('cap-nhat-san-pham/{id}',"SanphamController@update")->name('sp.update');
        Route::get('xoa-loai-pham/{id}',"SanphamController@delete")->name('sp.delete');
    });


    Route::group(['prefix'=>'loaitin','namespace'=>'Loaitin'],function(){
        Route::get('all-loai-tin',"LoaitinController@index")->name('ltin.all');
        Route::get('add-loai-tin',"LoaitinController@add")->name('ltin.add');

        Route::post('save-loai-tin',"LoaitinController@save")->name('ltin.save');
        Route::get('sua-loai-tin/{id}',"LoaitinController@edit")->name('ltin.edit');

        Route::post('cap-nhat-loai-tin/{id}',"LoaitinController@update")->name('ltin.update');
        Route::get('xoa-loai-tin/{id}',"LoaitinController@delete")->name('ltin.delete');
    });

    Route::group(['prefix'=>'tintuc','namespace'=>'Tintuc'],function(){
        Route::get('all-tin-tuc',"TintucController@All")->name('tt.all');
        Route::get('add-tin-tuc',"TintucController@Add")->name('tt.add');

        Route::post('save-tin-tuc',"TintucController@save")->name('tt.save');
        Route::get('sua-tin-tuc/{id}',"TintucController@edit")->name('tt.edit');

        Route::post('cap-nhat-tin-tuc/{id}',"TintucController@update")->name('tt.update');
        Route::get('xoa-loai-pham/{id}',"TintucController@delete")->name('tt.delete');
    });
});
