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
            <div class="col-1 text-left">
                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add
                    Post</a>
            </div>
            <div class="col-4 text-left">
                <input type="text" name="country_name" id="search" class="form-control input-lg" placeholder="Enter Country Name"/>
                <div id="countryList"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table id="laravel_crud" class="table table-striped table-bordered "
                       style="font-size: initial;font-family: auto;">
                    <thead>
                    <tr align='center'>
                        <th align='center'>STT</th>
                        <th align='center'>Name</th>
                        <th align='center'>Code</th>
                        <th align='center'>Permission</th>

                    </tr>
                    </thead>

                    <tbody>

                    </tbody>

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
                url: 'insert_Role',
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
            {{--fetch_customer_data();--}}

            {{--function fetch_customer_data(query = '')--}}
            {{--{--}}
            {{--$.ajax({--}}
            {{--url:"{{ route('live_search.action_Role') }}",--}}
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

            {{--$(document).on('keyup', '#search', function(){--}}
            {{--var query = $(this).val();--}}
            {{--fetch_customer_data(query);--}}
            {{--});--}}
        });
        $('#search').on('keyup', function () {
            fetchRecords()
        });
        //show
        function fetchRecords() {

            $.ajax({
                url: 'permission',
                type: 'post',
                // dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'search' : $('#search').val(),
                },
                success: function (response) {
                    $("#laravel_crud tbody").html(response);
                }
            });
        }
        //insert
        function insert() {
            var name = $('#name').val();
            var code = $('#code').val();
            if (name == '' || code == '' ) {
                alert('Không được bỏ trống')
            } else {
                $.ajax({
                    url: 'insert_Permission',
                    type: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
                        code: code,
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
            console.log(id)
            $.ajax({
                url: 'update_Permission/' + id,
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
            var name = $('#name_update').val();
            var code = $('#code_update').val();
            if (name == '' || code == '') {
                alert('Không được bỏ trống')
            } else {
                $.ajax({
                    url: 'update_Permission/' + id,
                    type: 'post',
                    data: {"_token": "{{ csrf_token() }}",
                        name: name,
                        code: code,},
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
                url: 'delete_Permission/' + id,
                type: 'post',
                data: {"_token": "{{ csrf_token() }}", id: id},
                success: function (response) {
                    alert('Xoa Thành Công');
                    fetchRecords();
                }
            });
        };

        function getRole(per_id) {

            var role_id  =  $("#per_" + per_id + " option:selected").val();
            $.ajax({
                url: 'Permission_Role/'+ role_id +'/'+ per_id ,
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id_role: role_id,
                    id_permission: per_id,
                },
                success: function (response) {

                    if (response == 1) {
                        alert('Phân Quyền Thành Công');
                        fetchRecords();
                    } else {
                        alert('Phân Quyền Thất Bại');
                    }
                }
            });

        }
    </script>
@endsection