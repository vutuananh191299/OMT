 @extends('/index')

 @section('content')
 <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="https://genk.mediacdn.vn/139269124445442048/2020/11/6/photo-1-1604661451467445033682.jpg" />
                                    <div class="tn-title">
                                        <a href="">Tin !</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="https://genk.mediacdn.vn/139269124445442048/2020/11/6/photo-1-1604661312893718839093.jpg" />
                                    <div class="tn-title">
                                        <a  href="">Tin @</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>A</h2>
                        <div class="row cn-slider">
                            @foreach($home as $homes)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{$homes->url}}" />
                                    <div class="cn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}"> {{$homes->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>B</h2>
                        <div class="row cn-slider">
                            @foreach($home as $homes)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{$homes->url}}" />
                                    <div class="cn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">{{$homes->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>C</h2>
                        <div class="row cn-slider">
                            @foreach($home as $homes)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{$homes->url}}" />
                                    <div class="cn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">{{$homes->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>D</h2>
                        <div class="row cn-slider">
                            @foreach($home as $homes)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{$homes->url}}" />
                                    <div class="cn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">{{$homes->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">C</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                                @foreach($home as $homem)
                            <div id="featured" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homem->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homem->id]) }}">
                                            <p class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homem->describe}}</p>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homem->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homem->id]) }}">
                                            <p  class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homem->describe}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homem->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homem->id]) }}">
                                            <p  class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homem->describe}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>

                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">C</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            @foreach($home as $homes)
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homes->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">
                                            <p  class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homes->describe}}</p></a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homes->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">
                                            <p  class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homes->describe}}</p></a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$homes->url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">
                                            <p class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">{{$homes->describe}}</p></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach($home as $homes)
                                <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{$homes->url}}" />
                                    <div class="mn-title">
                                        <a href="{{ route('page', ['id' => $homes->id]) }}">
                                            <p  class="describe" style=" overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 5; color: white">{{$homes->describe}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

@endsection
