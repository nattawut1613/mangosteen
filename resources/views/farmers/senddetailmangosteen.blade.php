@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('รับมังคุดจากเกษตรกร') }}</div>

              
                <body>
                    
                    <table>
                      <tr>
                        <th>รหัส</th>
                        <th>ไซร์</th>
                        <th>ป้อนราคา (บาท)</th>
                      </tr>
                      
                    </table>
                    
                    </body>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                        @csrf
                        <div class="form-group row">                    

                        <div class="form-group row">
                            <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                {{ __('มันรวม') }}
                            </label>

                            <div class="col-md-6">
                                <input id="mang_id" type=""
                                       class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                       name="mang_id" value="{{ old('mang_id') }}" required>

                                @if ($errors->has('mang_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mang_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                       
                        </div>
                        
                        <div class="form-group row">
                            <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                
                            </label>

                            <div class="col-md-6">
                                <input id="send_amount" type="text"
                                       class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                       name="send_amount" value="{{ old('send_amount') }}" required>

                                @if ($errors->has('send_amount'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('send_amount') }}</strong>
                                    </span>
                                @endif
                            </div></div>
                            <div class="form-group row">
                                <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                    {{ __('มันลาย') }}
                                </label>
    
                                <div class="col-md-6">
                                    <input id="mang_id" type="text"
                                           class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                           name="mang_id" value="{{ old('mang_id') }}" required>
    
                                    @if ($errors->has('mang_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mang_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
    
                           
                            </div>
                            
                            <div class="form-group row">
                                <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                
                                </label>
    
                                <div class="col-md-6">
                                    <input id="send_amount" type="text"
                                           class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                           name="send_amount" value="{{ old('send_amount') }}" required>
    
                                    @if ($errors->has('send_amount'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('send_amount') }}</strong>
                                        </span>
                                    @endif
                                </div></div>

                                <div class="form-group row">
                                    <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                        {{ __('กาก') }}
                                    </label>
        
                                    <div class="col-md-6">
                                        <input id="mang_id" type="text"
                                               class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                               name="mang_id" value="{{ old('mang_id') }}" required>
        
                                        @if ($errors->has('mang_id'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('mang_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
        
                               
                                </div>
                                
                                <div class="form-group row">
                                    <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                       
                                    </label>
        
                                    <div class="col-md-6">
                                        <input id="send_amount" type="text"
                                               class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                               name="send_amount" value="{{ old('send_amount') }}" required>
        
                                        @if ($errors->has('send_amount'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('send_amount') }}</strong>
                                            </span>
                                        @endif
                                    </div></div>
                                    <div class="form-group row">
                                        <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                            {{ __('มันจิ๋ว') }}
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="mang_id" type="text"
                                                   class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                                   name="mang_id" value="{{ old('mang_id') }}" required>
            
                                            @if ($errors->has('mang_id'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('mang_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
            
                                   
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                            
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="send_amount" type="text"
                                                   class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                                   name="send_amount" value="{{ old('send_amount') }}" required>
            
                                            @if ($errors->has('send_amount'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('send_amount') }}</strong>
                                                </span>
                                            @endif
                                        </div></div>
                                        <div class="form-group row">
                                            <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                                {{ __('ตกไซร์') }}
                                            </label>
                
                                            <div class="col-md-6">
                                                <input id="mang_id" type="text"
                                                       class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                                       name="mang_id" value="{{ old('mang_id') }}" required>
                
                                                @if ($errors->has('mang_id'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mang_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                
                                       
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                               
                                            </label>
                
                                            <div class="col-md-6">
                                                <input id="send_amount" type="text"
                                                       class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                                       name="send_amount" value="{{ old('send_amount') }}" required>
                
                                                @if ($errors->has('send_amount'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('send_amount') }}</strong>
                                                    </span>
                                                @endif
                                            </div></div>
                                            <div class="form-group row">
                                                <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                                    {{ __('ดำ') }}
                                                </label>
                    
                                                <div class="col-md-6">
                                                    <input id="mang_id" type="text"
                                                           class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                                           name="mang_id" value="{{ old('mang_id') }}" required>
                    
                                                    @if ($errors->has('mang_id'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mang_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                    
                                           
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                                   
                                                </label>
                    
                                                <div class="col-md-6">
                                                    <input id="send_amount" type="text"
                                                           class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                                           name="send_amount" value="{{ old('send_amount') }}" required>
                    
                                                    @if ($errors->has('send_amount'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('send_amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div></div>
                                                <div class="form-group row">
                                                    <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                                        {{ __('แตก') }}
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="mang_id" type="text"
                                                               class="form-control{{ $errors->has('mang_id') ? ' is-invalid' : '' }}"
                                                               name="mang_id" value="{{ old('mang_id') }}" required>
                        
                                                        @if ($errors->has('mang_id'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('mang_id') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                        
                                               
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="send_amount" class="col-md-4 col-form-label text-md-right">
                                                      
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="send_amount" type="text"
                                                               class="form-control{{ $errors->has('send_amount') ? ' is-invalid' : '' }}"
                                                               name="send_amount" value="{{ old('send_amount') }}" required>
                        
                                                        @if ($errors->has('send_amount'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('send_amount') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div></div>
                        </div>
                        
                        
                    </div>
                        


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ยืนยัน') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
