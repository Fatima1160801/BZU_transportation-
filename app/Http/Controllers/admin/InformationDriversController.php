<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationDriversController extends Controller
{
    public function show($id){
        return view('admin.informationDriver.informationDrivers');
    }
    public function showAdmin($id){
        return view('admin.informationDriver.infromationAdmin');
    }
}
