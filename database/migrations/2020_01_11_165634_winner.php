<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Winner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winner', function (Blueprint $table) {
            $table->increments('id'); //รหัสการสรุปราคา
            // $table->integer('b_id')->unsigned();
            // $table->foreign('b_id')->references('id')->on('bidder');
            // $table->integer('mang_id')->unsigned();
            // $table->foreign('mang_id')->references('id')->on('mangosteen');

            $table->integer('mang_id')->unsigned();
            $table->decimal('win_price',6,2);//ราคา
            $table->string('win_around'); //รอบ
            $table->string('win_amount'); //จำนวน
            $table->string('win_result'); //ผลประมูล
            $table->date('win_date'); //;date



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
        Schema::table('winner', function($table)
        {
            Schema::drop('winner');
            $table->dropForeign('winner_create_user_foreign');

        });
    }
}
