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
class MonthController extends Controller
{
    public function month(){
        $month= Month::all();
        return view('admin.pages.include.month',compact('month'));
    }
     public function store(Request $request){
        $rules=[
            'name' => ['required'], 
            
        ];
        $this->validate($request,$rules);
        $month= new Month();
        $month->name=$request->input('name');
        $month->create_by=Auth::user()->name;
        $month->save();
        return redirect()->back()->with('status','month success');
     }
}
