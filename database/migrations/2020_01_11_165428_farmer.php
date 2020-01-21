<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Farmer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer', function (Blueprint $table) {
            $table->increments('id'); //รหัสเกษตรกร
            $table->string('far_name'); //ชื่อเกษตรกร
            $table->string('far_address'); //ที่อยู่ของเกษตรกร
            $table->string('far_tel');//เบอร์โทร
            // $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('far_account'); //เลขบัญชี
            $table->string('far_bank'); // ธนาคาร
            $table->string('far_user'); //	id
            $table->string('far_pass'); // รหัสผ่าน


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
