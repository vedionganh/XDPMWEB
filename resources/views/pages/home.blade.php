@extends('welcome')


@section('discount')
<div class="small-container">
    <div class="row">
        <div class="col-3">
            <img src="{{asset('public/frontend/images/category-1.jpg')}}">
        </div>
        <div class="col-3">
            <img src="{{asset('public/frontend/images/category-2.jpg')}}">
        </div>
        <div class="col-3">
            <img src="{{asset('public/frontend/images/category-3.jpg')}}">
        </div>

    </div>
</div>
@endsection
@section('the-end')
 <div class="offer" >
<div class="small-container">
            <div class="row">
                <div class="col-2"><img src="{{asset('public/frontend/images/exclusive.png')}}" class="offer-img"> </div>
                <div class="col-2">
                    <p>Exclusive Availabble on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>
                        The Mi Smart Band 4 features a 39.9% larger (than Mi Band 4) AMOLED color full-touch display
                        with
                        adjustable brightness, so everything is clear as can be</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')


<h2 class="title">Sản phẩm nổi bật</h2>
<div class="row">
    @foreach($all_product as $key =>$product)
    <div class="col-4">
        <a href="{{URL::to('/chi-tiet/'. $product->product_id)}}"><img src="{{URL::to('public/uploads/sanpham/'. $product->hinh)}}"></a>
        <a href="{{URL::to('/chi-tiet/'. $product->product_id)}}"><h4>{{$product->ten}}</h4></a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>{{number_format($product->gia).' '.'VNĐ'}}</p>
    </div>
    @endforeach
</div>



{{-- ================================================================================== --}}
<h2 class="title">Sản phẩm mới</h2>
<div class="row">
    @foreach($new_sp as $key =>$new)
    <div class="col-4">
        <a href="{{URL::to('/chi-tiet/'. $new->product_id)}}"><img src="{{URL::to('public/uploads/sanpham/'. $new->hinh)}}"></a>
        <a href="{{URL::to('/chi-tiet/'. $new->product_id)}}"><h4>{{$new->ten}}</h4></a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>{{number_format($new->gia).' '.'VNĐ'}}</p>
    </div>
    @endforeach
</div>
</div>@endsection{{--
---------------------------------------------------------------- --}}

@section('all')

<div class="row row-3">
    <h2>Tất cả sản phẩm </h2>
    <div class="col-3">


  </div>

{{--           <select>
            @foreach($category as $key =>$cate)
            <option selected >{{$cate->tendm}}</option>

            @endforeach
        </select> --}}
        <label for="exampleInputEmail1">Tùy chọn</label>
        <select>
            <option>Áo</option>
            <option>Giày</option>
            <option>Giá tăng dần</option>
            <option>Giá giảm dần</option>
            <option>Phụ kiện</option>
        </select>
    </div>

    <div class="row">
       {{--  <div class="col-4">
            <a href="products_detal.html"><img src="{{('public/frontend/images/product-10.jpg')}}"></a>
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div> --}}
        @foreach($tatca as $key =>$all)
        <div class="col-4">
            <a href="{{URL::to('/chi-tiet/'. $all->product_id)}}"><img src="{{URL::to('public/uploads/sanpham/'. $all->hinh)}}"></a>
            <a href="{{URL::to('/chi-tiet/'. $all->product_id)}}"><h4>{{$all->ten}}</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>{{number_format($all->gia).' '.'VNĐ'}}</p>
        </div>
        @endforeach
    </div>


    <span>{!!$tatca->render()!!}</span>

    @endsection
