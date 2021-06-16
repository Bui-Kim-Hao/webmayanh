<?php

namespace App\Http\Controllers\Admin\Loaisanpham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaisanphamModel;

class LoaisanphamController extends Controller
{
    public function index()
    {
        $loaisanpham=LoaisanphamModel::all();
        return view('admin.loaisanpham.index',compact('loaisanpham'));
    }
    public function add()
    {
        return view('admin.loaisanpham.add_loai');
    }
    public function save(Request $request)
    {
        $loaisanpham = new LoaisanphamModel();
        $loaisanpham->tenloai=$request->tenloai;
        $loaisanpham->mota=$request->mota;
        $loaisanpham->save();
        return redirect()->route('lsp.all');
    }
    public function edit($id)
    {
        $edit_value = LoaisanphamModel::find($id);
        return view('admin.loaisanpham.update_loai',compact('edit_value'));
    }
    public function update(Request $request,$id)
    {
        $lsp = LoaisanphamModel::find($id);
        $lsp->tenloai=$request->tenloai;
        $lsp->mota=$request->mota;
        $lsp->save();
        return redirect()->route('lsp.all');
    }
    public function delete($id)
    {
        $loaisanpham = LoaisanphamModel::find($id);
        $loaisanpham->delete();
        return redirect()->route('lsp.all');
    }
}
