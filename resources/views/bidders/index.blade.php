@extends('layouts.master') 

@section('content') 

    <div class="container">     
             
        <div class="panel-heading">แสดงข้อมลูส่วนตัว  </div> 
 
                <div class="panel-body"> 
 
                    <table class="table table-striped">                        
                         <tr> 
                            <th>รหัสผู้ประมูล</th> 
                                                  
                            <th>ชื่อผู้ประมูล</th>                            
                            <th>ที่อยู่ของผู้ประมูล</th>
                            <th>เบอร์โทร</th> 
                            <th>เลขบัญชี</th>
                            <th>ธนาคาร</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>รหัสผ่าน</th>
                            <th>แก้ไขข้อมูล</th>
                        </tr>                        
                         @foreach ($bidders as $bidder)   
                                                
                          <tr>                            
                               <td>{{ $bidder->id }}</td>
                                                           
                                <td>{{ $bidder->b_name }}</td> 
                                <td>{{ $bidder->b_address }}</td> 
                                <td>{{ $bidder->b_tel }}</td> 
                                <td>{{ $bidder->b_account }}</td> 
                                <td>{{ $bidder->b_bank }}</td> 
                                <td>{{ $bidder->b_user }}</td> 
                                <td>{{ $bidder->b_pass }}</td>
                                
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

