<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bidder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidder', function (Blueprint $table) {
            $table->increments('id'); //รหัสผู้ประมูล
            $table->string('b_per'); //คำนำหน้า
            $table->string('b_name'); //ชื่อ
            $table->string('b_address');
            // $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('b_tel'); //เบอร์โทร
            $table->string('b_account'); //	เลขบัญชี
            $table->string('b_bank'); // ธนาคาร
            $table->string('b_usename'); //	id
            $table->string('b_pass'); // รหัสผ่าน


            $table->timestamps();
            });    }

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
