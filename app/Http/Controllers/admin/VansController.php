<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Validator;
use App\Models\Cab;
use App\Models\Place;

class VansController extends Controller
{
    public function show($id){
        return view('vans.vans');
    }


    public function showVanTrips(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('created_at', 'desc')->paginate(5);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('created_at', 'desc')->paginate(5);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
       return view('Add.VansTrips')->with($data);
       }


       public function orderByPickup(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('pickup', 'asc')->orderBy('dropoff', 'asc')->paginate(10);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('pickup', 'asc')->orderBy('dropoff', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
        return view('Add.VansTrips')->with($data);

       }

       public function orderBydroppoff(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('dropoff', 'asc')->orderBy('pickup', 'asc')->paginate(10);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('dropoff', 'asc')->orderBy('pickup', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
        return view('Add.VansTrips')->with($data);


       }

       public function orderByPric(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('price', 'asc')->paginate(10);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('price', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
       return view('Add.VansTrips')->with($data);

       }



       public function orderByDate(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('pickupDate', 'desc')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('pickupDate', 'desc')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
       return view('Add.VansTrips')->with($data);

       }

       public function orderByPassenger(){
        $data['tripsVanW']=Trip::where('statusTrip','waiting')->where('cabType','van')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['tripsVanC']=Trip::where('statusTrip','confirmed')->where('cabType','van')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','van')->get();
        $data['placespickup']=Place::where('status','pickup')->where('cabType','van')->get();
        $data['placesdropoff']=Place::where('status','dropoff')->where('cabType','van')->get();
       return view('Add.VansTrips')->with($data);
       }











       public function insertVan(Request $request){

        $validator=Validator::make($request->all(),[

        'pickupDate'=>'required',
        'pickupTime'=>'required',
        'pickup'=>'required',
        'dropoff'=>'required',
        'price'=>'required',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/admin/AddVanTrips"))->withErrors($error);

        }


        Trip::create([
         'cabType'=>'van',
         'pickupDate'=>$request->pickupDate,
         'pickupTime'=>$request->pickupTime,
         'pickup'=>$request->pickup,
         'dropoff'=>$request->dropoff,
         'price'=>$request->price,
         'passengerCounter'=>0,
         'statusTrip'=>'waiting',
         ]);

         $request->session()->flash('success','A new Trip add successfully');
        return redirect(url('/admin/AddVanTrips'));



    }


}
