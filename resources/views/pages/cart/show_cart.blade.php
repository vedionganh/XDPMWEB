@extends('welcome')
@section('content')

    <div class="small-container cart-page">
        <h2 style="text-align: center; font-family:Times New Roman;font-size: 30px ">Giỏ hàng <i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
        <?php
        $content=Cart::content();

        ?>
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            @foreach($content as $ht)
            <tr>

                <td>
                    <div class="cart-info">
                        <img src="{{asset('public/uploads/sanpham/'.$ht->options->image)}}" width="50" height="50">
                        <div>
                            <p>{{$ht->name}}</p>
                            <small>{{number_format($ht->price).' '.'VNĐ'}}</small>
                            <br>
                            <a href="{{URL::to('/xoa-sp/'.$ht->rowId)}}"><i class="fa fa-trash" aria-hidden="true" height=20></i>Xóa</i></a>
                        </div>
                    </div>
                </td> <form action="{{URL::to('/cap-nhat')}}" method="post">
                <td  style="text-align: center">

                        {{csrf_field()}}
                    <input name="sl" min=1 max=9 type="number" value="{{$ht->qty}}"><input  type="hidden" value="{{$ht->rowId}}" name=idrow><button  name="capnhat" type="submit" class="btn">Cập nhật</button>

                <td> </form><?php $tong=$ht->price*$ht->qty;
                echo number_format($tong ).' '.'VNĐ'?></td>
            </tr>
@endforeach

        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Tổng</td>
                    <td>{{(cart::subtotal()).' '.'VNĐ'}}</td>
                </tr>
                {{-- <tr>
                    <td>Thuế</td>
                    <td>{{(cart::tax()).' '.'VNĐ'}}</td>
                </tr> --}}
                <tr>
                    <td>Thành tiền</td>
                    <td style="color:red; font-weight: bold">{{(cart::subtotal()).' '.'VNĐ'}}</td>

                </tr>
                <tr>
                   <td>
                       {{-- <a href="{{URL::to('/lo-gin')}}" class="btn">Thanh toán</a> --}}
                       <?php
                        $id_kh=Session::get('khachhang_id');
                        if($id_kh!=NULL){

                         ?>
                         <a  class="btn" href="{{URL::to('payment')}}">Thanh toán</a>
                         <?php
                     }else{

                      ?>
                        <a class="btn"  href="{{URL::to('/lo-gin')}}">Thanh toán</a>
                      <?php } ?>
                   </td>
                </tr>
            </table>

        </div>


    </div>

@endsection
