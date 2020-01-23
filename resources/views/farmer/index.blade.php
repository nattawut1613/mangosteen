
@extends('layouts.app') 

 
@section('content') 
@yield('css')

    <div class="container">     
    <div class="row">        
    <div class="col-md-10 col-md-offset-1">             
    <div class="panel panel-default">               
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
                         @foreach ($farmer as $farmer)                        
                          <tr>                            
                               <td>{{ $farmer->id }}</td>                            
                                <td>{{ $farmer->far_name }}</td> 
                                <td>{{ $farmer->far_address }}</td> 
                                <td>{{ $farmer->far_tel }}</td> 
                                <td>{{ $farmer->far_account }}</td> 
                                <td>{{ $farmer->far_bank }}</td> 
                                <td>{{ $farmer->far_user }}</td> 
                                <td>{{ $farmer->far_pass }}</td>
                                
                                <td><a href="{{ url('/farmer/destroy/'.$farmer->id)  }}">แก้ไข</a></td>
                                

                            </tr>                        
                        @endforeach                    
                             </table> 

                             <main class="py-4">
                                @yield('content')
                            </main>
 
                </div>             
            </div>         
        </div> 

 
    </div> 
</div>
 @endsection 

