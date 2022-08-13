
   @if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif


                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              

<form action="{{route('admin.department.relation')}}"  method="POST">
    @csrf
<div class="d-flex flex-row justify-content-end bd-highlight">
   
    <div class="p-2 bd-highlight">
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end justify-content">{{ __('Departmet Select') }}</label>
            <div class="col-md-6">
                <select class="form-select" name="department_id" id="departmet">
                    <option selected></option>
                   @foreach ($department as $item)
                       <option value="  {{$item->id}}">
                        {{$item->name}}
                       </option>
                   @endforeach
                </select>

             
            </div>
        </div>

    </div>
    <div class="p-2 bd-highlight">
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end justify-content-center">{{ __('Designation Select') }}</label>
            <div class="col-md-6">
                <select class="form-select" name="designation_id" id="departmet">
                    <option selected></option>
                    @foreach ($designation as $item)
                    <option value="  {{$item->id}}">
                     {{$item->name}}
                    </option>
                @endforeach
                </select>

             
            </div>
        </div>

    </div>
    <div class="p-2 bd-highlight">
        <input type="submit" class="btn btn-success" value="Add">

    </div>

</div>
</form>