<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($id){
        $data['trips']=Trip::select('pickupDate','pickupTime','pickup','dropoff','price','passenger-counter')->get();
        return view('web.home.New-Booking')->with($data);
    }
}
