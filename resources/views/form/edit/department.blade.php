<!-- Modal -->
<div class="modal fade" id="departmentEditModal" tabindex="-1" role="dialog" aria-labelledby="departmentEditModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="departmentEditModalLabel">Department Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="errormsg">

                </div>
                <form method="POST" action="{{ route('admin.department.store') }}" id="updateFormDepartment">
                    @csrf
                    <input type="hidden" name="up_department_id" id="up_department_id">
                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __('Department  Name') }}</label>
                        <div class="col-md-6">
                            <input id="up_department_name" type="text" class="form-control" name="up_department_name">
                        </div>
                    </div>
            </div>
            <input class="btn btn-success update_department" type="submit" value="update">


            </form>
        </div>
    </div>
</div>
</div>
