<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล bidder เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;

class BidderController extends Controller
{
    public function index() {

        if( Auth::user()->type == 'admin'){

          $bidder = User::where('type','bidder')->get();

        }
        else{

          $bidder = User::where('type','bidder')->where('id', Auth::user()->id)->get();

        }

        //   $count = User::count(); //นบัจํานวนแถวทงัหมด
          return view('bidders.index', [
            'bidders' => $bidder
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
        }

        public function destroy($id) {
            //bidder::find($id)->delete();
            User::destroy($id);
             return back();
            }
            public function edit($id)
                    {
                        $bidder = User::find($id);

                        return view('bidders.edit', compact('bidder'));
                    }

         public function update(Request $request, $id)
          {
                          $request->validate([
                            'name'=>'required',
                            'address'=> 'required',
                            'tel' => 'required',
                            'account' => 'required',
                            'bank' => 'required',

                          ]);

                          $bidder = User::find($id);
                          $bidder->name = $request->get('name');
                          $bidder->address = $request->get('address');
                          $bidder->tel = $request->get('tel');
                          $bidder->account = $request->get('account');
                          $bidder->bank = $request->get('bank');

                          $bidder->save();

                          return redirect('/bidders')->with('success', 'bidder has been updated');
        }

        public function mangosteen() {
          
            return view('bidders.mangosteen');
            
          }
}
