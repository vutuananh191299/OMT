        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.html">
                               <div style="font-size: xxx-large; color: #FF6F61;">Tuấn Anh</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tin A</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Tin A 1</a>
                                    <a href="#" class="dropdown-item">Tin A 2</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tin B</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Tin B 1</a>
                                    <a href="#" class="dropdown-item">Tin B 2</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tin C</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Tin C 1</a>
                                    <a href="#" class="dropdown-item">Tin C 2</a>
                                </div>
                            </div>
                        </div>
                        <div class="social ml-auto">
                            @if (Session::has('messages'))

                                <a href="{{route('logout_user')}}"  style="width: 100px;"><i class="fab fa-twitter">Đăng xuất</i></a>
                            @else
                                <a href="{{route('login')}}"  style="width: 100px;"><i class="fab fa-twitter">Đăng nhập</i></a>
                            @endif

                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->