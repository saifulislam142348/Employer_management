<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Department And Designation Relation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              
      @include('form.relationCreate')
      </div>
   
    </div>
  </div>
</div>