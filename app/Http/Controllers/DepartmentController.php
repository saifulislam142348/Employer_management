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
use Auth;
class DepartmentController extends Controller
{
   public function department(){
      $department= Department::all();
    return view('admin.pages.include.department',compact('department'));
   }
   public function depart_design(){
      return view('admin.pages.include.departmentDesignation');
   }

   public function deptStore(Request $request){
      $rules=[
         'name' => ['required'], 
 
     ];
     $this->validate($request,$rules);
 
     $department= new Department();
     $department->name=$request->input('name');
     $department->create_by= Auth::User()->name;
     $department->save();
     return redirect()->back()->with('status','department success');
   }
}
