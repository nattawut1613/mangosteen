<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bidder;//นําเอาโมเดล bidder เข้ามาใช้งาน 

class BidderController extends Controller
{
    public function index() {        
        //  $bidder = bidder::all(); 
          $bidder = bidder::get();   

          $count = bidder::count(); //นบัจํานวนแถวทงัหมด 
          return view('bidder.index', [ 
            'bidders' => $bidder, 
            'count' => $count 
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php 
        } 
        
        public function destroy($id) {         
            //bidder::find($id)->delete();         
            Bidder::destroy($id);        
             return back();     
            }
            public function edit($id)
                    {
                        $bidder = Bidder::find($id);

                        return view('bidders.edit', compact('bidder'));
                    }

         public function update(Request $request, $id)
          {
                          $request->validate([
                            'b_name'=>'required',
                            'b_address'=> 'required',
                            'b_tel' => 'required',
                            'b_account' => 'required',
                            'b_bank' => 'required',
                            
                          ]);
                    
                          $bidder = Bidder::find($id);
                          $bidder->b_name = $request->get('b_name');
                          $bidder->b_address = $request->get('b_address');
                          $bidder->b_tel = $request->get('b_tel');
                          $bidder->b_account = $request->get('b_account');
                          $bidder->b_bank = $request->get('b_bank');
                        
                          $bidder->save();
                    
                          return redirect('/bidders')->with('success', 'bidder has been updated');
        }
}
