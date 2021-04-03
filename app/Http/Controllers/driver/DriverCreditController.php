<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverCreditController extends Controller
{
    public function show($id){
        return view('driver.credit.credit');
    }
}
