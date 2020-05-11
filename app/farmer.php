<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmer extends Model
{     protected $table = 'farmer'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['far_name','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
