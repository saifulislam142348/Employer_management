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

class EmployeesController extends Controller
{
    public function employee()
    {
        $employees = Employee::paginate(2);
        $users = User::where('type', 'employee')->get();
        $departments = Department::get();
        $designations = Designation::get();
        $months = Month::get();
        return view('admin.pages.include.employee', compact('users', 'departments', 'designations', 'months', 'employees'));
    }
    public function  store(Request $request)
    {
        $rules = [
            'user_id' => 'required|unique:employees',
            'department_id' => 'required',
            'designation_id' => 'required',
            'month' => 'required',
            'salary' => 'required',
            'join_date' => 'required',
        ];
        $this->validate($request, $rules);
        $employee = new Employee();
        $employee->user_id = $request->input('user_id');
        $employee->department_id = $request->input('department_id');
        $employee->designation_id = $request->input('designation_id');
        $employee->month = $request->input('month');
        $employee->salary = $request->input('salary');
        $employee->join_date = $request->input('join_date');
        $employee->create_by = Auth::user()->name;
        $employee->save();
        Toastr::success('Employees  create successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true",
        ]);
        // dd(  $employee);
        return redirect()->back();
    }

    public function employeeStatus($id)
    {
        $employeeStatus = Employee::select('status')->where('id', $id)->first();
        if ($employeeStatus->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        Employee::where('id', $id)->update(['status' => $status]);
        return redirect()->back()->with('status', 'status upadate');
    }
    public function delete($id)
    {
        $employeeDelete = Employee::find($id);
        $employeeDelete->delete();
        Toastr::Error('Delete successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true", "progressBar" => "true"
        ]);
        return redirect()->back();
    }

    // user employee

    public function userEmployee()
    {
        $allEmployees = Employee::where('status', '1')->get();
        // dd($allEmployees);
        return view('user.pages.include.employee', compact('allEmployees'));
    }

    // employee profile

    public function employeeProfile(){
        return view('user.pages.include.employee_profile');
    }
}
