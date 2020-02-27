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
                        $farmer = Farmer::find($id);

                        return view('farmers.edit', compact('farmer'));
                    }

         public function update(Request $request, $id)
          {
                          $request->validate([
                            'far_name'=>'required',
                            'far_address'=> 'required',
                            'far_tel' => 'required',
                            'far_account' => 'required',
                            'far_bank' => 'required',
                            
                          ]);
                    
                          $farmer = Farmer::find($id);
                          $farmer->far_name = $request->get('far_name');
                          $farmer->far_address = $request->get('far_address');
                          $farmer->far_tel = $request->get('far_tel');
                          $farmer->far_account = $request->get('far_account');
                          $farmer->far_bank = $request->get('far_bank');
                        
                          $farmer->save();
                    
                          return redirect('/farmers')->with('success', 'famer has been updated');
        }
}
