<!-- Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Employees Join</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach

                {{-- <form method="POST" action="{{ route('admin.employee.store') }}"> --}}
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                           <select class="form-select" name="user_id" id="">
                            <option  selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                           </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="employee_id" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                        <div class="col-md-6">
                           <select class="form-select" name="department_id" id="">
                            <option  selected></option>
                            <option value="1">web designer</option>
                            <option value="2">networking</option>
                            <option value="3">backend designer</option>
                           </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="disignation_id" class="col-md-4 col-form-label text-md-end">{{ __('Disignation ') }}</label>

                        <div class="col-md-6">
                           <select class="form-select" name="designation_id" id="">
                            <option  selected></option>
                            <option value="1">python</option>
                            <option value="2">laravel</option>
                            <option value="3">java</option>
                           </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salary') }}</label>

                        <div class="col-md-6">
                            <input id="salary" type="text" class="form-control" name="salary">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="join" class="col-md-4 col-form-label text-md-end">{{ __('Join Date') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="date" class="form-control" name="join_date">

                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
