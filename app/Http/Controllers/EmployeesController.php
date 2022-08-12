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

class EmployeesController extends Controller
{
    public function employee(){
        $employees= Employee::get();
        $user = User::where('type','employee')->get();
        $department =Department::get();
        $designation =Designation::get();
        $month = Month::get();
        return view('admin.pages.include.employee',compact('user','department', 'designation' ,'month','employees'));
    }
    public function  store(Request $request){
        $rules=[
            'user_id' => ['required'], 
            'department_id' =>['required'],
            'designation_id' => ['required'],
            'month_id' => ['required'],

            'salary' => ['required'], 
            'join_date' =>['required'],
        ];
        $this->validate($request,$rules);
        $employee= new Employee();
        $employee->user_id=$request->input('user_id');
        $employee->department_id=$request->input('department_id');
        $employee->designation_id=$request->input('designation_id');
        $employee->month_id=$request->input('month_id');
        $employee->salary=$request->input('salary');
        $employee->join_date=$request->input('join_date');
        $employee->save();
        return redirect()->back()->with('status','employyess success');

    }

    public function employeeStatus($id){
        $employeeStatus= Employee::select('status')->where('id', $id)->first();
        if ($employeeStatus->status==0) {
           $status=1;
        }
        else{
            $status=0;
        }
        Employee::where('id',$id)->update(['status'=> $status]);
        return redirect()->back()->with('status','status upadate');
    }
    public function delete($id)
    {
        $employeeDelete = Employee::find($id);
        $employeeDelete->delete();
        return back();
    }
}
