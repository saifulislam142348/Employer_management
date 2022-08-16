<form method="POST" action="{{ route('admin.employee.out_time') }}">
    @csrf
    <div class="row mb-3">
       
        <div class="col-md-6">

            <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="user_id" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">

            <input class="from-control" type="hidden" value="{{ $date->format('F') }}" name="month" readonly>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <input type="submit" class="btn btn-danger btn-cender" value="Out Time ">

        </div>
    </div>

</form>
