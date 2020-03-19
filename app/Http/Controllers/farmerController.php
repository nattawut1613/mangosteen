<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;

class farmerController extends Controller
{
    public function index() {
        //  $farmer = Farmer::all();
          $farmer = User::where('type','farmer')->where('id', Auth::user()->id)->get();

        //   $count = User::count(); //นบัจํานวนแถวทงัหมด
          return view('farmers.index', [
            'farmers' => $farmer
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
        }

        public function destroy($id) {
            //farmer::find($id)->delete();
            User::destroy($id);
             return back();
            }
            public function edit($id)
                    {
                        $farmer = User::find($id);

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

                          $farmer = User::find($id);
                          $farmer->far_name = $request->get('far_name');
                          $farmer->far_address = $request->get('far_address');
                          $farmer->far_tel = $request->get('far_tel');
                          $farmer->far_account = $request->get('far_account');
                          $farmer->far_bank = $request->get('far_bank');

                          $farmer->save();

                          return redirect('/farmers')->with('success', 'famer has been updated');
        }
}
