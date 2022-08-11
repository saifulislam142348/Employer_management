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
use App\Models\Department_Designation;
use Auth;

class BonusController extends Controller
{
   public function bonus(){
      $employees= Employee::get();
      $user = User::where('type','employee')->get();
      $month = Month::get();
      $bonus = Bonus::get();
    return view('admin.pages.include.bonus', compact('user','month','employees','bonus'));
   }

   public function bonusstore(Request $request){
      $rules=[
         'user_id' => ['required'], 
         'month_id' => ['required'], 
         'bonus_title' => ['required'], 
         'bonus' => ['required'], 
 
     ];
     $this->validate($request,$rules);
 
      $bonus= new bonus();
      $bonus->user_id=$request->input('user_id');
      $bonus->month_id=$request->input('month_id');
      $bonus->bonus_title=$request->input('bonus_title');
      $bonus->bonus=$request->input('bonus');
      $bonus->create_by= Auth::User()->name;
     $bonus->save();
     return redirect()->back()->with('status',' success');
   }
}
