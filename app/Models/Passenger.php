<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passenger extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function trips (){
        return $this->belongsToMany(Trip::class);

        }
    public function payments(){
            return $this->hasMany(Payment::class);
        }
        public function Passenger_Trip(){
            return $this->belongsToMany(Passenger_Trip::class);
        }
        public function users(){
            return $this->belongsTo(User::class);
         }


}
