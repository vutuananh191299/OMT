<div class="modal-header">
    <h4 class="modal-title"></h4>
</div>
<div class="modal-body" style="font-family: auto;font-size: initial;">
    <form name="userForm" class="form-horizontal">
        <input type="hidden" name="post_id" id="post_id">
        <div class="form-group">
            <label for="name" class="col-sm-4">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="name" name="title"
                       placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
            <label for="name" class="col-sm-4">Code</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="code" name="title"
                       placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="insert()" id="insert">Save</button>
</div>