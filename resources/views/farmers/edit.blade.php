@extends('layouts.app') 
 
@section('content') 
    <div class="container">     
        <div class="row">         
            <div class="col-md-10 col-md-offset-1"> 
                <div class="panel panel-default">                   
                    <div class="panel-heading">แก้ไขข้อมลู {{ $farmer->far_name }}</div>                
                         <div class="panel-body"> 
 
                            @if (count($errors) > 0)                    
                        <div class="alert alert-warning">                         
                            <ul>                             
                            @foreach ($errors->all() as $error)                             
                                <li>{{ $error }}</li>                            
                            @endforeach                         
                            </ul>                     
                        </div>                     
                            @endif 

                            <?= Form::model($farmer, array('url' => 'farmer/' . $farmer->id, 'method' => 'put')) ?> 


        <div class="col-xs-8">                        
             <div class="form-group">                             
                <?= Form::label('far_name', 'ชือ'); ?>                             
                    <?= Form::text('far_name', null, ['class' => 'form-control', 'placeholder' => 'ชือหนงัสอื']); ?>    
         </div>                     
             </div> 

         <!-- <div class="col-xs-4">                         
            <div class="form-group">                             
                {!! Form::label('price', 'ราคา');  !!}                            
                 {!! Form::text('price',null,['class' => 'form-control','placeholder' => 'เช่น 100, 100.25']); !!}     
                 
        </div>                     
            </div>  -->
            @yield('js')
    @endsection