<!-- Modal -->
<div class="modal fade" id="bonusEditModal" tabindex="-1" aria-labelledby="bonusEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bonusEditModallLabel">Bonus Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
                @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
             @endforeach
              
          <form method="POST" action="">
            @csrf

            <div class="row mb-3">
                <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                <div class="col-md-6">
                   <select class="form-select" name="user_id" >
                    <option  selected></option>
                    @foreach ($user as $item)
                        <option value="{{$item->id}}">{{$item->id}}</option>
                    @endforeach
                   </select>
                </div>
            </div>
           
        
            <div class="row mb-3">
                <label  class="col-md-4 col-form-label text-md-end">{{ __('Month Name ') }}</label>

                <div class="col-md-6">
                   <select class="form-select" name="month_id" id="">
                    <option  selected>..</option>
                    @foreach ($month as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                   </select>
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Bonus Title') }}</label>

                <div class="col-md-6">
                    <input id="bonus" type="text" class="form-control" name="bonus_title">

                </div>
            </div>
            <div class="row mb-3">
                <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Bonus') }}</label>

                <div class="col-md-6">
                    <input id="bonus" type="text" class="form-control" name="bonus">

                </div>
            </div>
    </div>
    
    <input type="submit" class="btn btn-success " value="save">
    
</form>
       
        </div>
      </div>
    </div>
  </div>