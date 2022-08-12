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
use App\Models\month;
use Auth;
class LeavesController extends Controller
{
   public function leave(){
      $user = User::where('type','employee')->get();
      $month = month::get();
      $leaves=Leave::get();
    return view('admin.pages.include.leave',compact('user','month','leaves'));
   }

   public function leavestore(Request $request){
      $rules=[
         'user_id' => ['required'], 
         'month_id' => ['required'], 
         'leave' => ['required'], 
        
 
     ];
     $this->validate($request,$rules);
 
      $leave= new Leave();
      $leave->user_id=$request->input('user_id');
      $leave->month_id=$request->input('month_id');
      $leave->leave=$request->input('leave');
      $leave->create_by= Auth::User()->name;
     $leave->save();
     return redirect()->back()->with('status',' success');
   }

   public function leaveStatus($id){
      $leaveStatus= Leave::select('status')->where('user_id', $id)->first();
      if($leaveStatus->status==0){
         $status=1;
      }
      else{
         $status=0;
      }
      Leave::where('user_id', $id)->update(['status'=> $status]);
      return redirect()->back()->with('status','status update success');

   }
   public function delete($id)
   {
      $leaveDelete = Leave::find($id);
      $leaveDelete->delete();
      return back();
   }
}
