
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
                            @foreach ($farmers as $farmer )

                            <tr>

                                 @if( $farmer->id == null || $farmer->id == '' )
                                      <td>{{ Auth::user()->name }}</td>
                                  @else
                                      <td>{{ $farmer->name }}</td>
                                      <td>{{ $farmer->lastname }}</td>
                                      <td>{{ $farmer->mang_id}}</td>
                                      <td>{{ $farmer->send_amount}}</td>
                                  @endif


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
