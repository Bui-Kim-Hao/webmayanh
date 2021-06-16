<?php

namespace App\Http\Controllers\Admin\Loaitin;

use App\Http\Controllers\Controller;
use App\Models\LoaitinModel;
use Illuminate\Http\Request;

class LoaitinController extends Controller
{
    //
    public function index()
    {
        $loaitin=LoaitinModel::all();
        return view('admin.loaitin.index',compact('loaitin'));
    }
    public function add()
    {
        return view('admin.loaitin.add_loaitin');
    }
    public function save(Request $request)
    {
        $loaitin = new LoaitinModel();
        $loaitin->tenloaitin=$request->tenloaitin;
        $loaitin->mota=$request->mota;
        $loaitin->save();
        return redirect()->route('ltin.all');
    }
    public function edit($id)
    {
        $edit_value = LoaitinModel::find($id);
        return view('admin.loaitin.update_loaitin',compact('edit_value'));
    }
    public function update(Request $request,$id)
    {
        $ltin = LoaitinModel::find($id);
        $ltin->tenloaitin=$request->tenloaitin;
        $ltin->mota=$request->mota;
        $ltin->save();
        return redirect()->route('ltin.all');
    }
    public function delete($id)
    {
        $loaitin = LoaitinModel::find($id);
        $loaitin->delete();
        return redirect()->route('ltin.all');
    }
}
