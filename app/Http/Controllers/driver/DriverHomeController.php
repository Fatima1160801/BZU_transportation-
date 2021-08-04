<?php

namespace App\Http\Controllers\driver;

use App\Models\Trip;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DriverHomeController extends Controller
{
    public function show($id){
        $idd=Auth::user()->id;
        $data['DriverTrips']=Trip::where('driver_id',$idd)->get();
        return view('Request.request')->with($data);
    }

    public function  deleteTripForDriver($id){

            Trip::findOrFail($id)->update([
                'driver_id'=>NULL,
                ]);
                return back();
        }
    public function ButtonBusy(){
        $id=Auth::user()->id;
        $s=Driver::where('id',$id)->get();

        $m=$s[0]->busy;
        if($m==0){
        $f=Driver::where('id',$id)->update([
            'busy'=> 1,
        ]);
       }else{
        $f=Driver::where('id',$id)->update([
            'busy'=> 0,
        ]);
        }
        return back();
    }
    public function ButtonAvailable(){
        $id=Auth::user()->id;
        $s=Driver::where('id',$id)->get();

        $m=$s[0]->available;
        if($m==0){
        $f=Driver::where('id',$id)->update([
            'available'=> 1,
        ]);
       }else{
        $f=Driver::where('id',$id)->update([
            'available'=> 0,
        ]);
        }
        return back();

    }

   



}
