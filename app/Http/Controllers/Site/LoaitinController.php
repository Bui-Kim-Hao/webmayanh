<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LoaitinModel;
use App\Models\TintucModel;
use Illuminate\Http\Request;

class LoaitinController extends Controller
{
    //
    function __construct()
    {
        $danhmuc = LoaitinModel::all();
        $tintuc = TintucModel::all();
        view()->share('danhmuctin', $danhmuc);
        view()->share('tintuc', $tintuc);
    }
    public function danhmuctintuc($matt)
    {
        $matin=$matt;
        Session()->put('matin',$matt);
        $tintuc=TintucModel::join('loaitin', 'tintuc.maloaitin', '=', 'loaitin.maloaitin')->where('loaitin.maloaitin', '=', $matt)
        ->select('tintuc.*')
        ->get();
        return view('site.pages.tintuc', compact('tintuc'));
    }
}
