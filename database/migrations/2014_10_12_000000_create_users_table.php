<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //รหัสผู้ประมูล
           
            $table->string('name'); //ชื่อ
            $table->string('lastname');
            $table->string('address')->nullable();
            // $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('tel')->nullable(); //เบอร์โทร
            $table->string('account')->nullable(); //	เลขบัญชี
            $table->string('bank')->nullable(); // ธนาคาร
            $table->string('username'); //	id
            $table->string('password'); // รหัสผ่าน
            $table->rememberToken();
            $table->string('type'); // ประเภท



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
        Schema::dropIfExists('users');
    }
}
