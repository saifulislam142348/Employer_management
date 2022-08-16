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
use Brian2694\Toastr\Facades\Toastr;


class AttendencesController extends Controller
{
   // admin panel

   public function attendence()
   {
      $attendence = Attendence::latest()->get();
      $in = Attendence::select('in_time')->latest()->get();
      $out = Attendence::select('out_time')->latest()->get();
      $users = User::where('type', 'employee')->get();
      $months = Month::get();

      return view('admin.pages.include.attendence', compact('users', 'months', 'attendence', 'in', 'out'));
   }

   public function inTime(Request $request)
   {
      $rules = [
         'user_id' => 'required',
         'month' => 'required'

      ];
      $this->validate($request, $rules);
      $todayDate = Carbon::now()->format('Y-m-d H:i:s');
      $present = new Attendence();
      $present->user_id = $request->input('user_id');
      $present->month = $request->input('month');
      $present->in_time =  $todayDate;
      $present->create_by = Auth::User()->name;
      $present->save();
      Toastr::success('Employee in time create successfully', 'success', ["positionClass" => "toast-top-right", "closeButton" => "false", "progressBar" => "true",]);
      return redirect()->back();
   }

   public function outTime(Request $request)
   {
      $rules = [
         'user_id' => ['required'],
         'month' => ['required'],
      ];
      $this->validate($request, $rules);
      $todayDate = Carbon::now()->format('Y-m-d H:i:s');
      $present = new Attendence();
      $present->user_id = $request->input('user_id');
      $present->month= $request->input('month');
      $present->out_time =  $todayDate;
      $present->status = 1;
      $present->create_by = Auth::User()->name;
      $present->save();
      Toastr::success('Employee out  time create successfully', 'success', ["positionClass" => "toast-top-right", "closeButton" => "false", "progressBar" => "true",]);
      return redirect()->back();
   }


   public function delete($id)
   {
      $attendenceDelete = Attendence::find($id);
      $attendenceDelete->delete();
      Toastr::success('Attendemce Delete done', 'success', [
         "positionClass" => "toast-top-right", "closeButton" =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }


   // user pannel

   public function userAttendence()
   {
      $attendence = Attendence::latest()->get();
      $in = Attendence::select('in_time')->latest()->get();
      $out = Attendence::select('out_time')->latest()->get();
      $users = User::where('type', 'employee')->get();
      $months = Month::get();
      $date = \Carbon\Carbon::now();
       
     

      return view('user.pages.include.attendence', compact('users', 'months', 'attendence', 'in', 'out','date'));
   }
}
