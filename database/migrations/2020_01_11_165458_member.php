<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('m_id'); //รหัสผู้ใช้ระบบ
            $table->string('m_Password'); //ชื่อไซส์มังคุด
            $table->string('m_Name'); //ชื่อผู้ใช้
            $table->string('m_status');//สถานะ
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
