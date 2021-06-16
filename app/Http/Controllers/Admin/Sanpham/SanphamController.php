<?php

namespace App\Http\Controllers\Admin\Sanpham;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    //
    public function Add()
    {
        $loaisanpham=LoaisanphamModel::all();
        return view('admin.sanpham.add_sanpham',compact('loaisanpham'));
    }
    public function ALL()
    {
        $data['all_sanpham']=SanphamModel::all();
        return view('admin.sanpham.all_sanpham',$data);
    }
    public function save(Request $request)
    {
        $file = $request->file('hinhanh');
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('public/uploads/product/'), $file_name);
        $sanpham = new SanphamModel();
        $sanpham->tensanpham = $request->tensanpham;
        $sanpham->hinhanh = $file_name;
        $sanpham->maloai = $request->maloai;
        $sanpham->dophangiai = $request->dophangiai;
        $sanpham->boxuli = $request->boxuli;
        $sanpham->cambien = $request->cambien;
        $sanpham->zoomquanghoc = $request->zoomquanghoc;
        $sanpham->chedolaynet = $request->chedolaynet;
        $sanpham->kichthuocmanhinh = $request->kichthuocmanhinh;
        $sanpham->pin = $request->pin;
        $sanpham->kichthuoc = $request->kichthuoc;
        $sanpham->gia = $request->gia;
        // $sanpham->_slug=Str::slug($request->tensanpham,'-');
        // dd($sanpham);
        $sanpham->save();
        return redirect()->route('sp.all');
    }
    public function edit($id)
    {
        $loaisanpham=LoaisanphamModel::all();
        $edit_value = SanphamModel::find($id);
        return view('admin.sanpham.update_sanpham', compact('edit_value','loaisanpham'));
    }
    public function update(Request $request, $id)
    {
        $sanpham = SanphamModel::find($id);
        if ($request->image != '') {
            $file_old = base_path('public/frontend/product/') . $sanpham->hinhanh;
            if (is_file($file_old)) {
                unlink($file_old);
            }
            $file = $request->file('hinhanh');

            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/frontend/product/'), $file_name);
        } else {
            $file_name = $sanpham->hinhanh;
        }
        $sanpham->tensanpham = $request->tensanpham;
        $sanpham->hinhanh = $file_name;
        $sanpham->maloai = $request->maloai;
        $sanpham->dophangiai = $request->dophangiai;
        $sanpham->boxuli = $request->boxuli;
        $sanpham->cambien = $request->cambien;
        $sanpham->zoomquanghoc = $request->zoomquanghoc;
        $sanpham->chedolaynet = $request->chedolaynet;
        $sanpham->kichthuocmanhinh = $request->kichthuocmanhinh;
        $sanpham->pin = $request->pin;
        $sanpham->kichthuoc = $request->kichthuoc;
        $sanpham->gia = $request->gia;
        // $sanpham->prd_slug=Str::slug($request->prd_name);
        $sanpham->save();
        return redirect()->route('sp.all')->with('messageUpdate', 'Cập nhật danh mục sản phẩm thành công');
    }
    public function delete($id)
    {
        $sanpham = SanphamModel::find($id);
        $sanpham->delete();
        return redirect()->route('sp.all');
    }

}
