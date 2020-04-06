@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('หน้ารับมังคุดจากเกษตรกร') }}</div>

                

                <div class="card-body">
                    <form method="POST" action="{{ route('addstore') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('เลือกเกษตรกร') }}
                            </label>

                            @foreach ( $farmers as $index )

                            <div class="col-md-6">
                                <select  name="name">
                                    <option value="name"> {{ $index->per }} {{ $index->name }} {{ $index->lastname }} </option>
                                </select>
                            </div>       

                            @endforeach

                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">
                                {{ __('วันที่') }}
                            </label>

                            <div class="col-md-6">
                                <input id="send_date" type="date" class="form-control @error('date') is-invalid @enderror"
                                name="send_date" value="{{ old('send_date') }}" required autocomplete="date	" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="send_around" class="col-md-4 col-form-label text-md-right">
                                {{ __('รอบเวลา') }}
                            </label>

                            <div class="col-md-6">
                                <input id="send_around" type="time" class="form-control @error('send_around') is-invalid @enderror"
                                name="send_around" value="{{ old('send_around') }}" required autocomplete="send_around" autofocus>

                                @error('send_around')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                       

                       
                        </div></div>

                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
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
