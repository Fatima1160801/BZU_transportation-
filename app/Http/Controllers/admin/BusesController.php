<?php

namespace App\Http\Controllers\admin;
use App\Models\Cab;
use App\Models\Trip;
use App\Models\User;
use App\Models\Place;
use App\Models\Driver;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Passenger_Trip;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BusesController extends Controller
{

    public function showBusTrips(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('created_at', 'desc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNotNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['drivers']=Driver::where('cabType','bus')->get();




        return view('Add.BusesTrips')->with($data);
       }
       public function minSeatNum(Request $request){
         $ii=$request->minSeatNum;//45
         Trip::where('cabType','bus')->where('cabType','bus')->where('passengerCounter','>=',$ii)->update([
            'statusTrip'=>'confirmed',
            ]);
            return back();
       }

       public function orderByPickup(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('pickup', 'asc')->orderBy('dropoff', 'asc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->orderBy('pickup', 'asc')->whereNotNull('driver_id')->orderBy('dropoff', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','bus')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['drivers']=Driver::where('cabType','bus')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();

        return view('Add.BusesTrips')->with($data);
       }

       public function orderBydroppoff(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('dropoff', 'asc')->orderBy('pickup', 'asc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->orderBy('dropoff', 'asc')->whereNotNull('driver_id')->orderBy('pickup', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','bus')->get();
        $data['drivers']=Driver::where('cabType','bus')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();
        return view('Add.BusesTrips')->with($data);
       }

       public function orderByPric(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('price', 'asc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNotNull('driver_id')->orderBy('price', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','bus')->get();
        $data['drivers']=Driver::where('cabType','bus')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();
        return view('Add.BusesTrips')->with($data);
       }

       public function orderByDate(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('pickupDate', 'desc')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->orderBy('pickupDate', 'desc')->whereNotNull('driver_id')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','bus')->get();
        $data['drivers']=Driver::where('cabType','bus')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();
        return view('Add.BusesTrips')->with($data);
       }

       public function orderByPassenger(){
        $data['tripsBusW']=Trip::where('statusTrip','waiting')->where('cabType','bus')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['tripsBusC']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNotNull('driver_id')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','bus')->get();
        $data['drivers']=Driver::where('cabType','bus')->get();
        $data['tripsBuswithoutDriver']=Trip::where('statusTrip','confirmed')->where('cabType','bus')->whereNull('driver_id')->orderBy('created_at', 'desc')->paginate(10);
        $data['placespickup']=Place::where('status','pickup')->where('cabType','bus')->orderBy('place', 'asc')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','bus')->orderBy('place', 'asc')->get();
        return view('Add.BusesTrips')->with($data);
       }

       public function insertBus(Request $request){

        $validator=Validator::make($request->all(),[

        'pickupDate'=>'required',
        'pickupTime'=>'required',
        'pickup'=>'required',
        'dropoff'=>'required',
        'price'=>'required',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/admin/AddBusTrips"))->withErrors($error);

        }
      $mais=Trip::create([
         'cabType'=>'bus',
         'pickupDate'=>$request->pickupDate,
         'pickupTime'=>$request->pickupTime,
         'pickup'=>$request->pickup,
         'dropoff'=>$request->dropoff,
         'price'=>$request->price,
         'passengerCounter'=>0,
         'statusTrip'=>'waiting',
         ]);
       $id= $mais->id;
      // $fatima=Passenger_Trip::findOrFail($id)->count();
      // dd($fatima);
         $request->session()->flash('success','A new Trip add successfully');
        return redirect(url('/admin/AddBusTrips'));



    }
    public function moreDetalis($id){
        $data['detalis']=Passenger_Trip::where('trip_id',$id)->orderBy('statusTrip', 'ASC')->get();
     //   $data['d']=Passenger_Trip::select('passenger_id')->where('trip_id',$id)->get();
     //   dd($data['d']);

        $data['trips']=Trip::findOrFail($id);
       /* $data['passengerBal']=Passenger::where('users_id',$idd)->get();
          dd($data['passengerBal']);
        $s=$data['passengerBal'][0]->id;
        $data['userName']=User::where('id',$s)->get();
        $data['pass']=Passenger_Trip::where('trip_id',$id)->where('passenger_id',$s)->get(); */

        return view('information.DetalisTrip')->with($data);
    }

   /*  public function addrDriversForBus($id){
        $data['infoTrip']=Trip::where('id',$id)->get();
        $data['infoDriver']=Driver::where('cabType','bus')->where('available',1)->get();
        $s=$data['infoTrip'][0]->pickupDate;
        $e=$data['infoTrip'][0]->pickupTime;

        return view('information.addrDriversForBus')->with($data);
    } */











}
