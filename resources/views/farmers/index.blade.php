
@extends('layouts.master') 

@section('css')
@endsection
@section('content') 


    <div class="container">     
       
                        
                            
                    <div class="panel-heading">ข้อมลูส่วนตัวเกษตรกร</div> 
 
                <div class="panel-body"> 
 
                    <table class="table table-striped">                        
                         <tr> 
                            <th>รหัสเกษตรกร</th>                           
                            <th>ชื่อเกษตรกร</th>  
                            <th>นามสกุล</th>                         
                            <th>ที่อยู่ของเกษตรกร</th>
                            <th>เบอร์โทร</th> 
                            <th>เลขบัญชี</th>
                            <th>ธนาคาร</th>

                            <th>แก้ไขข้อมูล</th>
                        </tr>                        
                         @foreach ($farmers as $farmer)   
                                                
                          <tr>                            
                               <td>{{ $farmer->id }}</td>
                               @if( $farmer->id == null || $farmer->id == '' )                            
                                    <td>{{ Auth::user()->name }}</td> 
                                @else
                                    <td>{{ $farmer->name }}</td> 
                                    <td>{{ $farmer->lastname }}</td> 
                                @endif
                                <td>{{ $farmer->address }}</td> 
                                <td>{{ $farmer->tel }}</td> 
                                <td>{{ $farmer->account }}</td> 
                                <td>{{ $farmer->bank }}</td> 
                                
                                
                                
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
