<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
       .b {
          width: 130px;
          box-sizing: border-box;
          border: 1px solid black;
          border-radius: 4px;
          outline:none;
          padding: 12px 14px;}

          .b:focus{
            width:500px;}
            .b{
              width: 130px;
              box-sizing: border-box;
              border: 1px solid black;
              border-radius: 4px;
              outline:none;
              padding: 12px 14px;

              transition:0.6s ease-in-out;
          }
          .b:focus{
            width:500px;
            background-color:lightpink;}
            .a{
                width: 30px;
                height: 30px;
                background-color:lightpink;
                border-radius: 5px;
            }
            ul li a:hover{
                color: black;
                background-color:lightpink;
                border-radius: 5px;
                transition: 0.2s;
            }
            a h1:hover{
                color: black;
                background-color:lightpink;
                border-radius: 5px;
                transition: 0.2s;
            }


    </style>
</head>
<body>
    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logo.png')}}" width="125px" /></a>
                </div>
                <div class="row">

                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                        <li><a href="">Dịch vụ </a></li>

                        <li><a href="">Liên hệ</a>
                        <?php
                        $id_kh=Session::get('khachhang_id');


                        if($id_kh!=NULL ){
                        ?>
                           <li><a href="{{URL::to('payment')}}">Thanh toán</a></li>
                        <?php
                        }elseif($id_kh!=NULL ){
                        ?>
                        <li><a href="{{URL::to('/payment')}}">Thanh toán</a></li>
                        <?php
                        }
                        else{?>
                            <li><a href="{{URL::to('/lo-gin')}}">Thanh toán</a></li>
                        <?php } ?>
{{-- -------------------------------------------------------------------------- --}}
                            <?php
                            $id_kh=Session::get('khachhang_id');
                            if($id_kh!=NULL){?>
                            @if(Session::has('tenkh') && Session::get('tenkh') == true)
                               <li><a href="{{URL::to('log-out')}}">Hi! {{ Session::get('tenkh') }}|Đăng xuất</a></li
                            >@endif
                            <?php
                           }else{?>
                              <li><a href="{{URL::to('/lo-gin')}}">Tài khoản</a></li>
                            <?php } ?>

                          </ul>
                      </nav>
                      <a href="{{URL::to('hien-thi')}}"><img src="{{asset('public/frontend/images/cart.png')}}" width="30px" height="30px" /></a>
                      <img src="{{asset('public/frontend/images/menu.png')}}" class="menu-icon" onclick="menutoggle()" />
                      <div class="row">
                        <div class="col">
                            <form action="{{URL::to('tim-kiem')}}" method="post">
                                {{csrf_field()}}
                                <input class="b"type="text" name="search" placeholder="Search..."><button class="a" type="submit"><i class="fa fa-search"></i></button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>
                            Give Your Workout<br />
                            A New Style!
                        </h1>
                        <p>
                            Success ins't always about greatness. It's about consistency. Consistent <br />
                            hard work gains success. Greatness will come.
                        </p>
                        <a href="" class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="{{asset('public/frontend/images/image1.png')}}" />
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------- featured categorries ---------------- -->
        <div class="categories">
            @yield('discount')
        </div>
        <!-- ------------- featured products ---------------- -->
        <div class="small-container">
            @yield('content') {{-- ================================================================================== --}}
        </div>
        {{-- ---------------------------------------------------------------- --}}
        <div class="small-container">
            @yield('all')
        </div>
        <!-- ------------ offer -------------- -->

        @yield('the-end')

        <!-- ------------ testimonial -------------- -->

        <!-- ------------------- brands --------------------- -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="{{asset('public/frontend/images/logo-godrej.png')}}" />
                    </div>
                    <div class="col-5">
                        <img src="{{asset('public/frontend/images/logo-oppo.png')}}" />
                    </div>
                    <div class="col-5">
                        <img src="{{asset('public/frontend/images/logo-coca-cola.png')}}" />
                    </div>
                    <div class="col-5">
                        <img src="{{asset('public/frontend/images/logo-paypal.png')}}" />
                    </div>
                    <div class="col-5">
                        <img src="{{asset('public/frontend/images/logo-philips.png')}}" />
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------footer----------- -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone</p>
                        <div class="app-logo">
                            <img src="{{asset('public/frontend/images/play-store.png')}}" />
                            <img src="{{asset('public/frontend/images/app-store.png')}}" />
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="{{asset('public/frontend/images/logo-white.png')}}" />
                        <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr />
                <p class="Copyright">Copyright 2021- Internet</p>
            </div>
        </div>
        <!-- ------------------- js for toggle menu-------------- -->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </body>
    </html>
