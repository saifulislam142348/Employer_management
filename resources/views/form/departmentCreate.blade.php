<!-- Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="departmentModalLabel">Department Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form method="POST" action="{{ route('admin.department.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __('Department  Name') }}</label>

                        <div class="col-md-6">
                            <input id="departmet" type="text" class="form-control" name="name">

                        </div>
                        {{-- @foreach ($errors->get('name') as $message)
                            <span class="text-center alert-danger">{{ $message }}</span>
                        @endforeach --}}
                    </div>
            </div>
            <input class="btn btn-success add_department" type="submit" value="save">
            </form>
        </div>
    </div>
</div>
