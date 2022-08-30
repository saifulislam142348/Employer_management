<!-- Modal -->
<div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="employeeEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" input id="employeeEditModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        
                @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach

                <form method="POST" action="{{ route('admin.employee.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <input type="hidden" name="id" id="id">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <input type="text" name="user_id" id="user_id" readonly>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                        <div class="col-md-6">
                            <input type="text" name="department_id" id="department_id" readonly>
                            <select class="form-select" name="department_id">
                                <option selected>..</option>
                                @foreach ($departments as $item)
                                
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="disignation_id"
                            class="col-md-4 col-form-label text-md-end">{{ __('Disignation ') }}</label>

                        <div class="col-md-6">
                            <input type="text" name="designation_id" id="designation_id" readonly>
                            <select class="form-select" name="designation_id" >
                                <option  selected></option>
                                @foreach ($designations as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>

            <input type="submit" class="btn btn-success " value="update">

            </form>

        </div>
    </div>
</div>
