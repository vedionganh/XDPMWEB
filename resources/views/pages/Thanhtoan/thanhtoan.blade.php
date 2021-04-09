{{-- @extends('welcome')
@section('content')

<section id="cart_items">
        <div class="container">
            <div class="shopper-informations">
                <div class="row">


                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <h2>Điền thông tin gửi hàng  </h2>
                            <div class="form-one">
                                <form action="{{URL::to('/payment')}}" method="POST">
                                    {{csrf_field()}}
                                      <input type="text" name="ten_ttkh" placeholder="Họ và tên">
                                    <input type="text" name="email_ttkh" placeholder="Email">

                                    <input type="text" name="diachi" placeholder="Địa chỉ">
                                    <input type="text" name="sdt_ttkh" placeholder="Phone">
                                    <textarea style="resize: none" cols="140"  rows="10" name="ghichu"  placeholder="Ghi chú đơn hàng " rows="16" ></textarea>

                                    <input type="submit" value="Gửi" name="send_order" class="btn">
                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
 --}}
