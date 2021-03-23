<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function trips (){
        return $this->hasMany(Trip::class);

        }
    public function cabs(){
        return $this->hasOne(Cab::class);
    }

}
