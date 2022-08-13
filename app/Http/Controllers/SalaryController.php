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
class SalaryController extends Controller
{
   public function salaryPrepared(){
        $salaryPrepared= Salary::get();
        $users= User::get();
        $months= Month::get();
        $bonus= Bonus::get();
    return view('admin/pages/include/salaryPrepared',compact('salaryPrepared','users','months','bonus'));
   }


   public function store(Request $request){

        $rules = [
            'user_id' => ['required'],
            'month_id' => ['required'],
            'bonus_id' => ['required'],
        ];
        $this->validate($request, $rules);
        $salary = new Salary();
        $salary->user_id = $request->input('user_id');
        $salary->month_id = $request->input('month_id');
        $salary->bonus_id = $request->input('bonus_id');
        $salary->create_by = Auth::User()->name;
        $salary->save();
        return redirect()->back()->with('status', ' success');
   }
}
