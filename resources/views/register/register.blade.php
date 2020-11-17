<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form action="{{ route('register_post') }}" class="login100-form validate-form" method="POST">
                @csrf
                <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
                        Register
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" id="tntUser" name="email" placeholder="Gmail">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    @if ($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="tntPass" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    @if ($errors->has('password'))
                        <p class="text-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="tntPass" name="confirm_password" placeholder="Confirm Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    @if ($errors->has('confirm_password'))
                        <p class="text-danger">{{$errors->first('confirm_password')}}</p>
                    @endif
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" value="Đăng Kí" class="login100-form-btn" style="background-color: #18af6d !important; background:-webkit-linear-gradient(bottom, #7579ff, #b224ef);" id="button1">
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="login/vendor/bootstrap/js/popper.js"></script>
<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->

<script src="login/js/main.js"></script>

</body>
</html>