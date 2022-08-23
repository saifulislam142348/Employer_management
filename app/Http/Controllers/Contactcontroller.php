<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class Contactcontroller extends Controller
{
   public function store(){

    $contact_from_data= request()->all();
    Mail::to('saiful17182103353@gmail.com')->send(new ContactFormMail(  $contact_from_data));
   }
}
