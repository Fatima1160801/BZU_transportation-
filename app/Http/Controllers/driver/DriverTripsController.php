<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverTripsController extends Controller
{
    public function DriverTrips($id){
        return view('driver.trips.trips');
    }
}
