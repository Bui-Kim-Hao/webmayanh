<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class donhangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donhang')->insert([
            [
                'madon'=>'1618915459',
                'tenkhachhang'=>'Mai Hoàng Thái Bảo',
                'diachi'=>'610/huỳnh tấn phát, phường Tân Phú, Quận 7, TP. Hồ Chí Minh',
                'sdt'=>'0976377898',
                'ghichu'=>'gửi nhanh cho tôi nhé',
                'trangthai'=>'Chưa xác thực',
                'trangthaivanchuyen'=>'Chưa được gửi',
                'trangthaithanhtoan'=>'Chưa thanh toán',
                'tongtien'=>24990000
            ],
            [
                'madon'=>'1618916255',
                'tenkhachhang'=>'Hồ Văn Tuân',
                'diachi'=>'610/huỳnh tấn phát, phường Tân Phú, Quận 7, TP. Hồ Chí Minh',
                'sdt'=>'0976377398',
                'ghichu'=>'gửi nhanh cho tôi nhé',
                'trangthai'=>'Chưa xác thực',
                'trangthaivanchuyen'=>'Chưa được gửi',
                'trangthaithanhtoan'=>'Chưa thanh toán',
                'tongtien'=>24990000
            ],
        ]);
    }
}
