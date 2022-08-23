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
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
  

   public function index(){
      $date = "2022-08-21 11:00:00";
      $datework = Carbon::createFromDate($date);
      $now = Carbon::now();
      $testdate = $datework->diffInDays($now);
      $object=Carbon::now(+6)->format('Y-M-D h:i:s');
      $days=carbon::now()->daysInMonth;

      $employees=Employee::get();
      $date = \Carbon\Carbon::now();
      $attendence = Attendence::latest()->get();
      $in=Attendence::where('status' ,0)->where('user_id',Auth::user()->id)->get();
     
      $out=Attendence::where('status',1)->where('user_id',Auth::user()->id)->get();
      $present=Attendence::where('user_id',Auth::user()->id)->latest()->first();
      $absent=Attendence::where('user_id',Auth::user()->id)->latest()->first();
    
    return view('user.index',compact('employees','in','out','date','attendence','present','absent'));
   }
}
