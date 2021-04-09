@extends('admin_welcome')
@section('admin_content')

   <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sản phẩm
                        </header>
                        <div class="panel-body">
                             <?php
                            $message=Session::get('message');
                            if($message)
                            {
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
                                    {{(csrf_field())}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text"name="tensanpham"class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize: none" rows="5" class="form-control"id="exampleInputPassword1"name="mota" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text"name="gia"class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Hình</label>
                                    <input type="file"name="hinh"class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Danh mục</label>
                                    <select name="danhmuc" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key=>$value)
                                        <option value="{{$value->danhmuc_id}}">{{$value->tendm}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trạng thái</label>
                                    <select name="trangthai" class="form-control input-sm m-bot15">
                                        <option value="0">ẩn</option>
                                        <option value="1">hiện</option>

                                    </select>
                                </div>

                                <button type="submit" name="them" class="btn btn-info">Thêm sản phẩm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>


@endsection
