@extends('welcome')
@section('content')

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('public/frontend/images/image1.png')}}" width="100%">
                </div>
                <div class="social-login" style="text-align: center">
                <a href="{{URL::to('login-facebook')}}"><button class="btn btn-success" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button></a>

             </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Đăng nhập</span>
                            <span onclick="register()">Đăng kí</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="{{URL::to('/dangnhap-kh')}}" method="post">
                            {{csrf_field()}}
                            <input name="taikhoan" type="text" placeholder="Nhập tài khoản">
                            <input name="matkhau" type="password" placeholder="Nhập mật khẩu">
                            <button type="submit" class="btn">Đăng nhập</button>
                            <a href="">Quên mật khẩu?</a>
                        </form>

                        <form id="RegForm" action="{{URL::to('/dangki-kh')}}" method="post">
                             {{csrf_field()}}
                            <input name="tenkh" type="text" placeholder="Nhập tên">
                            <input name="mk" type="password" placeholder="Nhập mật khẩu">
                            <input name="em" type="email" placeholder="Nhập email">
                            <input name="ph" type="text" placeholder="Nhập số điện thoại">

                            <button type="submit" class="btn">Đăng kí</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }

        </script>
        <!-- ------------------- js for Account form-------------- -->

        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register() {
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";

            }
            function login() {
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }


        </script>


@endsection
