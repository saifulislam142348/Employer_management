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
use App\Models\Department_Designation;
use Auth;
class DepartmentController extends Controller
{
   public function department(){
      $department= Department::all();
      $designation = Designation::all();
    return view('admin.pages.include.department',compact('department','designation'));
   }
   public function depart_design(){

  $department= Department::all();
      $designation = Designation::all();
      $relation= Department_Designation::get();
      return view('admin.pages.include.departmentDesignation', compact('department','designation','relation'));
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
    public function deptrelation(Request $request){
      $rules=[
         'name' => ['required'], 
 
     ];
     $this->validate($request,$rules);
 
      $dd= new Department_Designation();
      $dd->department_id=$request->input('department_id');
      $dd->designation_id=$request->input('designation_id');
      $dd->create_by= Auth::User()->name;
     $dd->save();
     return redirect()->back()->with('status','department relation success');

    }
}
