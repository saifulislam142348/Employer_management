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

class DesignationController extends Controller
{
   public function designation()
   {
      $designation = Designation::all();
      $department = Department::all();
      return view('admin.pages.include.designation', compact('designation', 'department'));
   }


   public function store(Request $request)
   {
      $rules = [
         'name' => ['required'],

      ];
      $this->validate($request, $rules);

      $designation = new Designation();
      $designation->name = $request->input('name');
      $designation->create_by = Auth::User()->name;
      $designation->save();
      return redirect()->back()->with('status', 'department success');
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
      return back();
   }
}
