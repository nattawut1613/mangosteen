@extends('layouts.app')

@section('content')


   
        <style>
         .uper {
              margin-top: 40px;
                }
        </style>

<center>
    <div class="card uper" style="width: 502px;">
        <div class="card-header" >
             เเก้ไขข้อมูลเกษตรกร
                </div>
            <div class="card-body">
             @if ($errors->any())
             <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('farmers.update', $farmer->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">ชื่อเกษตรกร:</label>
          <input type="text" class="form-control" name="far_name" style="  width: 426px;  height: 38px; " value={{ $farmer->far_name }} />
        </div>
        <div class="form-group">
          <label for="price">ที่อยู่ :</label>
          <input type="text" class="form-control" name="far_address" style="  width: 426px;  height: 38px; " value={{ $farmer->far_address }} />
        </div>
        <div class="form-group">
          <label for="quantity">เบอร์โทร:</label>
          <input type="text" class="form-control" name="far_tel" style="  width: 426px;  height: 38px; " value={{ $farmer->far_tel }} />
        </div>

        <div class="form-group">
          <label for="quantity">เลขบัญชี:</label>
          <input type="text" class="form-control" name="far_account" style="  width: 426px;  height: 38px; " value={{ $farmer->far_account }} />
        </div>

        <div class="form-group">
          <label for="quantity">ธนาคาร:</label>
          <input type="text" class="form-control" name="far_bank" style="  width: 426px;  height: 38px; " value={{ $farmer->far_bank }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</center>
@endsection