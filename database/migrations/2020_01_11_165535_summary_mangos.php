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
            $table->increments('id'); //รหัสการสรุปราคา

            $table->integer('users_id')->unsigned();
            $table->integer('mang_id')->unsigned();
            $table->string('sum_box'); //ลัง
            $table->decimal('sum_weight',6,2); //น้ำหนัก
            $table->string('sum_around'); //รอบ
            $table->date('sum_date'); //date

            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('mang_id')
                ->references('id')->on('mangosteen')
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
        Schema::table('summary_mangos', function($table)
        {
            Schema::drop('summary_mangos');
            $table->dropForeign('summary_mangos_user_fosreign');
            $table->dropForeign('summary_mangos_mang_id_foreign');

        });



    }
}
