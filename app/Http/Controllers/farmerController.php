<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\farmer;//นําเอาโมเดล farmer เข้ามาใช้งาน 

class farmerController extends Controller
{
    public function index() {        
         $farmer = farmer::all(); 
          //$farmer = farmer::orderBy('id','desc')->get();     

          $count = farmer::count(); //นบัจํานวนแถวทงัหมด 
          return view('farmer.index', [ 
            'farmer' => $farmer, 
            'count' => $count 
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php 
        } 
        public function destroy($id) {         
            //farmer::find($id)->delete();         
            farmer::destroy($id);        
             return back();     
            }
}
