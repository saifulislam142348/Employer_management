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

class EmployeesController extends Controller
{
    public function employee(){
        return view('admin.pages.include.employee');
    }
    public function  store(Request $request){
        $rules=[
            'user_id' => ['required'], 
            'department_id' =>['required'],
            'designation_id' => ['required'],
            'salary' => ['required'], 
            'join_date' =>['required'],
        ];
        $this->validate($request,$rules);
        $employee= new Employee();
        $employee->user_id=$request->input('user_id');
        $employee->department_id=$request->input('department_id');
        $employee->designation_id=$request->input('designation_id');
        $employee->salary=$request->input('salary');
        $employee->join_date=$request->input('join_date');
        $employee->save();
        return redirect()->back()->with('status','employyess success');

    }
}
