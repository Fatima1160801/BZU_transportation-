<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationPassengerController extends Controller
{
    public function InformationPassenger($id){
        return view('admin.informationPassenger.informationPassenger');

    }
}
