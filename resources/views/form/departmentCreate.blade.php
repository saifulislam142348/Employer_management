<!-- Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="departmentModalLabel">Department Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              
                <form method="POST" action="{{ route('admin.department.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __('Department  Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name">

                        </div>
                    </div>
            </div>
           <input class="btn btn-success" type="submit" value="save">
             
           
            </form>
        </div>
    </div>
</div>
