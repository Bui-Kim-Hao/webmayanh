<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hoadonnhapseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hoadonnhap_chitiet')->insert([
            [
                'mahoadon' => 1,
                'masanpham' => 1,
                'ngaynhap' => '2021-04-14',
                'soluong' => 3,
                'dongia' => 17990000
            ],
            [
                'mahoadon' => 1,
                'masanpham' => 2,
                'ngaynhap' => '2021-04-14',
                'soluong' => 3,
                'dongia' => 19490000
            ],
        ]);

    }
}
