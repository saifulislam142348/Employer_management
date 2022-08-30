<!-- Modal -->
<div class="modal fade" id="bonusEditModal" tabindex="-1" aria-labelledby="bonusEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bonusEditModallLabel">Bonus Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          
                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              
          <form method="POST" action="">
            @csrf

            <div class="row mb-3">
               

                <div class="col-md-6">
                   <input type="hidden" name='up_bonus_id' id="id">
                </div>
            </div>
           
        
            <div class="row mb-3">
                <label  class="col-md-4 col-form-label text-md-end">{{ __('Month Name ') }}</label>

                <div class="col-md-6">
                   <input type="text" name="up_bonus_month" >
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Bonus Title') }}</label>

                <div class="col-md-6">
                    <input id="bonus" type="text" class="form-control" name="up_bonus_title">

                </div>
            </div>
            <div class="row mb-3">
                <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Bonus') }}</label>

                <div class="col-md-6">
                    <input id="bonus" type="text" class="form-control" name="up_bonus">

                </div>
            </div>
    </div>
    
    <input type="submit" class="btn btn-success " value="Update">
    
</form>
       
        </div>
      </div>
    </div>
  </div>