@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
             
                    
                   
                     <center>
                      <div class="card-body">
                       
{!! Form::open(['route' => 'addstoresenddetail', 'method' => 'post', 'files'=>true ]) !!}

@csrf
                    {{-- <form method="POST" action="{{ route('addstoresenddetail') }}"> --}}
                        <table>
                        <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div>

                       
                        <tr>
                            <th>รหัส</th>
                            <th>ไซร์</th>
                            <th>จำนวน (กิโลกรัม)</th>
                          </tr>
                        <tr>
                        <td>1</td>
                        <td>
                            <input id="send_amount" type="checkbox"
                                   class="form-control"
                                   name="mango_id[]" value="1"></td>
                         <td>มันรวม</td>
                        
                        <td><div class="col-md-6">
                            <input id="send_amount" type="DECIMAL(10,2)"
                                   class="form-control"
                                   name="send_amount[]">
                        </div></div></td>
                      </tr>

                    </tr>

                    {{-- <div class="card-body">
                  <form method="POST" action="{{ route('register') }}"> --}}
                    <tr>
                    <td>2</td>
                      <td>
                        <input id="send_amount" type="checkbox"
                               class="form-control"
                               name="mango_id[]" value="2"></td>
                      <td>มันลาย</td>
                      <td><div class="col-md-6">
                          <input id="send_amount" type="DECIMAL(10,2)"
                                 class="form-control"
                                 name="send_amount[]">
                      </div></div></td>
                    </tr>

                </tr>
                {{-- <div class="card-body">
              <form method="POST" action="{{ route('register') }}"> --}}
                <tr>
                  <td>3</td>
                  <td>
                    <input id="send_amount" type="checkbox"
                           class="form-control"
                           name="mango_id[]" value="3"></td>
                  <td>กาก</td>
                  <td><div class="col-md-6">
                      <input id="send_amount" type="DECIMAL(10,2)"
                             class="form-control"
                             name="send_amount[]">
                  </div></div></td>
                </tr>
            </tr>
            {{-- <div class="card-body">
          <form method="POST" action="{{ route('register') }}"> --}}
            <tr>
              <td>4</td>
              <td>
                <input id="send_amount" type="checkbox"
                       class="form-control"
                       name="mango_id[]" value="4"></td>
              <td>มันจิ๋ว</td>
              <td><div class="col-md-6">
                  <input id="send_amount" type="DECIMAL(10,2)"
                         class="form-control"
                         name="send_amount[]">
              </div></div></td>
            </tr>
         </tr>
            {{-- <div class="card-body">
         <form method="POST" action="{{ route('register') }}"> --}}
            <tr>
             <td>5</td>
             <td>
                <input id="send_amount" type="checkbox"
                       class="form-control"
                       name="mango_id[]" value="5" ></td>
              <td>ตกไซร์</td>
                 <td><div class="col-md-6">
              <input id="send_amount" type="DECIMAL(10,2)"
                     class="form-control"
                     name="send_amount[]">
          </div></div></td>
        </tr>
    </tr>
    {{-- <div class="card-body">
  <form method="POST" action="{{ route('register') }}"> --}}
    <tr>
      <td>6</td>
      <td>
        <input id="send_amount" type="checkbox"
               class="form-control"
               name="mango_id[]" value="6"></td>
      <td>ดำ</td>
      <td><div class="col-md-6">
          <input id="send_amount" type="DECIMAL(10,2)"
                 class="form-control"
                 name="send_amount[]">
      </div></div></td>
    </tr>
</tr>
{{-- <div class="card-body">
<form method="POST" action="{{ route('register') }}"> --}}
<tr>
  <td>7</td>
  <td>
    <input id="send_amount" type="checkbox"
           class="form-control"
           name="mango_id[]" value="7"></td>
  <td>แตก</td>
  <td><div class="col-md-6">
      <input id="send_amount" type="DECIMAL(10,2)"
             class="form-control"
             name="send_amount[]">

  </div></div></td>
</tr>

                    </table>
                   
                    
                    
                    </body>
                    
                 
                </body>

                <div class="form-group row mb-0" >
                    
                        <button type="submit" class="btn btn-primary" style="
                        border-left-width: 1px;
                        margin-left: 25px;
                    " >
                            {{ __('ยืนยัน') }}
                        </button>
                    </div>
                </div>
                        
{!! Form::close() !!}
                    
                </div>
                
            </center>
            
            
            </div>
        </div>
    </div>
</div>
@endsection
