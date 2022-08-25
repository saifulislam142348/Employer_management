<!-- Modal -->
<div class="modal fade" id="bonusModal" tabindex="-1" aria-labelledby="bonusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bonusModallLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('admin.employee.bonus') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="user_id">
                                <option selected></option>
                                @foreach ($employees as $item)
                                    <option value="{{ $item->user_id }}">{{ $item->user_id}}</option>
                                @endforeach
                            </select>
                           
                        </div>
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
                        @foreach ($errors->get('month_id') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>

                    <div class="row mb-3">
                        <label for="salary"
                            class="col-md-4 col-form-label text-md-end">{{ __('Bonus Title') }}</label>

                        <div class="col-md-6">
                            <input id="bonus" type="text" class="form-control" name="bonus_title">

                        </div>
                        @foreach ($errors->get('bonus_title') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>
                    <div class="row mb-3">
                        <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Bonus') }}</label>

                        <div class="col-md-6">
                            <input id="bonus" type="text" class="form-control" name="bonus">

                        </div>
                        @foreach ($errors->get('bonus') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>
            </div>
            <input type="submit" class="btn btn-success " value="save">

            </form>

        </div>

    </div>
</div>
</div>
