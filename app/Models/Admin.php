<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    public function drivers (){
        return $this->hasMany(Driver::class);

        }
    public function trips (){
         return $this->hasMany(Trip::class);

        }
    public function payments(){
        return $this->hasMany(Payment::class);
        }


}
