
@extends('layouts.cus')

@section('content')
    <div class="card-body">
      <form method="POST" action="{{ route('auction') }}">

        @csrf
    <div class="card-body">
      <div class="table-responsive">
        <div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ไซร์: activate to sort column descending" style="width: 71.4px;">ไซร์</th>
              
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 109px;">ราคา</th>
              
              </tr>
          </thead>
      
          <tbody>
            
       
          <tr role="row" class="odd">
         
            
             

             <tr role="row" class="odd">
              <td class="sorting_1"> มันรวม</td>
            </tr>
              
              
              <tr role="row" class="even">
              <td class="sorting_1"> มันลาย</td>
            </tr>
             
             
            <tr role="row" class="odd">
              <td class="sorting_1"> กาก</td>
            </tr>
              
              
            <tr role="row" class="even">
              <td class="sorting_1">จิ๋ว</td>
            </tr>
            
            <tr role="row" class="odd">
              <td class="sorting_1"> ตกไซร์</td>
            </tr>
            
              
            <tr role="row" class="even">
              <td class="sorting_1"> ดำ</td>
            </tr>
              
             
            <tr role="row" class="odd">
              <td class="sorting_1">แตก</td>
            </tr>
           



             
           
         
           </form>
           
           
            
           
        
      </div>
      
    </div>
    
  </div>
  <button type="submit">ประมูล</button>
  <!-- End of Page Wrapper -->

  @endsection


