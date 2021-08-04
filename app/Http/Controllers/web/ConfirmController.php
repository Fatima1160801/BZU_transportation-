<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfirmController extends Controller
{
    public function show($id ,Request $request){
        $idd=Auth::user()->id;
        $data['trips']=Trip::FindOrFail($id);
        $data['passengerBal']=Passenger::where('users_id',$idd)->get();
        $s=$data['passengerBal'][0]->id;
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();

        $data['idpass']=Null;
        if(count($data['pass'])>0){
            $var=$data['pass'][0];
            $rrr=$var->id;
            $data['idpass']=Passenger_Trip::where('id',$rrr)->get();

        }

        return view('confirm.confirm')->with($data);
    }
    
    public function balancess(Request $request , $id){
        $idd=Auth::user()->id;
        $data['idp']=Passenger::where('users_id',$idd)->get();
        $s=$data['idp'][0]->id;
        $trip=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get();
        $t=$request->pay;
        $rr=$request->bal;
        $sub=$rr-$t;
        if($sub>=0){
        Passenger::where('users_id',$idd)->update([
            'balance'=> $sub,
        ]);
        return redirect(url("passenger/Newbooking-booked/$id"));
       }elseif($request->PaymentType=="cash"){
        return redirect(url("passenger/Newbooking-booked/$id"));
       }else{
        Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->delete();
        $request->session()->flash('Fail',"Your Balance less than price you can pay cash or recharge!!");
        return redirect(url("/passenger/$idd"));
    }
    }

   
}
