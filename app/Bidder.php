<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $table = 'bidder'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู }
      protected $fillable = ['b_name','id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

}
