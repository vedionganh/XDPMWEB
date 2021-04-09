@extends('admin_welcome')
@section('admin_content')

   <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
                        </header>

                             <?php
                            $message=Session::get('message');
                            if($message)
                            {
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                                <div class="panel-body">
                                    @foreach($edit_category as$key =>$editvalue)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category/'.$editvalue->danhmuc_id)}}" method="post" >
                                    {{(csrf_field())}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text"name="tendanhmuc"value="{{$editvalue->tendm}}"class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize: none" rows="10" class="form-control"id="exampleInputPassword1"name="mota" placeholder="Mô tả danh mục">{{$editvalue->mota}}</textarea>
                                </div> --}}
                                <div class="form-group">
                                    <select name="trangthai" class="form-control input-sm m-bot15">
                                        <option value="0">ẩn</option>
                                        <option value="1">hiện</option>

                                    </select>
                                </div>

                                <button type="submit" name="them" class="btn btn-info">Cập nhật  danh mục</button>
                            </form>
                            </div>
@endforeach
                        </div>
                    </section>

            </div>
</div>


@endsection
