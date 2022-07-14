@extends('admin_layout')
@section('admin_content')

        
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        LIST PRODUCT
      </div>
      
      <div class="table-responsive">
        <?php $message = Session::get('message');
          if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);   
          }
        ?>
        <form>
          @csrf
        <table id="myTables" class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>No. </th>
              <th>Voucher Name</th>
              <th>Voucher Code</th>
              <th>Voucher Amount</th>
              <th>Voucher Condition</th>
              <th>Voucher Percent Discount</th>
              <th style="width:30px;">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_voucher as $key => $pro)
            <tr>
                <td>{{$key+1}}</td>
              <td>{{($pro->voucher_name)}}</td>
              <td>{{($pro->voucher_code)}}</td>
              <td>{{($pro->voucher_amount)}}</td>
              <td>{{$pro->voucher_condition}}</td>
              <td>{{$pro->voucher_percent_discount}}</td>
              
              <td>
                {{-- <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="editPro" ui-toggle-class="">
                  <i class="fa fa-pencil-square text-success text-active"></i> </a>
                  <br> --}}
                <a data-voucher_id="{{$pro->voucher_id}}" class="del_voucher" ui-toggle-class="">
                  <i class="fa fa-trash text-danger text"></i></a>
              </td>
            </tr>
            @endforeach          
          </tbody>
        </table>
      </form>
      </div>
      {{-- <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer> --}}
    </div>
  </div>
@endsection