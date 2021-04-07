@extends('welcome')
@section('content')


<section id="cart_items">
    <div class="container">




        {{-- <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12 clearfix">

                </div>
            </div> --}}
           {{--  <div class="review-payment">
               <a style="color:red;font-weight: bold" href="{{URL::to('hien-thi')}}">Xem lại giỏ</a>
           </div> --}}
           <form action="{{URL::to('/hoan-tat')}}" method="post">
            {{csrf_field()}}<h2 style="text-align: center">Điền thông tin gửi hàng</h2>
            <div class="row">
                 <div class="col-sm-12 clearfix">
                        <div class="bill-to">

                            <div class="form-one">
                                      <input type="text" name="ten_ttkh" placeholder="Họ và tên">
                                    <input type="text" name="email_ttkh" placeholder="Email">

                                    <input type="text" name="diachi" placeholder="Địa chỉ">
                                    <input type="text" name="sdt_ttkh" placeholder="Phone">
                                    <textarea style="resize: none" cols="140"  rows="8" name="ghichu"  placeholder="Ghi chú đơn hàng " rows="16" ></textarea>
                            </div>

                        </div>
                    </div>
            </div>
                        <h2 style="text-align: left">Thanh toán:</h2>
            <div class="row">
                <div class="col">
                <label>Thanh toán khi nhận hàng:<input checked value="1" name="chon" type="checkbox"> </label>

                </div>
                <div class="col">  <label>Thanh toán online:<input value="2" name="chon" type="checkbox"> </label></div>
                <div class="col">
                    <button type="submit" class="btn">Đặt hàng</button>
                </div>





            </div></form>
  {{--          <form action="{{URL::to('/hoan-tat')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col">

                    <label>Thanh toán khi nhận hàng<input checked value="1" name="chon" type="checkbox"> </label>

                    <label><input value="2" name="chon" type="checkbox"> Thanh toán online</label>
   <label><input value="2" name="chon" type="checkbox"> Thanh toán online</label>

                </div>

            </div>
        </form> --}}
          {{--   <div class="payment-options">
                   <form action="{{URL::to('/hoan-tat')}}" method="post">
    {{csrf_field()}} <span>
                        <label><input checked value="1" name="chon" type="checkbox"> Thanh toán khi nhận hàng</label>

                        <label><input value="2" name="chon" type="checkbox"> Thanh toán online</label>
                    </span>

                </form>

            </div> --}}
        </div>
    </section> <!--/#cart_items-->

    @endsection
