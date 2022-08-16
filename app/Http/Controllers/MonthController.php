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
class MonthController extends Controller
{
    public function month(){
        $months= Month::all();
        return view('admin.pages.include.month',compact('months'));
    }
     public function store(Request $request){
        $rules=[
            'name' => 'required|unique:months', 
            
        ];
        $this->validate($request,$rules);
        $month= new Month();
        $month->name=$request->input('name');
        $month->create_by=Auth::user()->name;
        $month->save();
        Toastr::success('Month create successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true", "progressBar" => "true"
        ]);
        return redirect()->back();
     }
}
