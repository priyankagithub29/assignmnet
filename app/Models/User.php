<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password','gender','age','aadhar_number','identity_proof','address','state','city','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     public function state()
    {
        return $this->belongsTo(State::class);
    }

     public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function setPasswordAttribute($value)
    {   
         $this->attributes['password'] =Hash::make($value);
       
    }

      public function cylinder()
    {
        return $this->hasMany(Cylinder::class,'supplier_id');
    }

      public function booking()
    {
        return $this->hasMany(Booking::class,'supplier_id');
    }
}
