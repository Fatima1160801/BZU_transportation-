<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddDriverController extends Controller
{
    public function AddDriver($id){
        return view('admin.addDriver.addDriver');
    }
}
