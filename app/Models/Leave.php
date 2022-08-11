<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
     public function users(){
     return $this->belongsTo(User::class, 'user_id', 'id');
 }
 public function months(){
     return $this->belongsTo(Month::class, 'month_id','id');
 }
}
