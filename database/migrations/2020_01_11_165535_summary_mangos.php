<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SummaryMangos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary_mangos', function (Blueprint $table) {
            $table->increments('sum_id'); //รหัสการสรุปราคา
            $table->unsignedBigInteger(far_id);
            // $table->foreign('far_id')->references('id')->on('farmer');
            // $table->integer('mang_id')->unsigned();
            // $table->foreign('mang_id')->references('id')->on('mangosteen');
            $table->string('sum_box'); //ลัง
            $table->decimal('sum_weight',6,2); //น้ำหนัก
            $table->string('sum_around'); //รอบ
            $table->date('sum_date'); //;date


            $table->foreign('farid')
            ->references('far_id')
            ->on('farmer')
            ->onDelete('cascade');
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
