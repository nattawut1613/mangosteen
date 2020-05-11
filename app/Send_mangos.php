<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send_mangos extends Model

{     protected $table = 'send_mangos'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['send_mangos','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
