@extends('admin.home')


@section('content')



        {{--<div class="container-fluid">--}}
                {{--<div class="m-subheader ">--}}
                        {{--<div class="d-flex align-items-center">--}}
                                {{--<div class="mr-auto">--}}
                                        {{--<h3 class="m-subheader__title m-subheader__title--separator">Tables</h3>--}}
                                        {{--<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">--}}
                                                {{--<li class="m-nav__item m-nav__item--home">--}}
                                                        {{--<a href="#" class="m-nav__link m-nav__link--icon">--}}
                                                                {{--<i class="m-nav__link-icon la la-home"></i>--}}
                                                        {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="m-nav__separator">-</li>--}}
                                                {{--<li class="m-nav__item">--}}
                                                        {{--<a href="" class="m-nav__link">--}}
                                                                {{--<span class="m-nav__link-text">Home</span>--}}
                                                        {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="m-nav__separator">-</li>--}}
                                                {{--<li class="m-nav__item">--}}
                                                        {{--<a href="" class="m-nav__link">--}}
                                                                {{--<span class="m-nav__link-text">List</span>--}}
                                                        {{--</a>--}}
                                                {{--</li>--}}
                                        {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div>--}}
                                        {{--<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">--}}
                                                {{--<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">--}}
                                                        {{--<i class="la la-plus m--hide"></i>--}}
                                                        {{--<i class="la la-ellipsis-h"></i>--}}
                                                {{--</a>--}}
                                                {{--<div class="m-dropdown__wrapper">--}}
                                                        {{--<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>--}}
                                                        {{--<div class="m-dropdown__inner">--}}
                                                                {{--<div class="m-dropdown__body">--}}
                                                                        {{--<div class="m-dropdown__content">--}}
                                                                                {{--<ul class="m-nav">--}}
                                                                                        {{--<li class="m-nav__section m-nav__section--first m--hide">--}}
                                                                                                {{--<span class="m-nav__section-text">Quick Actions</span>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__item">--}}
                                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                                        {{--<i class="m-nav__link-icon flaticon-share"></i>--}}
                                                                                                        {{--<span class="m-nav__link-text">Activity</span>--}}
                                                                                                {{--</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__item">--}}
                                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                                        {{--<i class="m-nav__link-icon flaticon-chat-1"></i>--}}
                                                                                                        {{--<span class="m-nav__link-text">Messages</span>--}}
                                                                                                {{--</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__item">--}}
                                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                                        {{--<i class="m-nav__link-icon flaticon-info"></i>--}}
                                                                                                        {{--<span class="m-nav__link-text">FAQ</span>--}}
                                                                                                {{--</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__item">--}}
                                                                                                {{--<a href="" class="m-nav__link">--}}
                                                                                                        {{--<i class="m-nav__link-icon flaticon-lifebuoy"></i>--}}
                                                                                                        {{--<span class="m-nav__link-text">Support</span>--}}
                                                                                                {{--</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__separator m-nav__separator--fit">--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li class="m-nav__item">--}}
                                                                                                {{--<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>--}}
                                                                                        {{--</li>--}}
                                                                                {{--</ul>--}}
                                                                        {{--</div>--}}
                                                                {{--</div>--}}
                                                        {{--</div>--}}
                                                {{--</div>--}}
                                        {{--</div>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                        {{--<div class="col-md-12 mt-5">--}}
                                {{--@if (Session::has('error_update'))--}}
                                        {{--<h1 class="text-center">{{Session::get('error_update')}}</h1>--}}
                                {{--@endif--}}
                                        {{--@if(Session::has('success_update'))--}}
                                                {{--<h1 class="text-center">{{Session::get('success_update')}}</h1>--}}
                                        {{--@endif--}}
                                                {{--@if (Session::has('error_insert'))--}}
                                                {{--<h1 class="text-center">{{Session::get('error_insert')}}</h1>--}}
                                                {{--@endif--}}
                                                        {{--@if(Session::has('success_insert'))--}}
                                                                {{--<h1 class="text-center">{{Session::get('success_insert')}}</h1>--}}
                                                        {{--@else--}}
                                                                {{--<h1 class="text-center">Danh sách</h1>--}}
                                                        {{--@endif--}}
                                {{--<hr style="height: 1px;color: black;background-color: black;">--}}
                        {{--</div>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-primary" style="color: white"><a href="{{ Route('insert')}}"  style="color: white" >Insert</a></button>--}}

                {{--<div class="row" style="font-size: initial; font-family: 'Roboto'; ">--}}
                        {{--<div class="col-md-12">--}}
                                {{--<table class="table  text-center">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                                {{--<th>STT</th>--}}
                                                {{--<th>Tiêu Đề</th>--}}
                                                {{--<th>Mô tả</th>--}}
                                                {{--<th>Tóm Tắt </th>--}}
                                                {{--<th>Nội Dung</th>--}}
                                                {{--<th>URL</th>--}}
                                                {{--<th>Action</th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}

                                        {{--@foreach($list as $key => $lits)--}}
                                                {{--@if($lits->status == 1)--}}
                                        {{--<tbody>--}}
                                        {{--<tr>--}}
                                                {{--<td>{{ ($key+1) }}</td>--}}
                                                {{--<td>{{$lits ->title}}</td>--}}
                                                {{--<td>{{$lits ->describe}}</td>--}}
                                                {{--<td>{{$lits ->summary}}</td>--}}
                                                {{--<td>{{$lits ->content}}</td>--}}
                                                {{--<td>{{$lits ->url}}</td>--}}
                                                {{--<td>--}}
                                                        {{--<button type="submit" class="btn btn-info"><a href="{{ route('update', ['id' => $lits ->id]) }}" style="color: white"  >Edit</a></button>--}}
                                                        {{--<button type="submit" class="btn btn-danger"><a href="{{ route('delete', ['id' => $lits ->id]) }}" style="color: white"  >Delete</a></button>--}}
                                                        {{--<button type="submit" class="btn btn-danger"><a href="{{ route('soft_delete', ['id' => $lits ->id]) }}" style="color: white"  >Soft Delete</a></button>--}}

                                                {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--</tbody>--}}
                                                {{--@endif--}}
                                                {{--@endforeach--}}
                                {{--</table>--}}
                        {{--</div>--}}
                {{--</div>--}}
        {{--</div>--}}






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
                        <div class="col-12 text-right">
                                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Add Post</a>
                        </div>
                </div>
                <div class="row">
                        <div class="col-12">
                                <table id="laravel_crud" class="table table-striped table-bordered" style="font-size: initial;font-family: auto;">
                                        <thead>
                                        <tr>
                                                <th>STT</th>
                                                <th>Tiêu Đề</th>
                                                <th>Mô tả</th>
                                                <th>Tóm Tắt </th>
                                                <th>Nội Dung</th>
                                                <th>URL</th>
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        @foreach($list as $key => $lits)
                                        @if($lits->status == 1)
                                                <tbody>
                                                <tr id="row_">
                                                        <td>{{ ($key+1) }}</td>
                                                        <td>{{$lits ->title}}</td>
                                                        <td>{{$lits ->describe}}</td>
                                                        <td>{{$lits ->summary}}</td>
                                                        <td>{{$lits ->content}}</td>
                                                        <td>{{$lits ->url}}</td>
                                                        <td>
                                                                <a href="javascript:void(0)" data-id="" onclick="editPost()" class="btn btn-info">Edit</a>
                                                                <a href="javascript:void(0)" data-id="" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a>
                                                        </td>
                                                </tr>

                                        </tbody>
                                        @endif
                                        @endforeach
                                </table>
                        </div>
                </div>
        </div>
        {{--CREAT--}}
        <div class="modal fade" id="post-modal" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body" style="font-family: auto;font-size: initial;">
                                        <form name="userForm" class="form-horizontal">
                                                <input type="hidden" name="post_id" id="post_id">
                                                <div class="form-group">
                                                        <label for="name" class="col-sm-4">Tiêu Đề</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                        <label for="name" class="col-sm-4">Mô Tả</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                        <label for="name" class="col-sm-4">Tóm Tắt</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-sm-4">Nội Dung</label>
                                                        <div class="col-sm-12">
                                <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" cols="50">
                                </textarea>
                                                                <span id="descriptionError" class="alert-message"></span>
                                                        </div>
                                                </div>
                                        </form>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                                </div>
                        </div>
                </div>
        </div>

        {{--UPDATE--}}
        <div class="modal fade" id="post-modal1" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body"  style="font-family: auto;font-size: initial;">
                                        <form name="userForm" class="form-horizontal">
                                                <input type="hidden" name="post_id" id="post_id1">
                                                <div class="form-group">
                                                        <label for="name" class="col-sm-4">Tiêu Đề</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                        <label for="name" class="col-sm-4">Mô Tả</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                        <label for="name" class="col-sm-4">Tóm Tắt</label>
                                                        <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                                <span id="titleError" class="alert-message"></span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-sm-4">Nội Dung</label>
                                                        <div class="col-sm-12">
                                <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" cols="50">
                                </textarea>
                                                                <span id="descriptionError" class="alert-message"></span>
                                                        </div>
                                                </div>
                                        </form>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                                </div>
                        </div>
                </div>
        </div>

        <script>
                // $('#laravel_crud').DataTable();
                function addPost() {
                        $("#post_id").val('');
                        $('#post-modal').modal('show');
                }

                function editPost() {
                        $("#post_id").val('');
                        $('#post-modal1').modal('show');
                }

                // function editPost(event) {
                //         var id  = $(event).data("id");
                //         let _url = `/posts/${id}`;
                //         $('#titleError').text('');
                //         $('#descriptionError').text('');
                //
                //         $.ajax({
                //                 url: _url,
                //                 type: "GET",
                //                 success: function(response) {
                //                         if(response) {
                //                                 $("#post_id").val(response.id);
                //                                 $("#title").val(response.title);
                //                                 $("#description").val(response.description);
                //                                 $('#post-modal').modal('show');
                //                         }
                //                 }
                //         });
                // }
                //
                // function createPost() {
                //         var title = $('#title').val();
                //         var description = $('#description').val();
                //         var id = $('#post_id').val();
                //
                //         let _url     = `/posts`;
                //         let _token   = $('meta[name="csrf-token"]').attr('content');
                //
                //         $.ajax({
                //                 url: _url,
                //                 type: "POST",
                //                 data: {
                //                         id: id,
                //                         title: title,
                //                         description: description,
                //                         _token: _token
                //                 },
                //                 success: function(response) {
                //                         if(response.code == 200) {
                //                                 if(id != ""){
                //                                         $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                //                                         $("#row_"+id+" td:nth-child(3)").html(response.data.description);
                //                                 } else {
                //                                         $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                //                                 }
                //                                 $('#title').val('');
                //                                 $('#description').val('');
                //
                //                                 $('#post-modal').modal('hide');
                //                         }
                //                 },
                //                 error: function(response) {
                //                         $('#titleError').text(response.responseJSON.errors.title);
                //                         $('#descriptionError').text(response.responseJSON.errors.description);
                //                 }
                //         });
                // }
                //
                // function deletePost(event) {
                //         var id  = $(event).data("id");
                //         let _url = `/posts/${id}`;
                //         let _token   = $('meta[name="csrf-token"]').attr('content');
                //
                //         $.ajax({
                //                 url: _url,
                //                 type: 'DELETE',
                //                 data: {
                //                         _token: _token
                //                 },
                //                 success: function(response) {
                //                         $("#row_"+id).remove();
                //                 }
                //         });
                // }

        </script>
@endsection