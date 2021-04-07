
@extends('admin_welcome')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê đơn đặt hàng
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
    <thead>
      <tr>
        <th style="width:20px;">
          <label class="i-checks m-b-none">STT
            <i></i>
        </label>
    </th>
    <th>Tên khách hàng</th>
    {{-- <th>Hình thức thanh toán</th> --}}

    <th>Tổng tiền</th>
    <th>Tình trạng</th>
    <th >Quản lí</th>
    <th style="width:30px;"></th>
</tr>
</thead>
<tbody>
    @foreach($all_order as$key =>$order)
    <tr>
        <td style="text-align: center"><label class="i-checks m-b-none">{{$key+1}}</label></td>
        <td>{{$order->tenkh}}</td>
        {{-- <td>{{$order->tenkh}};</td> --}}
        <td>{{$order->tienorder}}</td>
        <td>{{$order->tinhtrang}}</td>
{{--         <td><span class="text-ellipsis">
         <?php
         if($order->trangthai==0)
         {?>
             <a href="{{URL::to('/notactive/'. $order->danhmuc_id)}}"  style="margin-left: 20px" class="active" ui-toggle-class=""><i class="fa fa-times text-danger  text-active "></i></i></a>
         <?php
        }else
        {?>
            <a href="{{URL::to('/active/'.$order->danhmuc_id)}}" style="margin-left: 20px" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active "></i></i></a>
      <?php }
       ?>
   </span></td> --}}

   <td>
      <a style="margin-left: 17px"href="{{URL::to('/edit-order/'.$order->order_id)}}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active "></i></i></a>
     {{--  <a onclick="return confirm('Bạn muốn xóa!!!')" href="{{URL::to('/delete-order/'.$order->order_id)}}" class="active" ui-toggle-class=""><i class="fa fa-trash text-danger text" style="margin-left: 20px"></i></a> --}}
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
<footer class="panel-footer">
  <div class="row">


</div>
</footer>
</div>
</div>
@endsection
