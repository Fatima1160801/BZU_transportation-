<?php

namespace App\Models;

use App\Models\Cab;
use App\Models\Trip;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ssn',
        'password',
    ];
    use HasFactory;
    protected $guard = 'driver';
    protected $guarded=['id','created_at','updated_at'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    
    public function trips (){
        return $this->hasMany(Trip::class);

        }
    public function cabs(){
        return $this->hasOne(Cab::class);
    }
    public function admins(){
        return $this->hasone(Admin::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
     }

}
