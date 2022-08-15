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
use Brian2694\Toastr\Facades\Toastr;

class DesignationController extends Controller
{
   public function designation()
   {
      $designations= Designation::all();
      $departments = Department::all();
      return view('admin.pages.include.designation', compact('designations', 'departments'));
   }


   public function store(Request $request)
   {
      $rules = [
         'name' => 'required|unique:designations',

      ];
      $this->validate($request, $rules);

      $designation = new Designation();
      $designation->name = $request->input('name');
      $designation->create_by = Auth::User()->name;
      $designation->save();
      Toastr::success('Designation create successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true",
      ]);
      return redirect()->back();
   }
   public function designationStatus($id)
   {
      $designationStatus = Designation::select('status')->where('id', $id)->first();
      if ($designationStatus->status == 0) {
         $status = 1;
      } else {
         $status = 0;
      }
      Designation::where('id', $id)->update(['status' => $status]);
      return redirect()->back();
   }
   public function delete($id)
   {
      $designationDelete = Designation::find($id);
      $designationDelete->delete();
      Toastr::Error('Delete successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }
}
