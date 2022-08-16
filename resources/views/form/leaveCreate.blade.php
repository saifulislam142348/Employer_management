<!-- Modal -->
<div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="leaveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="leaveModalLabel">Employee Leaves</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.employee.leave') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" name="user_id" type="text" value="{{ Auth::user()->id }}" readonly>
                        </div>
                        @foreach ($errors->get('user_id') as $message)
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
                        <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Leave') }}</label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" name="leave" type="checkbox" value="1"
                                    id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <input type="submit" class="btn btn-success " value="save">
            </form>
        </div>
    </div>
</div>
</div>
