<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackDriversController extends Controller
{
    public function show(){
        return view('trackDriver.trackDriver');
    }
}
