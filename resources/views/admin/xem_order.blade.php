
@extends('admin_welcome')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Thông tin đặt hàng
    </div>

    <div class="table-responsive">
      <?php
      $message=Session::get('message');
      if($message)
      {
        echo $message;
        Session::put('message',null);
    }
    ?>@foreach($dat_hang as $s)@endforeach
    <table class="table table-striped b-t b-light">

      <tr>
       {{--  <th>Tên tài khoản</th> --}}
        <th>Người đặt hàng</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ giao hàng</th>
        <th>Ghi chú</th>
 <th>Thanh toán</th>
        </tr>
         <tr>
            {{-- <td>
                {{$s->tenkh}}
            </td> --}}
            <td>{{$s->ten_ttkh}}</td>
            <td> {{$s->sdt_ttkh}}</td>
            <td>{{$s->email_ttkh}}</td>
            <td>{{$s->diachi}}</td>
            <td>{{$s->ghichu}}</td>
              <td>
                <?php
                if($s->phuongthuc==1)
                    echo 'Thanh toán khi nhận hàng';
                ?>
               </td>
        </tr>

</table>
</div>

</div>
</div>

</div>
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
