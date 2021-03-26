<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusesController extends Controller
{
    public function Buses($id){
        return view('admin.buses.buses');
    }
}
