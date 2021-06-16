<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Donhang_chitietModel;
use App\Models\DonhangModel;
use App\Models\SanphamModel;
use DateTime;
use Illuminate\Http\Request;

class GiohangController extends Controller
{
    //
    public function index()
    {
        return view('site.giohang.giohang');
    }
    public function save_cart(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $giohang = Session()->get('giohang');
        if ($giohang == true) {
            $is_avaiable = 0;
            foreach ($giohang as $key => $val) {
                if ($val['giohang_masanpham'] == $data['gh_masanpham']) {
                    $giohang[$key]['giohang_soluong'] += $data['gh_soluong'];
                    Session()->put('giohang', $giohang);
                    $is_avaiable ++;
                }
            }
            if ($is_avaiable == 0) {
                $giohang[] = array(
                    'giohang_session_id' => $session_id,
                    'giohang_tensanpham' => $data['gh_tensanpham'],
                    'giohang_masanpham' => $data['gh_masanpham'],
                    'giohang_hinhanh' => $data['gh_hinhanh'],
                    'giohang_soluong' => $data['gh_soluong'],
                    'giohang_gia' => $data['gh_gia'],
                );
                Session()->put('giohang', $giohang);
            }
        } else {
            $giohang[] = array(
                'giohang_session_id' => $session_id,
                'giohang_tensanpham' => $data['gh_tensanpham'],
                'giohang_masanpham' => $data['gh_masanpham'],
                'giohang_hinhanh' => $data['gh_hinhanh'],
                'giohang_soluong' => $data['gh_soluong'],
                'giohang_gia' => $data['gh_gia'],
            );
            Session()->put('giohang', $giohang);
        }

        Session()->save();
    }
    public function demo()
    {
        $giohang = Session()->get('giohang');
        echo '<pre>';
        print_r($giohang);
        echo '</pre>';
    }
    public function update_cart(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $giohang = Session()->get('giohang');
        if ($giohang == true) {
            foreach ($data['giohang_qty'] as $key => $qty) {
                foreach ($giohang as $session => $val) {
                    if ($val['giohang_session_id'] == $key) {
                        $giohang[$session]['giohang_soluong'] = $qty;
                    }
                }
            }
            Session()->put('giohang', $giohang);
            return redirect()->back();
        }
    }
    public function delete_sanpham($masanpham)
    {
        $giohang = Session()->get('giohang');
        if ($giohang == true) {
            foreach ($giohang as $key => $val) {
                if ($val['giohang_masanpham'] == $masanpham) {
                    unset($giohang[$key]);
                }
            }
            Session()->put('giohang', $giohang);
            return redirect()->back();
        }
    }

    public function thanhtoan(Request $request)
    {
        $giohang = Session()->get('giohang');

        $t = 0;
        foreach ($giohang as $session => $val) {
            $t += $val['giohang_soluong'] * $val['giohang_gia'];
        }

        $idmadon = DonhangModel::create([
            'tenkhachhang' => $request->tenkhachhang,
            'diachi' => $request->diachi,
            'sdt' => $request->sdt,
            'ghichu' => $request->ghichu,
            'trangthai' => 'Chưa xác thực',
            'trangthaivanchuyen' => 'Chưa được gửi',
            'trangthaithanhtoan' => 'Chưa thanh toán',
            'tongtien' => $t,
        ])->madon;

        foreach ($giohang as $session => $val) {
            $donhang_chitiet = new Donhang_chitietModel();
            $donhang_chitiet->madon = $idmadon;
            $donhang_chitiet->masanpham = $val['giohang_masanpham'];
            $donhang_chitiet->soluong = $val['giohang_soluong'];
            $donhang_chitiet->save();
        }
        //
        foreach ($giohang as $key => $val) {
            unset($giohang[$key]);
        }
        Session()->put('giohang', $giohang);

        return redirect()->route('trangchu');
    }

}
