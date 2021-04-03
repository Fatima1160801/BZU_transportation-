<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cab extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    public function drivers(){
        return $this ->belongsTo(Driver::class);
    }

}
