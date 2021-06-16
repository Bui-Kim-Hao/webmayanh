<?php

namespace App\Http\Controllers\Admin\Tintuc;

use App\Http\Controllers\Controller;
use App\Models\LoaitinModel;
use App\Models\TintucModel;
use Illuminate\Http\Request;

class TintucController extends Controller
{
    //
    public function Add()
    {
        $loaitin=LoaitinModel::all();
        return view('admin.tintuc.add_tintuc',compact('loaitin'));
    }
    public function ALL()
    {
        $data['all_tintuc']=TintucModel::all();
        return view('admin.tintuc.all_tintuc',$data);
    }
    public function save(Request $request)
    {
        $file = $request->file('hinhanh');
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('public/uploads/product/'), $file_name);

        $tintuc = new TintucModel();
        $tintuc->tentin = $request->tentin;
        $tintuc->hinhanh = $file_name;
        $tintuc->maloaitin = $request->maloaitin;
        $tintuc->noidung = $request->noidung;
        $tintuc->save();
        return redirect()->route('tt.all');
        // dd($tintuc);
    }
    public function edit($id)
    {
        $loaitin=LoaitinModel::all();
        $edit_value = TintucModel::find($id);
        return view('admin.tintuc.update_tintuc', compact('edit_value','loaitin'));
    }
    public function update(Request $request, $id)
    {
        $tintuc = TintucModel::find($id);
        if ($request->image != '') {
            $file_old = base_path('public/imgs/product/') . $tintuc->hinhanh;
            if (is_file($file_old)) {
                unlink($file_old);
            }
            $file = $request->file('image');

            $file_name = $file->getClientOriginalName();
            $file->move(base_path('public/imgs/product/'), $file_name);
        } else {
            $file_name = $tintuc->hinhanh;
        }
        $tintuc->tentin = $request->tentin;
        $tintuc->hinhanh = $file_name;
        $tintuc->maloaitin = $request->maloaitin;
        $tintuc->noidung = $request->noidung;
        $tintuc->save();
        return redirect()->route('tt.all')->with('messageUpdate', 'Cập nhật danh mục tin tức thành công');
    }
    public function delete($id)
    {
        $tintuc = TintucModel::find($id);
        $tintuc->delete();
        return redirect()->route('tt.all');
    }
}
