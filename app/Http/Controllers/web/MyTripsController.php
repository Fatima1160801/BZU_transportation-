<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyTripsController extends Controller
{
    public function show($id){
        $idd= Auth::user()->id;
        $data['passengerTrips']=Passenger_Trip::get();
        $data['trips']=Trip::get();
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();
        return view('myTrips.myTrips')->with($data);
    }

    public function UpcomingTrips($id){

        $idd= Auth::user()->id;
        $data['passengerTrips']=Passenger_Trip::select('id','seatNum','DriverNote','passenger_id','trip_id','PaymentType')->get();
        $data['trips']=Trip::select('id','pickupDate','pickupTime','pickup','dropoff','statusTrip','price','cabType','passengerCounter')->get();
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();
        return view('myTrips.UpcomingTrips')->with($data);
    }

    public function CompletedTrips($id){


        $data['passengerTrips']=Passenger_Trip::select('id','seatNum','DriverNote','passenger_id','trip_id','PaymentType')->get();
        $data['trips']=Trip::select('id','pickupDate','pickupTime','pickup','dropoff','statusTrip','price','cabType','passengerCounter')->get();
        $idd= Auth::user()->id;
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();
        return view('myTrips.CompletedTrips')->with($data);
    }
    public function CancelledTrips($id){

        $idd= Auth::user()->id;
        $data['passengerTrips']=Passenger_Trip::select('id','seatNum','DriverNote','passenger_id','trip_id','PaymentType')->get();
        $data['trips']=Trip::select('id','pickupDate','pickupTime','pickup','dropoff','statusTrip','price','cabType','passengerCounter')->get();
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();
        return view('myTrips.CancelledTrips')->with($data);
    }

}
