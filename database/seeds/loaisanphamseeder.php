<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loaisanphamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaisanpham')->insert([
            [
                'tenloai'=>'SONY',
                'mota'=>'sản phẩm của SONY'
            ],
            [
                'tenloai'=>'CANON',
                'mota'=>'sản phảm của CANON'
            ],
            [
                'tenloai'=>'PANASONIC',
                'mota'=>'sản phảm của PANASONIC'
            ],
            [
                'tenloai'=>'NIKON',
                'mota'=>'sản phảm của NIKON'
            ],
            [
                'tenloai'=>'LEICA',
                'mota'=>'sản phảm của LEICA'
            ],
            [
                'tenloai'=>'SIGMA',
                'mota'=>'sản phảm của SIGMA'
            ],
            [
                'tenloai'=>'FIJIFILM',
                'mota'=>'sản phảm của FIJIFILM'
            ],
        ]);
    }
}
