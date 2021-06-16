<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {

            $table->increments('madon');

            $table->string('tenkhachhang');
            $table->string('diachi');
            $table->string('sdt','10');
            $table->string('ghichu');
            $table->string('trangthai');//trạng thái đơn hàng
            $table->string('trangthaivanchuyen');//trạng thái vận chuyển
            $table->string('trangthaithanhtoan');//trạng thái thanh toán
            $table->integer('tongtien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
