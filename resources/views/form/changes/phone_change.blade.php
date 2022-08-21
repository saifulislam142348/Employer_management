@extends('layouts.layout')
@section('content')
@include('user.pages.include.userHeader')
<div class="jumbotron">
    <h2  class="text-center alert-danger bg-light">****Phone Number Change***</h2>
    <hr>
    <div class="table">
        <form action="" method="">
            @csrf
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Old Phone Number') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="old_number" value="{{Auth::user()->email}}" readonly>

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('New Phone Number') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="new_phone">

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('New Confirm Email') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="confirm_phone">

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end"></label>

                <div class="col-md-6">
                    <input type="submit" class="form-control btn btn-danger btn-outline-success " value="">

                </div>
            </div>

        </form>
    </div>
</div>
@endsection
