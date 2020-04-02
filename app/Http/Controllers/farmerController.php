<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FarmerController extends Controller
{
    public function index() {
        
      if( Auth::user()->type == 'admin'){

        $farmer = User::where('type','farmer')->get();

      }
      else{

        $farmer = User::where('type','farmer')->where('id', Auth::user()->id)->get();

      }

        //   $count = User::count(); //นบัจํานวนแถวทงัหมด
          return view('farmers.index', [
            'farmers' => $farmer
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
        }

        

        public function sellmangosteen() {
          
          $farmer = User::where('type','farmer')->get();

          return view('farmers.sellmangosteen' , [
            'farmers' => $farmer
            ]);
          
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
              'name'=>'required',
              'address'=> 'required',
              'tel' => 'required',
              'account' => 'required',
              'bank' => 'required',

            ]);

            $farmer = User::find($id);
            $farmer->name = $request->get('name');
            $farmer->address = $request->get('address');
            $farmer->tel = $request->get('tel');
            $farmer->account = $request->get('account');
            $farmer->bank = $request->get('bank');

            $farmer->save();

            return redirect('/farmers')->with('success', 'famer has been updated');
        }
}
