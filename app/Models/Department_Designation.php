<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_Designation extends Model
{
    use HasFactory;
     public function departments(){
       return $this->belongsTo(Department::class,'department_id','id');
 }
     public function designations(){
         return $this->belongsTo(Designation::class,'designation_id','id');
 }
   public function months(){
      return $this->belongsTo(Month::class,'month_id','id');
 } 
 
}
