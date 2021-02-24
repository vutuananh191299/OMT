@extends('/index')
@section('content')

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="{{$page -> url}}" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{$page -> title}}</h1>
                                <p>
                                    {{$page -> describe}}
                                </p>
                                <h4>{{$page -> summary}}</h4>
                                <p>{{$page -> content}}</p>
                            </div>
                        </div>

                        <div class="well">
                            <h4>Viết Bình Luận
                                <span class="glyphicon glyphicon-pencil"></span>
                            </h4>
                            <form action="">
                                <div class="form-group col-lg-12">
                                    <textarea name="" id="content" cols="120" rows="5"></textarea>
                                </div>
                                @if (\Illuminate\Support\Facades\Auth::user())
                                @if(\Illuminate\Support\Facades\Auth::user()->id != Null)

                                    <button type="button" onclick="insert({{$page->id}})" class="btn btn-primary">Gửi</button>
                                @else

                                    <button type="submit"  class="btn btn-primary">
                                        <a href="{{route('login')}}">Login</a>
                                    </button>
                                @endif
                                @endif


                            </form>
                            <br>
                            @if (\Illuminate\Support\Facades\Auth::user())
                            @if(\Illuminate\Support\Facades\Auth::user()->id != Null)
                                <div class="panel" id="cmt" style=" box-shadow: 0 2px 0 rgba(0,0,0,0.075);border-radius: 0;border: 0; margin-bottom: 15px;">

                                </div>
                            @else
                                <div></div>
                            @endif
                            @endif


                        </div>
                </div>
            </div>
            <div class="sn-related">
                <h2>Related News</h2>
                <div class="row sn-slider">
                    @foreach($page_next as $page_nexts)
                        <div class="">
                            <div class="sn-img">
                                <img src="{{$page_nexts -> url}}" />
                                <div class="sn-title">
                                    <a href="{{ route('page', ['id' => $page_nexts->id]) }}">{{$page_nexts -> title}}</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function comment(){
            $.ajax({
                url: '/Comment/' + '{{$page->id}}',
                type: 'get',
                data: {
                    "_token": "{{ csrf_token() }}",

                },
                success: function (response) {
                    $("#cmt").html(response);
                }
            });
        }
        $(document).ready(function () {
            // comment();
        });

        function insert(post_id) {
            if('{{\Illuminate\Support\Facades\Auth::user()}}' == 0){
                comment();
            }
            else {
                var user_id = '{{\Illuminate\Support\Facades\Auth::user()->id}}';

                var content = $('#content').val();

                $.ajax({
                    url: '/cmt/getComment/' + user_id + '/' + post_id,
                    type: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        post_id: post_id,
                        user_id: user_id,
                        content: content,
                    },
                    success: function (response) {
                        comment();
                    }
                });
            }
        };

        function deletes(id){
            $.ajax({
                url: '/cmt/del_Comment/' + id,
                type: 'post',
                data: {"_token": "{{ csrf_token() }}", id: id},
                success: function (response) {
                    comment();
                }
            });
        };
    </script>
@endsection