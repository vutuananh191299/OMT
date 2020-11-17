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

<script type="text/javascript">
    function validate()
    {
        var user=document.getElementById("tntUser").value;
        var pass=document.getElementById("tntPass").value;
        dem = 0;
        //user
        if(user.length==0)
        {
            document.getElementById("tntUser").style.border="2px solid red";
        }else
            {
                document.getElementById("tntUser").style.border="2px solid  #7FFF00";
                dem++;
            }
        //password
        if(pass.length==0)
        {
            document.getElementById("tntPass").style.border="2px solid red";
        }else
            {
                document.getElementById("tntPass").style.border="2px solid  #7FFF00";
                dem++;
            }

        if(dem==2)
        {
            document.getElementById("button1").type = "submit";
        }
    }
</script>
<script>
$(document).ready(function(){
  $("#tntUser").keydown(function(){
    $("#tntUser").css("background-color", "red");
  });
  $("#tntUser").keyup(function(){
    $("#tntUser").css("background-color", "black");
  });
  $("#tntPass").keydown(function(){
    $("#tntPass").css("background-color", "red");
  });
  $("#tntPass").keyup(function(){
    $("#tntPass").css("background-color", "black");
  });
});
</script>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form action="{{ route('pro_access') }}" class="login100-form validate-form" method="POST">
                @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						 @if (Session::has('error1'))

                        {{Session::get('error1')}}
                    @else
                        Login
                    @endif
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="email" id="tntUser" name="email" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="tntPass" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <input type="button" value="Đăng Nhập" class="login100-form-btn" style="color: white !important;" id="button1" onclick="validate()">

                    <a  value="Đăng Kí" class="login100-form-btn" style="background-color: #18af6d !important; background:-webkit-linear-gradient(bottom, #2328ce, #287dfd);" href="{{ route('register') }}">Đăng kí</a>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="/password/reset">
                        Quên mật khẩu
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