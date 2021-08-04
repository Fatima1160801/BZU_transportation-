<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cab;
use App\Models\Driver;
use App\Models\Passenger_Trip;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use phpDocumentor\Reflection\PseudoTypes\True_;

class AddTripsController extends Controller
{

       public function showupdateTrips($id){

        $data['trip']=Trip::findOrFail($id);

        return view('trips.updatetrips')->with($data);
    }

    public function updatetowaite($id){
        Trip::findOrFail($id)->update([
            'statusTrip'=>"waiting",
            ]);
            return back();
    }

    public function updatetocomplet($id){
        Trip::findOrFail($id)->update([
            'statusTrip'=>"confirmed",
            ]);

      $s = Passenger_Trip::where('trip_id',$id)->where('statusTrip','!=','deleted')->update([
            'statusTrip'=>"confirmed",
        ]);


            return back();
    }

   public function updateTrips(Request $request){

       $validator=Validator::make($request->all(),[
           'pickupDate'=>'required',
           'pickupTime'=>'required',
           'pickup'=>'required',
           'dropoff'=>'required',
           'price'=>'required',
           'tripid'=>'required',
           ]);

           if($validator->fails()){
               $error=$validator->errors();
               return back()->withErrors($error);
           }

           Trip::findOrFail($request->tripid)->update([
            'pickupDate'=>$request->pickupDate,
            'pickupTime'=>$request->pickupTime,
            'pickup'=>$request->pickup,
            'dropoff'=>$request->dropoff,
            'price'=>$request->price,

            ]);
            $request->session()->flash('success','a trip information updated successfully');
            return back();


   }


    public function tripdelete(Trip $trip){

        $trip->delete();
        return back();
    }

    public function addDriverForTrip(Request $request){
        $validator=Validator::make($request->all(),[
            'driver_id'=>'required',
            'id'=>'required',
            ]);

            if($validator->fails()){
                $error=$validator->errors();
                return redirect(url("/admin/AddBusTrips"))->withErrors($error);

            }

            $idd=$request->id;

            //dd($idd);
          $fatima=Trip::findOrFail($request->id)->update([
                'driver_id'=>$request->driver_id,
                ]);
            //    dd($fatima);

             $request->session()->flash('success',' Driver added to the Trip successfully');
            return back();

         /*   Trip::findOrFail($id)->update([
                'statusTrip'=>"confirmed",
                ]);
                return back();
*/
    }



}
