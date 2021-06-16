<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang_chitiet', function (Blueprint $table) {
            $table->increments('machitiet');
            $table->unsignedInteger('madon');
            $table->foreign('madon')->references('madon')->on('donhang')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('masanpham')->unsigned();
            $table->foreign('masanpham')->references('masanpham')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('soluong');
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
        Schema::dropIfExists('donhang_chitiet');
    }
}
