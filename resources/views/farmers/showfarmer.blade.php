
@extends('layouts.master')

@section('css')
@endsection
@section('content')


    <div class="container">



                    <div class="panel-heading">ตรวจสอบมังคุด</div>

                <div class="panel-body">

                    <table class="table table-striped">
                         <tr>

                            <th>ชื่อเกษตรกร</th>
                            <th>นามสกุล</th>
                            <th>ไซร์</th>
                            <th>จำนวน (กิโลกรัม)</th>

                          </tr>
                        <tr>


                            @foreach ($date as $index )

                            <tr>

                                      <td>{{ $index->name }}</td>
                                      <td>{{ $index->lastname }}</td>
                                      <td>{{ $index->mang_size}}</td>
                                      <td>{{ $index->send_amount}}</td>





                              </tr>
                               @endforeach



                               </table>


                             </table>




            </div>
        </div>


    </div>
</div>


 @endsection

 @section('js')
@endsection
