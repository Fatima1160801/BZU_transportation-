<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyTripsController extends Controller
{
    public function MyTrips($id){
        return view('web.myTrips.myTrips');
    }
}
