<!-- Modal -->
<div class="modal fade" id="registrationEditModal" tabindex="-1" aria-labelledby="registrationEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

    
                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              
                <form method="POST" action="{{ route('admin.registration.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('id') }}</label>

                        <div class="col-md-6">
                        
                            <input  type="text"  class="form-control" name="up_id" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                        
                            <input  type="text"  class="form-control" name="up_name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label 
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="up_email">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('gender') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" name="up_gender" id="gender">
                                <option selected></option>
                                <option value="1">male</option>
                                <option value="2">female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="up_address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __('National_ID') }}</label>
                        <div class="col-md-6">
                            <input id="nid" type="text" class="form-control" name="up_nid">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="tel" class="form-control " name="up_phone">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class=" d-flex col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register_ Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
