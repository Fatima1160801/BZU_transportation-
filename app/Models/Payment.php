<?php

namespace App\Models;

use Database\Seeders\PassengerSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function passengers(){
        return $this->belongsTo(Passenger::class);
    }
    
    public function admins(){
        return $this->hasone(Admin::class);
    }
}
