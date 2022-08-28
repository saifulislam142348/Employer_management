<form method="POST" action="{{ route('admin.employee.in_time') }}">
    @csrf
    <div class="row mb-3">
      

        <div class="col-md-6">

            <input type="text" class="form-control" value="{{ Auth::user()->id }}" name="user_id" readonly>
        </div>
    </div>
    <div class="row mb-3">
       
        <div class="col-md-6">

            <input class="from-control" type="text" value="{{ $date->format('F') }}" name="month" readonly>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">

            <input type="submit" class="btn btn-success btn-cender" value="In Time ">

        </div>
    </div>

</form>
