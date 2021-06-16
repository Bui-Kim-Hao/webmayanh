<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nhacungcapseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nhacungcap')->insert([
            [
                'tennhacc' => 'Công Ty TNHH Thương Mại Hoàng Phát Hải Phòng',
                'daichi' => 'Số 4, Lô 2A Lê Hồng Phong, Ngô Quyền, Tp. Hải Phòng - Chi Nhánh: Thanh Hóa',
                'sdt' => '0375767612',
                'email' => 'lananhhoangphat@gmail.com',
            ],
            [
                'tennhacc' => 'Công Ty TNHH Quảng Tin',
                'daichi' => '6D3 Chu Văn An, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh (TPHCM)',
                'sdt' => '0989044022',
                'email' => 'quangtin@quangtin.com',
            ],
            [
                'tennhacc' => 'Công Ty TNHH Công Nghệ Máy Tính An Phát',
                'daichi' => 'Số 19, Ngõ 178 Thái Hà - Đống Đa - Tp. Hà Nội (TPHN)',
                'sdt' => '0971851111',
                'email' => 'maytinhanphat178@gmail.com',
            ],
            [
                'tennhacc' => 'Hộ Kinh Doanh Hoàng Nam',
                'daichi' => 'Số 10, Ngõ 31, Phố Doãn Kế Thiện, Phường Mai Dịch, Quận Cầu Giấy, Thành Phố Hà Nội',
                'sdt' => '091.5500 899',
                'email' => 'sonhh2412@gmail.com',
            ],
            [
                'tennhacc' => 'Công Ty TNHH Thương Mại VHC',
                'daichi' => 'VHC Tower, 399 Phạm Văn Đồng, P. Xuân Đỉnh, Q. Bắc Từ Liêm, TP Hà Nội (TPHN)',
                'sdt' => '(024) 37501188',
                'email' => 'online@hc.com.vn',
            ],
        ]);
    }
}
