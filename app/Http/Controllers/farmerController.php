<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\farmer;//นําเอาโมเดล farmer เข้ามาใช้งาน 

class farmerController extends Controller
{
    public function index() {        
        //  $farmer = Farmer::all(); 
          $farmer = Farmer::orderBy('id','desc')->get();     

          $count = Farmer::count(); //นบัจํานวนแถวทงัหมด 
          return view('farmers.index', [ 
            'farmers' => $farmer, 
            'count' => $count 
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php 
        } 
        
        public function destroy($id) {         
            //farmer::find($id)->delete();         
            Farmer::destroy($id);        
             return back();     
            }
            public function edit($id)
                    {
                 $farmer = Farmer::findOrFail($id);
                        return view('farmers.edit', ['farmer' => $farmer]);
                    }
}
