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
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class BonusController extends Controller
{
   public function bonus()
   {
      $users= User::get();
        $months= Month::get();
        $bonus= Bonus::get();
        $employees= Employee::get();
        $departments= Department::get();
        $designations= Designation::get();
      
      return view('admin.pages.include.bonus', compact('users', 'months', 'employees', 'bonus','departments','designations'));
   }

   public function bonusstore(Request $request)
   {
      $rules = [
         'bonus_title' => 'required',
         'bonus' => 'required',
         'month' => 'required',

      ];
      $this->validate($request, $rules);

      $bonus = new bonus();
      $bonus->user_id = $request->input('user_id');
      $bonus->month = $request->input('month');
      $bonus->bonus_title = $request->input('bonus_title');
      $bonus->bonus = $request->input('bonus');
      $bonus->create_by = Auth::User()->name;
      $bonus->save();
      Toastr::success('Bonus added done', 'success', [
         "positionClass" => "toast-top-right",
         "closeButton" => "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }
   public function bonusStatus($id)
   {
      $bonusStatus = Bonus::select('status')->where('user_id', $id)->first();
      if ($bonusStatus->status == 0) {
         $status = 1;
      }
      else{
         $status=0;
      }
      Bonus::where('user_id', $id)->update(['status'=> $status]);
      Toastr::success('Bonus status change', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }
   public function delete($id)
   {
      $bonusDelete = Bonus::find($id);
      $bonusDelete->delete();
      Toastr::Error('Bonus Delete done', 'delete', [
         "positionClass" => "toast-top-right", "closeButton"=>"true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }

   // user pannel

   public function userBonus(){
      $bonus=Bonus::where('status',1)->get();
      $users= User::get();
      $months= Month::get();
      return view('user.pages.include.bonus',compact('bonus','users','months'));
   }
}
