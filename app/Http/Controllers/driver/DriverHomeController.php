<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverHomeController extends Controller
{
    public function index($id){
        return view('driver.home.index');
    }
}
