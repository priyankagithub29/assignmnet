<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
      protected $fillable = ['supplier_id','cylinder','name','email','gender','age','aadhar_number','identity_proof','covid_status','covid_positive','address','state','city','phone','status'];
    public function supplier()
    {
        return $this->belongsTo(User::class,'supplier_id');
    }

    public function state_name()
    {
        return $this->belongsTo(State::class,'state');
    }

     public function city_name()
    {
        return $this->belongsTo(City::class,'city');
    }

    public function getStatusAttribute($value)
    {       
        if($value==0)
        {

        return ucfirst('new booking');
        }elseif($value==1)
        {

        return ucfirst('Processing');
        }elseif($value==2)
        {

        return ucfirst('Delivered');
        }elseif($value==3)
        {

        return ucfirst('Cancelled');
        }
    }
}
