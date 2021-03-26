<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverEarningController extends Controller
{
    public function Earning($id){
        return view('driver.earning.earning');
    }
}
