@extends('admin.home')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                @if (Session::has('error_update'))
                    <h1 class="text-center">{{Session::get('error_update')}}</h1>
                @endif @if(Session::has('success_update'))
                    <h1 class="text-center">{{Session::get('success_update')}}</h1>
                @endif @if (Session::has('error_insert'))
                    <h1 class="text-center">{{Session::get('error_insert')}}</h1>
                @endif @if(Session::has('success_insert'))
                    <h1 class="text-center">{{Session::get('success_insert')}}</h1>
                @else
                    <h1 class="text-center">Danh sách</h1> @endif
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>

        <div class="row" style="clear: both;margin-top: 18px;">
            @can('them')
            <div class="col-1 text-left">
                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
            </div>
            @endcan
            <div class="col-4 text-left">
                <input type="text" name="country_name" id="search" class="form-control input-lg" placeholder="Enter Country Name"/>
                <div id="countryList"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table id="laravel_crud" class="table table-sm m-table m-table--head-bg-brand"
                       style="font-size: initial;font-family: auto;">
                    <thead>
                    <tr align='center'>
                        <th align='center'>STT</th>
                        <th align='center'>Tiêu Đề</th>
                        <th align='center'>Mô tả</th>
                        <th align='center'>Tóm Tắt</th>
                        <th align='center'>Nội Dung</th>
                        <th align='center'>URL</th>
                        <th align='center'>Tác Giả</th>
                        <th align='center'>Action</th>
                    </tr>
                    </thead>
                    @can('xem')
                    <tbody style=" overflow: hidden;-webkit-box-orient: vertical;-webkit-line-clamp: 5;">

                    </tbody>
                    @endcan
                </table>
            </div>
        </div>

    </div>

    {{--CREAT--}}
    <div class="modal fade" id="post-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="insert">

            </div>
        </div>
    </div>

    {{--UPDATE--}}
    <div class="modal fade" id="post-modal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="update">

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>


        function addPost() {
            $.ajax({
                url: 'insert',
                type: 'get',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (res) {
                    $('#insert').html(res);
                    $('#post-modal').modal('show');
                }
            })

        }
        //
        $(document).ready(function () {
            // Fetch records
            fetchRecords();
            // fetch_customer_data();

            {{--function fetch_customer_data(query = '')--}}
            {{--{--}}
                {{--$.ajax({--}}
                    {{--url:"{{ route('live_search.action') }}",--}}
                    {{--method:'GET',--}}
                    {{--data:{query:query},--}}
                    {{--dataType:'json',--}}
                    {{--success:function(data)--}}
                    {{--{--}}
                        {{--$('tbody').html(data.table_data);--}}
                        {{--$('#total_records').text(data.total_data);--}}
                    {{--}--}}
                {{--})--}}
            {{--}--}}

            $(document).on('keypress', '#search', function(e){
                var query = $(this).val();
                if(e.which == 13) {
                    fetchRecords(query);
                }

            });
        })
        //show
        function fetchRecords(keyword = '') {

            $.ajax({
                url: 'getUsers',
                type: 'post',
                // dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    keyword: keyword
                },
                success: function (response) {
                    $("#laravel_crud tbody").html(response);
                }
            });
        }
        //insert
        function insert() {
            var title = $('#title').val();
            var describe = $('#describe').val();
            var content = $('#content').val();
            var summary = $('#describe').val();
            if (title == '' || describe == '' || content == '' || summary == '') {
                alert('Không được bỏ trống')
            } else {
                $.ajax({
                    url: 'insert',
                    type: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        title: title,
                        describe: describe,
                        content: content,
                        summary: summary
                    },
                    success: function (response) {
                        if (response == 1) {
                            alert('Thêm Thành Công');
                            fetchRecords();
                            $('#post-modal').modal('hide');
                        } else {
                            alert('Thêm Thất Bại');
                        }
                    }
                });
            }
        };
        //show_update
        function editPost(id) {
            $.ajax({
                url: 'update/' + id,
                type: 'get',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (res) {
                    $('#update').html(res);
                    $('#post-modal1').modal('show');
                }
            })
        }
        //update
        function save(id) {
            var title = $('#title_update').val();
            var describe = $('#describe_update').val();
            var content = $('#content_update').val();
            var summary = $('#describe_update').val();
            if (title == '' || describe == '' || content == '' || summary == '') {
                alert('Không được bỏ trống')
            } else {
                $.ajax({
                    url: 'update/' + id,
                    type: 'post',
                    data: {"_token": "{{ csrf_token() }}",
                    id: id,
                    title: title,
                    describe: describe,
                    content: content,
                    summary: summary},
                    success: function (response) {
                        if (response == 1) {
                            alert('Sửa Thành Công');
                            fetchRecords();
                            $('#post-modal1').modal('hide');
                        } else {
                            alert('Sửa Thất Bại');
                        }
                    }
                });
            }
        }
        //delete
        function deleted(id){
            $.ajax({
                url: 'delete/' + id,
                type: 'post',
                data: {"_token": "{{ csrf_token() }}", id: id},
                success: function (response) {
                    alert('Xoa Thành Công');
                    fetchRecords();
                }
            });
        };
    </script>

@endsection