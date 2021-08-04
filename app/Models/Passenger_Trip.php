<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger_Trip extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    protected $fillable=['seatNum','DriverNote','trip_id','passenger_id','statusTrip','PaymentType'];

    public function trips(){
        return $this->belongsToMany(Trip::class);

        }
        public function passengers(){

            return $this->belongsToMany(Passenger::class,'id','passenger_id');

         }


}
