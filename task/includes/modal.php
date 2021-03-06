<div class="bgclose modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" class="post">
                <input type="hidden" name="user_id" class="hidden" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="first-name" class="col-form-label">First name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="">
                    </div>

                    <div class="form-group">
                        <label for="last-name" class="col-form-label">Last name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" min="4" value="">
                    </div>
                    <div class="form-group custom-control
                                custom-switch">
                        <label for="status" class="switch">
                            <input type="checkbox" name="status" id="status" value="0">
                            <span class="slider round"></span>
                        </label>
                        <span class="status_text">status <span class="text">off</span></span>
                    </div>
                    <div class="form-group">
                        <select class="form-control custom-select" name="role" id="role" size="1">
                            <option value="null" selected>Role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <div class="del_text">
                        Delete this user?
                    </div>
                    <div class="set_active">
                        Active status for the selected users?
                    </div>
                    <div class="set_notactive">
                        Not active status for the selected users?
                    </div>
                    <div class="set_delete">
                        Delete selected users?
                    </div>
                    <div class="error">
                        <p class="set_default">
                            Selected any items!
                        </p>

                        <p id="notcheck">
                            Selected any checkpoints!
                        </p>
                    </div>
                    <div class="result"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success add_text" id="add_user">Save</button>
                    <button type="button" class="btn btn-success edit_text" id="edit_user">Save changes</button>
                    <button type="button" class="btn btn-danger del_text" id="del_user">Yes</button>
                    <button type="button" class="btn btn-success set_active" id="active">Yes</button>
                    <button type="button" class="btn btn-success set_notactive" id="notactive">Yes</button>
                    <button type="button" class="btn btn-danger set_delete" id="delete">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>