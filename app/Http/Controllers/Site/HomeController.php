<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    function __construct()
    {
        $danhmuc=LoaisanphamModel::all();
        $sanpham=SanphamModel::all();
        $sanphambc=SanphamModel::Limit(3)->get();
        view()->share('danhmuc', $danhmuc);
        view()->share('sanpham', $sanpham);
        view()->share('sanphambc', $sanphambc);

    }
    public function index()
    {
        return view('site.pages.home');
    }
    public function search(Request $request)
    {
        $keywords = $request->key;
        Session()->put('search',$keywords);
        $sanpham = SanphamModel::search($request->key)->paginate(12);

        return view('site.pages.search', ['search' => $sanpham]);
    }
    public function DanhmucSanpham($maloai)
    {
        $loaisanpham =DB::table('sanpham')
            ->join('loaisanpham', 'sanpham.maloai', '=', 'loaisanpham.maloai')
            ->where('loaisanpham.maloai', '=', $maloai)
            ->select('sanpham.*')
            ->paginate(12);
            return view('site.pages.danhmuc', compact('loaisanpham'));
    }

}
