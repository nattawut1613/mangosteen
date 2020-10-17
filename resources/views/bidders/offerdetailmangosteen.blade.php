@extends('layouts.cus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
             
                    
                   
                     <center>
                      <div class="card-body">
                       
                    <form method="POST" action="{{ route('register') }}">
                        <table>
                        <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div>

                       
                        <tr>
                            <th>รหัส</th>
                            <th>ไซร์</th>
                            <th>ราคา (บาท)</th>
                          </tr>
                        <tr>
                        <td>1</td>
                         <td>มันรวม</td>
                        
                        <td><div class="col-md-6">
                            <input id="send_amount" type="DECIMAL(10,2)"
                                   class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                   name="send_amount" value="{{ old('send_amount') }}" required>

                            @if ($errors->has('send_amount'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('send_amount') }}</strong>
                                </span>
                            @endif
                        </div></div></td>
                      </tr>

                    </tr>

                    {{-- <div class="card-body">
                  <form method="POST" action="{{ route('register') }}"> --}}
                    <tr>
                      <td>2</td>
                      <td>มันลาย</td>
                      <td><div class="col-md-6">
                          <input id="send_amount" type="DECIMAL(10,2)"
                                 class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                 name="send_amount" value="{{ old('send_amount') }}" required>

                          @if ($errors->has('send_amount'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('send_amount') }}</strong>
                              </span>
                          @endif
                      </div></div></td>
                    </tr>

                </tr>
                {{-- <div class="card-body">
              <form method="POST" action="{{ route('register') }}"> --}}
                <tr>
                  <td>3</td>
                  <td>กาก</td>
                  <td><div class="col-md-6">
                      <input id="send_amount" type="DECIMAL(10,2)"
                             class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                             name="send_amount" value="{{ old('send_amount') }}" required>

                      @if ($errors->has('send_amount'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('send_amount') }}</strong>
                          </span>
                      @endif
                  </div></div></td>
                </tr>
            </tr>
            {{-- <div class="card-body">
          <form method="POST" action="{{ route('register') }}"> --}}
            <tr>
              <td>4</td>
              <td>มันจิ๋ว</td>
              <td><div class="col-md-6">
                  <input id="send_amount" type="DECIMAL(10,2)"
                         class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                         name="send_amount" value="{{ old('send_amount') }}" required>

                  @if ($errors->has('send_amount'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('send_amount') }}</strong>
                      </span>
                  @endif
              </div></div></td>
            </tr>
         </tr>
            {{-- <div class="card-body">
         <form method="POST" action="{{ route('register') }}"> --}}
            <tr>
             <td>5</td>
              <td>ตกไซร์</td>
                 <td><div class="col-md-6">
              <input id="send_amount" type="DECIMAL(10,2)"
                     class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                     name="send_amount" value="{{ old('send_amount') }}" required>

              @if ($errors->has('send_amount'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('send_amount') }}</strong>
                  </span>
              @endif
          </div></div></td>
        </tr>
    </tr>
    {{-- <div class="card-body">
  <form method="POST" action="{{ route('register') }}"> --}}
    <tr>
      <td>6</td>
      <td>ดำ</td>
      <td><div class="col-md-6">
          <input id="send_amount" type="DECIMAL(10,2)"
                 class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                 name="send_amount" value="{{ old('send_amount') }}" required>

          @if ($errors->has('send_amount'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('send_amount') }}</strong>
              </span>
          @endif
      </div></div></td>
    </tr>
</tr>
{{-- <div class="card-body">
<form method="POST" action="{{ route('register') }}"> --}}
<tr>
  <td>7</td>
  <td>แตก</td>
  <td><div class="col-md-6">
      <input id="send_amount" type="DECIMAL(10,2)"
             class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
             name="send_amount" value="{{ old('send_amount') }}" required>

      @if ($errors->has('send_amount'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('send_amount') }}</strong>
          </span>
      @endif
  </div></div></td>
</tr>

                    </table>
                   
                    
                    
                    </body>
                    
                 
                </body>
                        
                    </form>
                    
                </div>
                
            </center>
            <div class="form-group row mb-0" >
                <div class="col-md-6 offset-md-4" >
                    <button type="submit" class="btn btn-primary" style="
                    border-left-width: 1px;
                    margin-left: 25px;
                " >
                        {{ __('ยืนยัน') }}
                    </button>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
