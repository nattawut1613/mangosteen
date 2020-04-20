<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Send_mangos;
use DB;

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



        
        

        public function sendmangosteen() {
          
          $farmer = User::where('type','farmer')->get();

          return view('farmers.sendmangosteen' , [
            'farmers' => $farmer
            ]);
          
        }

        public function senddetailmangosteen() {
          
          $farmer = User::where('type','farmer')->get();

          return view('farmers.senddetailmangosteen' , [
            'farmers' => $farmer
            ]);
          
        }

        public function showfarmer() {
          
          $farmer = User::where('type','farmer')->where('id', Auth::user()->id)->get();

     
        // return 1;
        $date = DB::table('send_mangos_detail')
            ->join('mangosteen', 'mangosteen.id', '=', 'mangosteen.id')

            // ->join('users', 'farmer.id', '=', 'farmer.user_id')

             ->select('mangosteen.*')
            //- ->where('users.id',Auth::user()->id )
            // ->orderByDesc('works.begin_date')
            ->get();
            // return $date;
      
            
    

          return view('farmers.showfarmer', [
            'farmers' => $farmer
            ]);
            
          }


      
        public function addstoresend(Request $request)
            {
              $send = new Send_mangos();
              $send->users_id  = $request->get('user_id');
              $send->send_date = $request->send_date;
              $send->send_around = $request->send_around;
              $send->save();

              return view('farmers.senddetailmangosteen');
            }

            public function addstoresenddetail(Request $request)
            {
              $send = new Send_mangos_detail();
              $send->users_id  = $request->get('user_id');
              $send->send_amount = $request->send_amount;
              $send->save();

              return view('farmers.senddetailmangosteen');
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
            $farmer->lastname = $request->get('lastname');
            $farmer->address = $request->get('address');
            $farmer->tel = $request->get('tel');
            $farmer->account = $request->get('account');
            $farmer->bank = $request->get('bank');

            $farmer->save();

            return redirect('/farmers')->with('success', 'famer has been updated');
        }

        public function addstore_rit(Request $request)
    {
        $workimg = new Work();
        $workimg->user_id = $request->user_id;
        $workimg->begin_date = $request->begin_date;
        $workimg->end_date = $request->end_date;
        $workimg->address_work = $request->address;
        $workimg->status_bill = 'ค้างชำระ';
        $workimg->status_work = 'รอดำเนินการ';
        $workimg->save();
        // return $workimg;

        // ลูบวนเก็บค่าตาราง workimg_detail
        foreach ($request->work as $works){
            $workimg2 = new WorkDetail();
            $workimg2->work_id = $workimg->id;
            $workimg2->working = $works;
            $workimg2->save();

            if ($works == 'ตัดปาล์ม'){
                $workimg2->kilo_palm = $request->kilo_palm;
                $workimg2->save();
            }
            elseif($works == 'ใส่ปุ๋ย'){
                $workimg2->unit_fertilizer = $request->unit_fertilizer;
                $workimg2->save();
            }
            else{
                $workimg2->farm_grass = $request->farm_grass;
                $workimg2->save();
            }
        }

        $details =  DB::table('work_details')->select('work_details.*')->where('work_id','like',$workimg->id)->get();
        // return $details;
        $sum = 0;
        $avg1 = 0;
        $avg2 = 0;
        $sack = 0;
        foreach( $details as $detail ){
            if( $detail->working == "ตัดหญ้า"){
                // return 1;
                $grass = $detail->farm_grass ;
                $sum = $grass * 500;
            }
            elseif($detail->working == "ตัดปาล์ม"){
                // return 2;
                $palm = $detail->kilo_palm ;
                $sum2 = $palm * 3;
                $avg1 = $sum2 * 0.3; //เงินที่เราได้จากการขาย 30 %
                $avg2 = $sum2 - $avg1 ; //เงินที่ลูกค้าได้จากการขาย และ ลบส่วนที่ต้องแบ่งให้คนจ้าง 30 %
            }
            else{
                // return 3;
                $fertilizer = $detail->unit_fertilizer ;
                $sum3 = $fertilizer / 50 ; // จำนวนต้น หาร กิโลต่อถุง -> หาจำนวนกระสอบ
                $sack = $sum3 * 600;
            }
        }

        return view('engage.addcreate',[ 'detail' => $details , 'price1' => $sum , 'price2' => $avg1 , 'price3' => $sack ]);
        // return redirect()->route('addcreate');
    }
}
