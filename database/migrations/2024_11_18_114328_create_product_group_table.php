<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_group', function (Blueprint $table) {
            $table->string('id_nhomsp', 100)->primary();
            $table->string('tennhom', 100);
            $table->string('id_loaisp', 100);
            $table->timestamps();

            // Thêm liên kết khóa ngoại
            $table->foreign('id_loaisp')->references('id_loai_sp')->on('product_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_group');
    }
}
