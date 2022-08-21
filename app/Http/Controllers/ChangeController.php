<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class ChangeController extends Controller
{
    public function emailChange()
    {
        return view('form.changes.email_change');
    }
    public function passwordChange()
    {
        return view('form.changes.password_change');
    }
    public function phoneChange()
    {
        return view('form.changes.phone_change');
    }
    public function nidChange()
    {
        return view('form.changes.nid_change');
    }


    // update function 

    public function passwordUpdate(Request $request){
        $id=Auth::user()->id;
        $db_password= Auth::user()->password;

        $old_password= $request->input('old_password');
        $new_password= $request->input('new_password');
        $confirm_password= $request->input('confirm_password');

        if(Hash::check(  $old_password, $db_password)){

            if($new_password===$confirm_password){
                User::find($id)->update(['password'=> Hash::make($request->input('new_password'))]);
                Auth::logout();
               
                return redirect()->route('login');
              
            }
            else{

                return redirect()->back()->with('newpassword',' new and confirm password  not match');

            }

        }
        else{
            return redirect()->back()->with('oldpassword',' old password  not match');
            
        }


    }
}
