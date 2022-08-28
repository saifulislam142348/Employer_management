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
use Brian2694\Toastr\Facades\Toastr;

class SalaryController extends Controller
{
   public function salaryPrepared()
   {
      $salaryPrepared = Salary::get();
      $users = User::where('type', 'employee')->get();
      $months = Month::get();
      $bonus = Bonus::where('status', 1)->get();
      $employees = Employee::where('status', 1)->get();
      $departments = Department::where('status', 1)->get();
      $designations = Designation::where('status', 1)->get();






      return view('admin/pages/include/salaryPrepared', compact('salaryPrepared', 'users', 'months', 'bonus', 'employees', 'departments', 'designations'));
   }


   public function store(Request $request)
   {

      $rules = [
         'user_id' => 'required',
         'month' => 'required',
         'salary' => 'required',
      ];
      $this->validate($request, $rules);
      $salarycondition = Salary::get();
      foreach ($salarycondition as $condition) {
         if ($condition->user_id == $request->input('user_id') && $condition->month == $request->input('month')) {
            Toastr::error('Records doesnot save. Because Monthly Salary create already exists', 'errror', [
               "positionClass" => "toast-top-center", "closeButton"
               =>
               "true", "progressBar" => "true"
            ]);
            return redirect()->back();
         } else {

            $salary = new Salary();
            $salary->user_id = $request->input('user_id');
            $salary->month = $request->input('month');
            $salary->salary = $request->input('salary');
            $salary->create_by = Auth::User()->name;
            $salary->save();
            Toastr::success('Salary create successfully', 'success', [
               "positionClass" => "toast-top-right", "closeButton"
               =>
               "true", "progressBar" => "true"
            ]);

            return redirect()->back();
         }
      }
      $salary = new Salary();
      $salary->user_id = $request->input('user_id');
      $salary->month = $request->input('month');
      $salary->salary = $request->input('salary');
      $salary->create_by = Auth::User()->name;
      $salary->save();
      Toastr::success('Salary create successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);

      return redirect()->back();
   }



   // salary Status update

   public function salaryStatus($id)
   {
      $salaryStatus = Salary::select('status')->where('id', $id)->first();
      if ($salaryStatus->status == 0) {
         $status = 1;
      } else {
         $status = 0;
      }
      Salary::where('id', $id)->update(['status' => $status]);

      Toastr::success('Salary status update successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }
}
