@extends('welcome')
@section('content')

<section id="cart_items">
        <div class="container">




            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <h2>Đặt hàng thành công!!!</h2>


                        </div>
                    </div>

                </div>
            </div>
       {{--      <div class="review-payment">
               <a href="{{URL::to('hien-thi')}}">Xem lại giỏ</a>
            </div> --}}

{{--
            <div class="payment-options">
                    <span>
                        <label><input type="checkbox"> Direct Bank Transfer</label>
                    </span>
                    <span>
                        <label><input type="checkbox"> Check Payment</label>
                    </span>
                    <span>
                        <label><input type="checkbox"> Paypal</label>
                    </span>
                </div> --}}
        </div>
    </section> <!--/#cart_items-->

@endsection
