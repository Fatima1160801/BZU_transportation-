<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Validator;
use App\Models\Cab;


class TaxisController extends Controller
{
    public function show($id){
        return view('admin.taxis.taxis');
    }


    public function showTaxiTrips(){
        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->paginate(5);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->paginate(5);
        $data['cabs']=Cab::where('cabType','taxi')->get();

       return view('Add.TaxiTrips')->with($data);
       }



       public function insertTaxi(Request $request){

        $validator=Validator::make($request->all(),[

        'pickupDate'=>'required',
        'pickupTime'=>'required',
        'pickup'=>'required',
        'dropoff'=>'required',
        'price'=>'required',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/admin/AddTaxiTrips/{id}"))->withErrors($error);

        }


        Trip::create([
         'cabType'=>'taxi',
         'pickupDate'=>$request->pickupDate,
         'pickupTime'=>$request->pickupTime,
         'pickup'=>$request->pickup,
         'dropoff'=>$request->dropoff,
         'price'=>$request->price,
         'passengerCounter'=>0,
         'statusTrip'=>'waiting',
         ]);

         $request->session()->flash('success','A new Trip add successfully');
        return redirect(url('/admin/AddTaxiTrips/{id}'));



    }


    public function orderByPickup(){

        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->orderBy('pickup', 'asc')->orderBy('dropoff', 'asc')->paginate(10);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->orderBy('pickup', 'asc')->orderBy('dropoff', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','taxi')->get();
        return view('Add.TaxiTrips')->with($data);
    }


       public function orderBydroppoff(){

        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->orderBy('dropoff', 'asc')->orderBy('pickup', 'asc')->paginate(10);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->orderBy('dropoff', 'asc')->orderBy('pickup', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','taxi')->get();

       return view('Add.TaxiTrips')->with($data);

       }

       public function orderByPric(){

        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->orderBy('price', 'asc')->paginate(10);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->orderBy('price', 'asc')->paginate(10);
        $data['cabs']=Cab::where('cabType','taxi')->get();

       return view('Add.TaxiTrips')->with($data);

       }



       public function orderByDate(){

        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->orderBy('pickupDate', 'desc')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->orderBy('pickupDate', 'desc')->orderBy('pickupTime', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','taxi')->get();

        return view('Add.TaxiTrips')->with($data);

       }

       public function orderByPassenger(){

        $data['tripsTaxiW']=Trip::where('statusTrip','waiting')->where('cabType','taxi')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['tripsTaxiC']=Trip::where('statusTrip','confirmed')->where('cabType','taxi')->orderBy('passengerCounter', 'desc')->paginate(10);
        $data['cabs']=Cab::where('cabType','taxi')->get();
        return view('Add.TaxiTrips')->with($data);
       }





}
