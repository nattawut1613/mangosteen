
@extends('layouts.master') 

@section('css')
@endsection
@section('content') 


    <div class="container">     
       
                        
                            
                    <div class="panel-heading">แสดงข้อมลูส่วนตัว  </div> 
 
                <div class="panel-body"> 
 
                    <table class="table table-striped">                        
                         <tr> 
                            <th>รหัสเกษตรกร</th>                           
                            <th>ชื่อเกษตรกร</th>                            
                            <th>ที่อยู่ของเกษตรกร</th>
                            <th>เบอร์โทร</th> 
                            <th>เลขบัญชี</th>
                            <th>ธนาคาร</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>รหัสผ่าน</th>
                            <th>แก้ไขข้อมูล</th>
                        </tr>                        
                         @foreach ($farmers as $farmer)   
                                                
                          <tr>                            
                               <td>{{ $farmer->id }}</td>
                               @if( $farmer->id == null || $farmer->id == '' )                            
                                    <td>{{ Auth::user()->name }}</td> 
                                @else
                                    <td>{{ $farmer->far_name }}</td> 
                                @endif
                                <td>{{ $farmer->far_address }}</td> 
                                <td>{{ $farmer->far_tel }}</td> 
                                <td>{{ $farmer->far_account }}</td> 
                                <td>{{ $farmer->far_bank }}</td> 
                                <td>{{ $farmer->far_user }}</td> 
                                <td>{{ $farmer->far_pass }}</td>
                                
                                <td>
                                    <a href="{{ url('/farmers/'.$farmer->id.'/edit') }}">แก้ไข</a>
                                </td>
                                

                            </tr>                        
                             @endforeach                    
                             </table> 

                             
 
                            
            </div>         
        </div> 

 
    </div> 
</div>


 @endsection 

 @section('js')
@endsection
