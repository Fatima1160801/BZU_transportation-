<?php

namespace App\Http\Controllers\driver;

use App\Models\Trip;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DriverRequesrController extends Controller
{
    //

    public function RequestTrip(){
        return view('Request.request');
    }


    public function moreDetalisForDriver($id){
        $idd=Auth::user()->id;
        $data['trip']=Trip::where('driver_id',$idd)->get();

        return view('moreDetalisForDriver')->with($data);
    }
   
}
