@extends('welcome')
@section('content')

@foreach($chi_tiet as $key=>$ct)
<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{URL::to('public/uploads/sanpham/'.$ct->hinh)}}"width="100%" id="productImg">

                <div class="small-img-row">
                    <div class="small-img-rol">
                        <img src="{{URL::to('public/uploads/sanpham/'.$ct->hinh)}}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="{{URL::to('public/uploads/sanpham/'.$ct->hinh)}}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="{{URL::to('public/uploads/sanpham/'.$ct->hinh)}}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-rol">
                        <img src="{{URL::to('public/uploads/sanpham/'.$ct->hinh)}}" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">

                <p>Home / {{$ct->tendm}}</p>
                <h1>{{$ct->ten}}</h1>
                <form action="{{URL::to('/them-gio')}}" method="post">
                    {{csrf_field()}}
                <h4>{{number_format($ct->gia).' '.'VNĐ'}}</h4><p>
                    <b>Tình trạng:</b> <span style="color: green; font-size: 15px">còn hàng</span>
                <select>
                    <option>Chọn Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </section>

                    <input name="soluong" type="number" min=1 max=9 value="1">{{-- input type="submit" name=""class="btn" value="Thêm vào giỏ"> --}}
                    <input name="product_id_hide" type="hidden" value="{{$ct->product_id}}">
                    <button type="submit" class="btn" > Thêm vào giỏ hàng </button>
                </form>
                    <h3>Chi tiết sản phẩm
                        <i class="fa fa-indent"></i>
                    </h3>
                    <br>
                    <span>{!!$ct->mota!!}</span>
            </div>
        </div>
    </div>
@endforeach
    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2 >Sản phẩm liên quan</h2>
            {{-- <a href="" ><p style="color: blue">View More</p></a> --}}
<p></p>

        </div>
    </div>
      <div class="small-container">

        <div class="row">
            @foreach($splq as $key =>$lq)
            <div class="col-4">
                <a href="{{URL::to('/chi-tiet/'. $lq->product_id)}}"><img src="{{URL::to('public/uploads/sanpham/'. $lq->hinh)}}"></a>
        <a href="{{URL::to('/chi-tiet/'. $lq->product_id)}}"><h4>{{$lq->ten}}</h4></a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>{{number_format($lq->gia).' '.'VNĐ'}}</p>
            </div>


           @endforeach
        </div>
        </div>
@endsection()

