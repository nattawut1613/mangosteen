@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ลงทะเบียนเสนอราคาสำหรับผู้ประมูล') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('เลือกผู้ประมูล') }}
                            </label>

                            <div class="col-md-6">
                                <select  name="type">
                                    <option value="farmer">เกรษตรกร</option>
                                    <option value="bidder">ผู้ประมูล</option>
                                </select>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">
                                {{ __('วันที่') }}
                            </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror"
                                name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub_around" class="col-md-4 col-form-label text-md-right">
                                {{ __('รอบเวลา') }}
                            </label>

                            <div class="col-md-6">
                                <input id="sub_around" type="text" class="form-control @error('sub_around') is-invalid @enderror"
                                name="sub_around" value="{{ old('sub_around') }}" required autocomplete="sub_around" autofocus>

                                @error('sub_around')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mang_id" class="col-md-4 col-form-label text-md-right">
                                {{ __('ไซร์') }}
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
                            <label for="sub_price" class="col-md-4 col-form-label text-md-right">
                                {{ __('เสนอราคา') }}
                            </label>

                            <div class="col-md-6">
                                <input id="sub_price" type="text"
                                       class="form-control{{ $errors->has('sub_price') ? ' is-invalid' : '' }}"
                                       name="sub_price" value="{{ old('sub_price') }}" required>

                                @if ($errors->has('sub_price'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sub_price') }}</strong>
                                    </span>
                                @endif
                            </div></div>

                       
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
