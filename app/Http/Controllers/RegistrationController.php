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
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
   public function registration(){
    $registration = User::where('type','employee')->get();
    $users= User::get();
    $months= Month::get();
    $bonus= Bonus::get();
    $employees= Employee::get();
    $departments= Department::get();
    $designations= Designation::get();
    return view('admin.pages.include.registration',compact('registration','users','months','bonus','employees','departments','designations'));
   }

   public function store(Request $request){
    $rules=[
        'name' => 'required', 
        'email' =>'required',
        'password' => 'required', 'min:8',
        'gender' => 'required', 
        'address' =>'required',
        'nid' => 'required',
        'phone' => 'required',
       

    ];
    $this->validate($request,$rules);

    $registration= new User();
    $registration->name=$request->input('name');
    $registration->email=$request->input('email');
    $registration->password=Hash::make($request->input('password'));
   
    $registration->gender=$request->input('gender');
    $registration->address=$request->input('address');
    $registration->nid=$request->input('nid');
    $registration->phone=$request->input('phone');
    $registration->create_by= Auth::User()->name;
    $registration->save();

        Toastr::success('Department create successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true", "progressBar" => "true"
        ]);
        return redirect()->back();

   }

   
   public function statusChange($id){
  $getstatus=User::select('status')->where('id',$id)->first();

        if($getstatus->status==1){
            $status=0;
        }else{
            $status=1;
        }
        User::where('id',$id)->update(['status'=>  $status]);


        Toastr::success('Status update successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true", "progressBar" => "true"
        ]);
        return redirect()->back();
   
   }
    public function delete($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        Toastr::Error('Delete successfully', 'success', [
            "positionClass" => "toast-top-right", "closeButton"
            =>
            "true", "progressBar" => "true"
        ]);
        return redirect()->back();
    }

    public function edit($id){

        $registration= User::find($id);
        return redirect('admin.pages.include.registration', compact('registration'));
    }
}
