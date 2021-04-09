
@extends('admin_welcome')
@section('admin_content')


<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết đơn hàng <span style="color:red">Tổng:{{($s->tienorder).' '.'VNĐ'}}</span>
  </div>

  <div class="table-responsive">
      <?php
      $message=Session::get('message');
      if($message)
      {
        echo $message;
        Session::put('message',null);
    }
    ?>
    <table class="table table-striped b-t b-light">

          <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>số lượng</th>
            <th>Tổng tiền</th>



        </tr>@foreach($dat_hang as $key=>$s)
          <tr>
            <td>
                {{$s->ten}}
            </td>
            <td>{{number_format($s->gia).' '.'VNĐ'}}</td>
            <td>{{$s->soluong}}</td>
            <td> {{number_format($s->gia*$s->soluong).' '.'VNĐ'}}</td>


        </tr>
@endforeach
</table>
</div>

</div>
</div>
@endsection
