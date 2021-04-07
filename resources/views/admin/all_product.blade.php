
@extends('admin_welcome')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
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
          STT
    </th>

    <th>Tên sản phẩm</th>
    <th>Mô tả</th>
    <th>Giá</th>
    <th style="text-align:center">Hình</th>

    <th style="text-align:center">Danh mục</th>
    <th style="text-align:center">Hiển thị</th>
    <th>Quản lí</th>
    {{-- <th style="width:30px;"></th> --}}
</tr>
</thead>
<tbody>
  @foreach($all_product as $key => $value)
  <tr>
    <td style="text-align: center">{{$key+1}}</td>
    <td>{{$value->ten}}</td>
    <td>{{$value->mota}}</td>
    <td>{{$value->gia}}</td>
    <td style="text-align:center"><img src="public/uploads/sanpham/{{$value->hinh}}" alt=""height="100" width="100"></td>
    <td  style="text-align:center" >{{$value->tendm}}</td>
    <td style="text-align:center"><span class="text-ellipsis">
        <?php
         if($value->status==0)
         {?>
             <a href="{{URL::to('/active-product/'.$value->product_id)}}"  class="active" ui-toggle-class=""><i class="fa fa-times text-danger  text-active "></i></i></a>
         <?php
        }else
        {?>
            <a href="{{URL::to('/notactive-product/'.$value->product_id)}}"  class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active "></i></i></a>
      <?php }
       ?>
    </span></td>

    <td>
      <a href="{{URL::to('/edit-product/'.$value->product_id)}}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active "></i></i></a>
      <a onclick="return confirm('Bạn muốn xóa!!!')" href="{{URL::to('/delete-product/'.$value->product_id)}}" class="active" ui-toggle-class=""><i class="fa fa-trash text-danger text" style="margin-left: 20px"></i></a>
  </td>
</tr>
@endforeach
</tbody>
</table>
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
</div>{{-- <span>{!!$all_product->links()!!}</span> --}}
{{--  {{ $all_product->appends(Request::all())->links() }} --}}</div>


@endsection
