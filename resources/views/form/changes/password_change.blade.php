@extends('layouts.layout')
@section('content')
    @include('user.pages.include.userHeader')
    <div class="jumbotron">
        <h2 class="text-center alert-danger bg-light">****Password Change***</h2>
        <hr>



        <div class="table">

            <form action="{{ route('update.password') }}" method="post">
                @csrf

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('Old Pasword') }}</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="old_password" placeholder="Old password">

                    </div>
                    <div class="d-flex justify-content-center">
                        @if (session('oldpassword'))
                            <hr>
                            <span class="text-danger  ">{{ session('oldpassword') }}</span>
                            <hr>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="new_password" placeholder="New password">

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    @if (session('newpassword'))
                        <hr>
                        <span class="alert alert-danger  ">{{ session('newpassword') }}</span>
                        <hr>
                    @endif
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">{{ __('New Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control  " name="confirm_password" placeholder="Confirm password">

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end"></label>

                    <div class="col-md-6">
                        <input type="submit" class="form-control btn btn-danger btn-outline-success "
                            value="Update password">

                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
