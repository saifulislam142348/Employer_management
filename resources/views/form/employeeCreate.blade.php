<!-- Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Employees Join</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('admin.employee.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="user_id">
                                <option selected></option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($errors->get('user_id') as $message)
                        <span class="text-center alert-danger">{{ $message }}</span>
                    @endforeach
                    </div>
                    <div class="row mb-3">
                        <label for="employee_id"
                            class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="department_id" id="">
                                <option selected>..</option>
                                @foreach ($departments as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($errors->get('department_id') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>
                    <div class="row mb-3">
                        <label for="disignation_id"
                            class="col-md-4 col-form-label text-md-end">{{ __('Disignation ') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="designation_id" id="">
                                <option selected>..</option>
                                @foreach ($designations as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($errors->get('designation_id') as $message)
                        <span class="text-center alert-danger">{{ $message }}</span>
                    @endforeach
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Month Name ') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="month">
                                <option selected></option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="Septembe">Septembe</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                
                            </select>
                        </div>
                        @foreach ($errors->get('month') as $message)
                        <span class="text-center alert-danger">{{ $message }}</span>
                    @endforeach
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

            <input type="submit" class="btn btn-success " value="save">

            </form>

        </div>
    </div>
</div>
