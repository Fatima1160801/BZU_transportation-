<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverCreditController extends Controller
{
    public function DriverCredit($id){
        return view('driver.credit.credit');
    }
}
