     @extends('/index')


 @section('content')

        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach($page as $pages)
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="{{$pages -> url}}" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{$pages -> title}}</h1>
                                <p>
                                    {{$pages -> describe}}
                                </p>
                               <h4>{{$pages -> summary}}</h4>
                                <p>{{$pages -> content}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                                @foreach($page_next as $page_nexts)
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="{{$page_nexts -> url}}" />
                                        <div class="sn-title">
                                            <a href="">{{$page_nexts -> title}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End--> 


 @endsection