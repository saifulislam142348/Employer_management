   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           Salary (Monthly)</div>
                       <div class="h5 mb-0 font-weight-bold text-gray-800">TK.
                           @foreach ($employees as $item)
                               @if (Auth::user()->id == $item->user_id)
                                   {{ $item->salary }}
                               @endif
                           @endforeach
                       </div>
                   </div>
                   <div class="col-auto">
                       <i class="fas fa-calendar fa-2x text-gray-300"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Salary (Annual)</div>
                       <div class="h5 mb-0 font-weight-bold text-gray-800">TK.
                           @foreach ($employees as $item)
                               @if (Auth::user()->id == $item->user_id)
                                   {{ $item->salary * 12 }}
                               @endif
                           @endforeach
                       </div>
                   </div>
                   <div class="col-auto">
                       <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">daily Attendences
                       </div>
                       <div class="row no-gutters align-items-center">
                           <div class="col-auto">
                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                <button type="button" class="btn btn-primary">
                                     <strong> .IN-TIME :</strong>
                                   <span class="badge bg-danger">
                              
                                    
                                {{$in->count()}}
                                   </span>
                                  </button>
                               </div>
                              
                           </div>
                           <hr>
                           <div class="col-auto">
                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                <button type="button" class="btn btn-primary">
                                     <strong> OUT-TIME:</strong>
                                   <span class="badge bg-danger">
                                    {{$out->count()}}
                                   </span>
                                  </button>
                               </div>
                              
                           </div>

                       </div>
                   </div>
                   <div class="col-auto">
                       <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
               <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Monthly Attendences
                       </div>
                       <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                             <button type="button" class="btn btn-primary">
                                  <strong> PRESENT::</strong>
                                <span class="badge bg-danger">4</span>
                               </button>
                            </div>
                           
                        </div>
                        <hr>
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                             <button type="button" class="btn btn-primary">
                                  <strong> ABSENT:</strong>
                                <span class="badge bg-danger">4</span>
                               </button>
                            </div>
                           
                        </div>

                       </div>
                   </div>
                   <div class="col-auto">
                       <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Pending Requests Card Example -->
