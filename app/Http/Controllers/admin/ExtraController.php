<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Trip;
use App\Models\Cab;
use App\Models\Driver;

class ExtraController extends Controller
{
    public function show(){

        $data['passengers']=Passenger::get();
        $data['numOfPassenger']=count($data['passengers']);

        $data['drivers']=Driver::get();
        $data['numOfdriver']=count($data['drivers']);


        $data['cabVan']=Cab::where('cabType','van')->get();
        $data['numOfcabVan']=count($data['cabVan']);


        $data['cabTaxi']=Cab::where('cabType','taxi')->get();
        $data['numOfcabTaxi']=count($data['cabTaxi']);

        $data['cabBus']=Cab::where('cabType','bus')->get();
        $data['numOfcabBus']=count($data['cabBus']);



        return view('extra.extra')->with($data);
    }
}
