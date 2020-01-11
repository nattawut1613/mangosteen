<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SendMangos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send', function (Blueprint $table) {
            $table->increments('send_id'); //รหัสการส่ง
            $table->integer('sum_id')->unsigned();
            $table->foreign('sum_id')->references('id')->on('summary_mangos ');
            $table->integer('far_id')->unsigned();
            $table->foreign('far_id')->references('id')->on('farmer');
            $table->integer('mang_id')->unsigned();
            $table->foreign('mang_id')->references('id')->on('mangosteen');
            
            
            $table->decimal('send_weight',6,2);//ราคา
            $table->string('send_around'); //รอบ
            $table->string('send_amount'); //จำนวน
            $table->string('send_result'); //ผลประมูล
            $table->dateTime('send_date'); //;date


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
