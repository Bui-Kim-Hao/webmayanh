<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    //
    function __construct()
    {
        $danhmuc=LoaisanphamModel::all();
        view()->share('danhmuc',$danhmuc);
    }
    public function CTsanpham($masanpham)
    {
        $sanpham = SanphamModel::where('masanpham','=',$masanpham)->first();
        return view('site.pages.ctsanpham', compact('sanpham'));
    }
}
