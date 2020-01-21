<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Submit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit', function (Blueprint $table) {
            $table->increments('sub_id'); //รหัสการสรุปราคา
            // $table->integer('b_id')->unsigned();
            // $table->foreign('b_id')->references('id')->on('bidder');
            // $table->integer('mang_id')->unsigned();
            // $table->foreign('mang_id')->references('id')->on('mangosteen');
            $table->integer('mang_id')->unsigned();
            
            $table->decimal('sub_price',6,2);//ราคา
            $table->string('sub_around'); //รอบ
            $table->string('sub_amount'); //จำนวน
            $table->date('sum_date'); //;date


            $table->foreign('mang_id')
                ->references('id')->on('mangosteen')
                ->onDelete('cascade');


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
        Schema::table('submit', function($table)
        {
            Schema::drop('submit');
            $table->dropForeign('submit_mang_id_foreign');
            
        });
    }
}
