<!-- Modal -->
<div class="modal fade" id="leaveEditModal" tabindex="-1" role="dialog" aria-labelledby="leaveEditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leaveEditModalLabel">Leave Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form method="POST" action="{{ route('admin.employee.leave') }}">
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
               <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Leave') }}</label>
               <div class="col-md-6">
                 <div class="form-check">
                   <input class="form-check-input" name="leave" type="checkbox" value="1" 
id="flexCheckIndeterminate">
                   <label class="form-check-label" for="flexCheckIndeterminate">
                    
                   </label>
                 </div>
               </div>
           </div>
           
     
   </div>
   
   <input type="submit" class="btn btn-success " value="save">
   
  </form>
      </div>
    </div>
  </div>
</div>