<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon_chitiet', function (Blueprint $table) {
            $table->increments('macthoadon');
            $table->integer('mahoadon')->unsigned();
            $table->foreign('mahoadon')->references('mahoadon')->on('hoadon')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('masanpham')->unsigned();
            $table->foreign('masanpham')->references('masanpham')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
            $table->date('ngaynhap');
            $table->integer('soluong');
            $table->integer('dongia');
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
        Schema::dropIfExists('hoadon_chitiet');
    }
}
