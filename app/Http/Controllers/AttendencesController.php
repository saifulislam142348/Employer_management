<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendence;
use App\Models\Bonus;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Salary;
use App\Models\Month;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use  Toastr;

class AttendencesController extends Controller
{
   public function attendence(){
      $attendence= Attendence::latest()->get();
      $in= Attendence::select('in_time')->latest()->get();
      $out= Attendence::select('out_time')->latest()->get();
      $users= User::where('type','employee')->get();
      $months= Month::get();

    return view('admin.pages.include.attendence',compact('users','months','attendence','in','out'));
   }

   public function inTime(Request $request){
      $rules=[
         'user_id' => 'required', 
         'month_id' => 'required'
 
     ];
     $this->validate($request,$rules);
     $todayDate = Carbon::now()->format('Y-m-d H:i:s');
      $present= new Attendence();
      $present->user_id=$request->input('user_id');
      $present->month_id=$request->input('month_id');
      $present->in_time =  $todayDate;
      $present->create_by= Auth::User()->name;
     $present->save();
     Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center","closeButton"=> "false", "progressBar" => "true",]);
     return redirect()->back();
    
   }

public function outTime(Request $request){
    $rules=[
    'user_id' => ['required'], 
    'month_id' => ['required'], 
];
 $this->validate($request,$rules);
 $todayDate = Carbon::now()->format('Y-m-d H:i:s');
  $present= new Attendence();
  $present->user_id=$request->input('user_id');
  $present->month_id=$request->input('month_id');
  $present->out_time =  $todayDate;
  $present->status = 1;
  $present->create_by= Auth::User()->name;
 $present->save();
 Toastr::success('Messages in here', 'success', ["positionClass" => "toast-top-right", "closeButton"=> "false", "progressBar" => "true",]);
 return redirect();
}

public function delete($id){
   $attendenceDelete= Attendence::find($id);
    $attendenceDelete->delete();
    return back();

}

}
