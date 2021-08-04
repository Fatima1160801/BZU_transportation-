<?php

namespace App\Http\Controllers\web;

use App\Models\Cab;
use App\Models\Trip;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookedController extends Controller
{
    public function show($id ,Request $request){
        $idd=Auth::user()->id;
        $data['trips']=Trip::get();
        $data['trip']=Trip::FindOrFail($id);
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();

        $data['idpass']=Null;
        if(count($data['pass'])>0){
            $var=$data['pass'][0];
            $rrr=$var->id;
            $data['idpass']= Passenger_Trip::findOrFail($rrr);

        }
        
        return view('booked.booked')->with($data);
    }

    public function delete(Request $request,$id){

        Passenger_Trip::findOrFail($request->id)->update([
            'statusTrip'=>$request->statusTrip,
        ]);
        $seats=$request->seatNum;
        $tripId=$request->trip_id;
        $count=$request->passengerCounter;
        $sub=$count-$seats;

        Trip::findOrFail($tripId)->update([
           'passengerCounter'=>$sub,
        ]);



        return back();
    }

}
