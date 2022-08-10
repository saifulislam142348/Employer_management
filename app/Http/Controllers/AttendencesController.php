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
use Auth;
use Carbon\Carbon;

class AttendencesController extends Controller
{
   public function attendence(){
      $user= User::where('type','employee')->get();
      $month= Month::get();

    return view('admin.pages.include.attendence',compact('user','month'));
   }

   public function present(Request $request){
      $rules=[
         'user_id' => ['required'], 
         'month_id' => ['required'], 
 
     ];
     $this->validate($request,$rules);
     $todayDate = Carbon::now()->format('Y-m-d');
      $present= new Attendence();
      $present->user_id=$request->input('user_id');
      $present->month_id=$request->input('month_id');
      $present->in_time =  $todayDate;
      $present->create_by= Auth::User()->name;
     $present->save();
     return redirect()->back()->with('status',' success');
   }
}
