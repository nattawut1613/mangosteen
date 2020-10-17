@extends('layouts.cus') 

@section('content') 

    <div class="container">     
             
        <div class="panel-heading">ข้อมลูส่วนตัวผู้ประมูล  </div> 
 
                <div class="panel-body"> 
 
                    <table class="table table-striped">                        
                         <tr> 
                            <th>รหัสผู้ประมูล</th>                                                   
                            <th>ชื่อผู้ประมูล</th> 
                            <th>นามสกุล</th>                           
                            <th>ที่อยู่ของผู้ประมูล</th>
                            <th>เบอร์โทร</th> 
                            <th>เลขบัญชี</th>
                            <th>ธนาคาร</th>
                            
                            <th>แก้ไขข้อมูล</th>
                        </tr>                        
                         @foreach ($bidders as $bidder)   
                                                
                          <tr>                            
                               <td>{{ $bidder->id }}</td>
                                                           
                                <td>{{ $bidder->name }}</td> 
                                <td>{{ $bidder->lastname }}</td>
                                <td>{{ $bidder->address }}</td> 
                                <td>{{ $bidder->tel }}</td> 
                                <td>{{ $bidder->account }}</td> 
                                <td>{{ $bidder->bank }}</td> 
                               
                                
                                <td>
                                    <a href="{{ url('/bidders/'.$bidder->id.'/edit') }}">แก้ไข</a>
                                </td>
                                

                            </tr>                        
                             @endforeach                    
                             </table> 
             
            </div>         
        </div> 

 
    </div> 
</div>


 @endsection 

