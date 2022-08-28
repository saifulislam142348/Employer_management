<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'forget_token',
        'gender',
        'address',
        'nid',
        'phone',
        'create_by',
        'update_by',
        'delete_by',
        'type',
        'status'
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function salaries(){
        return $this->hasMany(Salary::class,'user_id','id');
  }
    public function departments(){
        return $this->hasOne(Department::class);
  }
    public function designations(){
        return $this->hasOne(Designation::class);
  }
  
    public function bonuses(){
        return $this->hasMany(Bonus::class, 'user_id','id');
  }
    public function employees(){
        return $this->hasOne(Employee::class,'user_id','id');
  }
}
