<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mangosteen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangosteen', function (Blueprint $table) {
            $table->increments('mang_id'); //รหัสไซส์มังคุด
            $table->string('mang_size'); //ชื่อไซส์มังคุด
            $table->string('mang_attribute'); //ลักษณะมังคุด
            $table->string('mang_status');//สถานะ
            // $table->foreign('typebooks_id')->references('id')->on('typebooks');


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
        //
    }
}
