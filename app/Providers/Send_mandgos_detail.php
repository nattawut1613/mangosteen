<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send_mangos_detail extends Model

{     protected $table = 'send_mangos_detail'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู } 
      protected $fillable = ['send_mangos_detail','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment 

}