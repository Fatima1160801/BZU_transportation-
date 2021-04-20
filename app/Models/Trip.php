<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    protected $fillable = [
        'cabType',
        'pickupDate',
        'pickupTime',
        'pickup',
        'dropoff',
        'price',
        'statusTrip',
        'gratuity',
        'passengerCounter',
        'PaymentType',
        'DriverNote',
    ];
    public function driver(){
        return $this->belongsTo(Driver::class);

        }
        public function Passenger_Trip(){
            return $this->hasMany (Passenger_Trip::class);
                }
    public function passengers(){
        return $this->belongsToMany(Passenger::class);

        }
     public function admins(){
            return $this->hasone(Admin::class);
        }

}
