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
use App\Models\Month;
use App\Models\Salary;
use Illuminate\Auth\Access\Response;
use App\Models\Department_Designation;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;



class DepartmentController extends Controller
{
   public function department()
   {
      $users = User::get();
      $months = Month::get();
      $bonus = Bonus::where('status', 1)->get();
      $employees = Employee::where('status', 1)->get();
      $departments = Department::get();
      $designations = Designation::where('status', 1)->get();
      return view('admin.pages.include.department', compact('users', 'months', 'bonus', 'employees', 'departments', 'designations'));
   }
   public function depart_design()
   {

      $departments = Department::paginate(2);
      $designations = Designation::paginate(2);
      $relations = Department_Designation::get();
      return view('admin.pages.include.departmentDesignation', compact('departments', 'designations', 'relations'));
   }

   public function deptStore(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'name' => 'required|unique:departments',

      ]);
  
         $department = new Department();
         $department->name = $request->input('name');
         $department->create_by = Auth::User()->name;
         $department->save();
         Toastr::success('Department create successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true",
         ]);
         return redirect()->back();
    
   }
   public function deptrelation(Request $request)
   {
      $rules = [
         'department_id' => ['required'],
         'designation_id' => ['required'],

      ];
      $this->validate($request, $rules);

      $dd = new Department_Designation();
      $dd->department_id = $request->input('department_id');
      $dd->designation_id = $request->input('designation_id');
      $dd->create_by = Auth::User()->name;
      $dd->save();
      Toastr::success('Department Designation ralation create successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true",
      ]);
      return redirect()->back();
   }

   public function departmentStatus($id)
   {
      $departmentStatus = Department::select('status')->where('id', $id)->first();
      if ($departmentStatus->status == 0) {
         $status = 1;
      } else {
         $status = 0;
      }
      Department::where('id', $id)->update(['status' => $status]);
      Toastr::success('Status update successully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }

   public function deptRelationStatus($id)
   {
      $Department_Designation = Department_Designation::select('status')->where('id', $id)->first();
      if ($Department_Designation->status == 0) {
         $status = 1;
      } else {
         $status = 0;
      }
      Department_Designation::where('id', $id)->update(['status' => $status]);
      Toastr::success('status update successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true",
      ]);
      return redirect()->back();
   }
   public function delete($id)
   {
      $departmentDelete = department::find($id);
      $departmentDelete->delete();
      Toastr::Error('Delete successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true",
      ]);
      return redirect()->back();
   }
   public function deleteelation($id)
   {
      $Department_Designation = Department_Designation::find($id);
      $Department_Designation->delete();
      Toastr::Error('delete successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true",
      ]);
      return redirect()->back();
   }
}
