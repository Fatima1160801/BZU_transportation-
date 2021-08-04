<?php

namespace App\Http\Controllers\driver;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DriverEarningController extends Controller
{
    public function show($id){
        $idd=Auth::user()->id;
        $data['trip']=Trip::where('driver_id',$idd)->get();

        return view('earning.earning')->with($data);
    }
}
