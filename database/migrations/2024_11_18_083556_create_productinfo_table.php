<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productinfo', function (Blueprint $table) {
            $table->integerIncrements('id_sanpham');
            $table->string('ten_sanpham',200);
            $table->float('gia_moi');
            $table->float('gia_cu');
            $table->string('id_loai_sanpham',100);
            $table->string('hinh_sanpham',50);
            $table->string('hinh_quatang',50);
            $table->string('thongtin_km',100);
            $table->integer(('so_luong'));
            $table->string('id_nhomsp',100);

            $table->foreign('id_loai_sanpham')->references('id_loai_sp')->on('product_category');
            $table->foreign('id_nhomsp')->references('id_nhomsp')->on('product_group');
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
        Schema::dropIfExists('productinfo');
    }
}
