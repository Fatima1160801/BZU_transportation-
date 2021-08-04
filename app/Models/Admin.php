<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable implements MustVerifyEmail

{
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'bankNum',
        'ssn',
        'salary',
    ];
    protected $guard = 'admin';
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
        public function users(){
            return $this->belongsTo(User::class);
         }



}
