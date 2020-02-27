<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bidder;//นําเอาโมเดล farmer เข้ามาใช้งาน 

class BidderController extends Controller
{
    public function index() {        
         $bidder = Bidder::all(); 
          //$bidder = bidder::orderBy('id','desc')->get();     

          $count = Bidder::count(); //นบัจํานวนแถวทงัหมด 
          return view('bidders.index', [ 
            'bidders' => $bidder, 
            'count' => $count 
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php 
        } 
        
        // public function destroy($id) {         
        //     //bidder::find($id)->delete();         
        //     er::destroy($id);        
        //      return back();     
        //     }
        //     public function edit($id)
        //             {
        //          $farmer = Farmer::findOrFail($id);
        //                 return view('farmers.edit', ['farmer' => $farmer]);
        //             }
}
