<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoaisanphamController extends Controller
{
    //
    function __construct()
    {
        $danhmuc = LoaisanphamModel::all();
        $sanpham = SanphamModel::all();
        view()->share('danhmuc', $danhmuc);
        view()->share('sanpham', $sanpham);
    }
    public function danhmucsanpham($masp)
    {
        $masanpham=$masp;
        Session()->put('masanpham',$masp);
        $sanpham=SanphamModel::join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')->where('loaisanpham.maloai', '=', $masp)
        ->select('sanpham.*')
        ->get();
        return view('site.pages.danhmuc', compact('sanpham'));
    }
}
