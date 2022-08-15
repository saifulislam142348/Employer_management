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
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
  

   public function index(){
    return view('user.index');
   }
}
