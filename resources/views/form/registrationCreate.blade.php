<!-- Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationModalLabel">Employees Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                {{-- @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach --}}
                <form method="POST" action="{{ route('admin.registration.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                               autofocus>


                        </div>
                        @foreach ($errors->get('name') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email">


                        </div>
                        @foreach ($errors->get('email') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control " name="password">
                        </div>
                        @foreach ($errors->get('password') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>


                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('gender') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" name="gender" id="gender">
                                <option selected>Open this select gender</option>
                                <option value="1">male</option>
                                <option value="2">female</option>
                            </select>
                        </div>
                        @foreach ($errors->get('gender') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address">
                        </div>
                        @foreach ($errors->get('address') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>

                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __('National_ID') }}</label>
                        <div class="col-md-6">
                            <input id="nid" type="text" class="form-control" name="nid">
                        </div>
                        @foreach ($errors->get('nid') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                        <div class="col-md-6">
                            <input id="phone" type="tel" class="form-control " name="phone">

                        </div>
                        @foreach ($errors->get('phone') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach
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
