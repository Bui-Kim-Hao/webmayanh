<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('masanpham');
            $table->integer('maloai')->unsigned();
            $table->foreign('maloai')->references('maloai')->on('loaisanpham')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tensanpham');
            $table->string('hinhanh');
            $table->string('dophangiai');
            $table->string('boxuli');
            $table->string('cambien');
            $table->string('zoomquanghoc');
            $table->string('chedolaynet');
            $table->string('kichthuocmanhinh');
            $table->string('pin');
            $table->string('kichthuoc');
            $table->integer('gia');
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
        Schema::dropIfExists('sanpham');
    }
}
