<div class="modal-header">
    <h4 class="modal-title"></h4>
</div>
<div class="modal-body"  style="font-family: auto;font-size: initial;">
    <form name="userForm"  class="form-horizontal">
        <input type="hidden" name="post_id" id="post_id1">
        <div class="form-group" >
            <label for="name" class="col-sm-4">Tiêu Đề</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="title_update" name="title" value="{{$updateData->title}}" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
            <label for="name" class="col-sm-4">Mô Tả</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="describe_update" name="title" value="{{$updateData->describe}}" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
            <label for="name" class="col-sm-4">Tóm Tắt</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="summary_update" name="title" value="{{$updateData->summary}}" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4">Nội Dung</label>
            <div class="col-sm-12">
                                <textarea class="form-control" id="content_update" name="description" placeholder="Enter description" rows="4" cols="50">{{$updateData->content}}</textarea>
                <span id="descriptionError" class="alert-message"></span>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" onclick="save({{$updateData->id}})" class="btn btn-primary">Save</button>
</div>