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
use Auth;

class RegistrationController extends Controller
{
   public function registration(){
    $registration = User::get();

    return view('admin.pages.include.registration',compact('registration'));
   }

   public function store(Request $request){
    $rules=[
        'name' => ['required'], 
        'email' =>['required'],
        'password' => ['required', 'min:8'],
        'gender' => ['required'], 
        'address' =>['required'],
        'nid' => ['required'],
        'phone' => ['required'],
       

    ];
    $this->validate($request,$rules);

    $registration= new User();
    $registration->name=$request->input('name');
    $registration->email=$request->input('email');
    $registration->password=$request->input('password');
    
    $registration->gender=$request->input('gender');
    $registration->address=$request->input('address');
    $registration->nid=$request->input('nid');
    $registration->phone=$request->input('phone');
    $registration->create_by=Auth::User()->name;
    $registration->save();
   
    return redirect()->back()->with('status','Registration success');

   }
}