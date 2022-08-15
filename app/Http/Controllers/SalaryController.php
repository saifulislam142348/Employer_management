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
   public function salaryPrepared(){
        $salaryPrepared= Salary::get();
        $users= User::get();
        $months= Month::get();
        $bonus= Bonus::get();
        $employees= Employee::get();
        $departments= Department::get();
        $designations= Designation::get();
    return view('admin/pages/include/salaryPrepared',compact('salaryPrepared','users','months','bonus','employees','departments','designations'));
   }


   public function store(Request $request){

        $rules = [
            'bonus_id' => 'required',
        ];
        $this->validate($request, $rules);
        $salary = new Salary();
        $salary->user_id = $request->input('user_id');
        $salary->month_id = $request->input('month_id');
        $salary->bonus_id = $request->input('bonus_id');
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
