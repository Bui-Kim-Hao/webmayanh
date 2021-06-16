<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loaitinseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bên này có 2 bản ghi, mà bên kia e lấy bản id =3 là ko có nha
        // hoa don thi e chua co du lieu, ma cung ko can them abng nay dau
        // ok roi nhé
        DB::table('loaitin')->insert([
            [
                'maloaitin'=>'1',
                'tenloaitin'=>'Tin quảng cáo',
                'mota'=>'Quảng sản phẩm ra ngoài thị trường cho người tiêu dùng'
            ],
            [
                'maloaitin'=>'2',
                'tenloaitin'=>'Tin khuyến mại',
                'mota'=>'Đưa thông tin của sản phẩm ra ngoài thị trường cho người tiêu dùng'
            ],
        ]);
    }
}
