<!-- Modal -->
<div class="modal fade" id="attendence1Modal" tabindex="-1" aria-labelledby="attendence1ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="attendence1ModalLabel"> Employee Attendences out time </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach

                <form method="POST" action="{{ route('admin.employee.out_time') }}">
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
                     
                    </div>
                    {!! Toastr::message() !!}

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
                       
                    </div>
           

            <input type="submit" class="btn btn-success " value="save">

            </form>
        </div>

    </div>
</div>
</div>
