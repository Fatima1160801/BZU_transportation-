<?php

namespace App\Http\Controllers\web;

use App\Models\Trip;
use App\Models\User;
use App\Models\Place;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home(){
        /* $idd=Auth::user()->id;
        $data['pass']=Passenger::where('users_id',$idd)->get();
        if(count($data['pass'])==0){
            $data['PR']=1;
        } */
        $u=Auth::user()->id;
        $data['user']=User::where('id',$u)->get();
        $data['in']= Passenger::where('users_id',$u)->get();
        return view('home')->with($data);

    }
    public function can_book(){
        $idd=Auth::user()->id;
        $pass=Passenger::where('users_id',$idd)->get();

            return view('home.connotbook');

    }
    public function info(Request $request){

        $validator=Validator::make($request->all(),[
        'BZUid'=>'required|max:255',
        'phone'=>'required|max:255',
        ]);
            if($validator->fails()){
            $error=$validator->errors();
            return back()->withErrors($error);
        }
        $idd=Auth::user()->id;
        Passenger::create([
        'BZUid'=>$request->BZUid,
        'users_id'=>$idd,
        ]);
        User::where('id',$idd)->update([
        'phone'=>$request->phone,
        'PR'=>1,
         ]);

        return back();


    }



    public function show($id){
         $data['trips']=Trip::select('id','cabType','pickupDate','pickupTime','pickup','dropoff','price','passengerCounter','statusTrip')->get();
     //  $data['trip']=Trip::FindOrFail($id);
         $data['tripsBus']=Trip::where('cabType','bus')->where('passengerCounter','<','52')->get();
         $data['userid']=Passenger::where('users_id',$id)->get();
         $data['placespickup']=Place::where('status','pickup')->where('cabType','taxi')->orderBy('place', 'asc')->get();
         $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','taxi')->orderBy('place', 'asc')->get();
         $data['placespickupp']=Place::where('status','pickup')->where('cabType','van')->orderBy('place', 'asc')->get();
        $data['placesdropofff']=Place::where('status','dropoff')->where('cabType','van')->orderBy('place', 'asc')->get();
         return view('home.New-Booking')->with($data);
    }


       #####################################function request trip cab type Van#####################################################
    public function requestTripVan(Request $request){
        $user = Auth::user();
      $validator= Validator::make($request->all(),[
            'pickupDate'=>'required',
            'pickupTime'=>'required',
            'pickup'=>'required',
            'dropoff'=>'required',
            'seatNum'=>'required',
            'PaymentType'=>'required',
            'DriverNote'=>'required',
        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("passenger/{$user->id}"))->withErrors($error);
        }
        $trip= Trip::create([
            'cabType' => $request->cabType,
            'statusTrip' => $request->statusTrip,
            'pickupDate' => $request->pickupDate,
            'pickupTime' => $request->pickupTime,
            'pickup' => $request->pickup,
            'dropoff' =>  $request->dropoff,
        ]);
        $requestId=$trip->id;

        $Passenger_trip=Passenger_Trip::create([
            'trip_id' => $requestId,
            'seatNum'=>$request->seatNum,
            'PaymentType' =>  $request->PaymentType,
            'DriverNote' =>  $request->DriverNote,
            'passenger_id' => $request->passenger_id,

        ]);

       $request->session()->flash('success','your request sent successflly');
       return redirect(url("/passenger/Newbooking-confirm/$requestId"));

    }

    #####################################function request trip cab type Taxi#####################################################

    public function requestTripTaxi(Request $request ){
         $user = Auth::user();
        $validator=Validator::make($request->all(),[
           'pickupDate'=>'required',
           'pickupTime'=>'required',
           'pickup'=>'required',
           'dropoff'=>'required',
           'PaymentType'=>'required',
           'DriverNote'=>'required',

        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/{$user->id}"))->withErrors($error);
        }
       $trip= Trip::create([
            'cabType' => $request->cabType,
            'statusTrip' => $request->statusTrip,
            'pickupDate' => $request->pickupDate,
            'pickupTime' => $request->pickupTime,
            'pickup' => $request->pickup,
            'dropoff' =>  $request->dropoff,
        ]);

        $requestId=$trip->id;

        $Passenger_trip=Passenger_Trip::create([
            'trip_id' => $requestId,
            'PaymentType' =>  $request->PaymentType,
            'DriverNote' =>  $request->DriverNote,
            'passenger_id' =>$request->passenger ,
        ]);

       /*  $count=Passenger_Trip::where('trip_id',$requestId)->count();
        if($count = 7){

        } */
        $request->session()->flash('success','your request sent successflly');
        return redirect(url("/passenger/Newbooking-confirm/$requestId"));
    }

       #####################################function request trip cab type Bus #####################################################

    public function requestBusTrip(Request $request){
        $userId = Auth::user()->id;
        $validator=Validator::make($request->all(),[
            'id'=>'exists:trips,id',
            'seatNum'=>'required',
            'PaymentType'=>'required',
            'passengerNumber'=>'required',

        ]);
        $d=Passenger::where('users_id',$userId)->get();
        $s=$d[0]->id;
        $idd=$request->trip_id;
        $seats=$request->seatNum;
        $passengrs=$request->passengerNumber;
        $sum=$seats+$passengrs;
        $result=52-$passengrs;
        $ff=$request->passenger;
        $data['pass']=Passenger_Trip::where('trip_id',$idd)->where('passenger_id',$s)->get();
        if($sum <= 52 ){
         if(count($data['pass']) == 0){
           $BusTrip=Passenger_Trip::create([
           'seatNum' => $request->seatNum,
           'trip_id' => $request->trip_id,
           'DriverNote'=>$request->DriverNote,
           'PaymentType'=>$request->PaymentType,
           'passenger_id' => $request->passenger,
        ]);

        $id=$request->trip_id;
        $busid=$BusTrip->id;
        $update11=Trip::findOrFail($id)->update([
          'passengerCounter'=> $sum,
        ]);
        $Idrequest=$request->id;
        $request->session()->flash('success','your request sent successflly');
        return redirect(url("/passenger/Newbooking-confirm/$id"));
    }else{
        $request->session()->flash('Fail',"You already booking this trip!!");
        return redirect(url()->previous());

    }}else{
        $request->session()->flash('Fail',"You can only reserve $result seats");
        return redirect(url()->previous());
    }
    }




}



