<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cylinder extends Model
{
    use HasFactory;
     protected $fillable = [
        'supplier_id','five_cylinder','ten_cylinder','fifteen_cylinder'
       
    ];
     public function supplier()
    {
        return $this->belongsTo(User::class,'supplier_id');
    }
}
