<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CenterPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_personal', function (Blueprint $table) {
            $table->increments('id'); //รหัสผู้ประมูรหัสกลุ่มมังคุดแปลงใหญ่ล
            $table->string('ct_type_name'); //ชื่อกลุ่มมังคุดแปลงใหญ่
            $table->string('ct_address'); //ที่อยู่กลุ่มมังคุดแปลงใหญ่
            $table->string('ct_tel');//เบอร์
            // $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('ct_account'); //เลขบัญชี
            $table->string('ct_bank'); // ธนาคาร
            $table->string('ct_user'); //	id
            $table->string('ct_pass'); // รหัสผ่าน


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
        Schema::dropIfExists('center_personal');
    }
}
