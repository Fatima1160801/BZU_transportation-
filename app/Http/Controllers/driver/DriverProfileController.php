<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverProfileController extends Controller
{
    public function show($id){
        return view('driver.profile.profile');
    }
}
