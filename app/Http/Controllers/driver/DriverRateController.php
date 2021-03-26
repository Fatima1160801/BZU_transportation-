<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverRateController extends Controller
{
    public function DriverRate($id){
        return view('driver.rate.rate');
    }
}
