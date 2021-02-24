
@foreach($data as $CmtData)
    @if($CmtData->status == 1)
    <div class="panel-body">
        <!-- Newsfeed Content -->
        <!--===================================================-->
        <div class="media-block">
            <a class="media-left" href="#"><img class="img-circle img-sm" style=" width: 46px;height: 46px;" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
            <div class="media-body">
                <div class="mar-btm">
                    <a href="#" class="btn-link text-semibold media-heading box-inline">{{$CmtData->user->email}}</a>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i>Time:{{$CmtData->created_at}} </p>
                </div>
                <p>{{$CmtData->content}}</p>
                    <a class="btn btn-sm btn-default m-btn--hover-warning" onclick="deletes({{$CmtData->id}})" style="background: red; color: white;" href="#">Delete</a>
                <hr>

                <!-- Comments -->
            </div>
        </div>
        <!--===================================================-->
        <!-- End Newsfeed Content -->
    </div>
    @else
        <div></div>
    @endif
@endforeach