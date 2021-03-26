<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationDriversController extends Controller
{
    public function InformationDrivers($id){
        return view('admin.informationDriver.informationDrivers');
    }
}
