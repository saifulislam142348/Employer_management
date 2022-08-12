<!-- Modal -->
<div class="modal fade" id="registrationEditModal" tabindex="-1" role="dialog" aria-labelledby="registrationEditModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationEditModalLabel">Registration Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.registration.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('gender') }}</ <div
                                class="col-md-6">
                            <select class="form-select" name="gender" id="gender">
                                <option selected>Open this select gender</option>
                                <option value="1">male</option>
                                <option value="2">female</option>
                            </select>
                    </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address">

                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('National_ID') }}</label>
                    <div class="col-md-6">
                        <input id="nid" type="text" class="form-control" name="nid">

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                    <div class="col-md-6">
                        <input id="phone" type="tel" class="form-control " name="phone">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class=" d-flex col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
