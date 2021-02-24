<div class="modal-header">
    <h4 class="modal-title"></h4>
</div>
<div class="modal-body"  style="font-family: auto;font-size: initial;">
    <form name="userForm"  class="form-horizontal">
        <input type="hidden" name="post_id" id="post_id1">
        <div class="form-group" >
            <label for="name" class="col-sm-4">Email</label>
            <div class="col-sm-12">
                <input type="email" class="form-control" id="email_update" name="title" value="{{$updateData->email}}" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
            <label for="name" class="col-sm-4">Password</label>
            <div class="col-sm-12">
                <input type="password" class="form-control" id="password_update" name="title" value="{{$updateData->password}}" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" onclick="save({{$updateData->id}})" class="btn btn-primary">Save</button>
</div>