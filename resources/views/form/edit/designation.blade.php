<!-- Modal -->
<div class="modal fade" id="designationEditModal" tabindex="-1" role="dialog" aria-labelledby="designationEditModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="designationEditModalLabel">Designation Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.designation.store') }}">
                    @csrf
                    <input type="hidden" name="id" id="up_designation_id">
                    <div class="row mb-3">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end">{{ __(' Designation Name') }}</label>
                        <div class="col-md-6">
                            <input  type="text" id="up_designation_name" class="form-control" name="name">
                        </div>
                    </div>
            </div>
            <input class="btn btn-success" type="submit" value="update">
            </form>
        </div>
    </div>
</div>
</div>
