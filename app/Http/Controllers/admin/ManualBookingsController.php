<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualBookingsController extends Controller
{
    public function show($id){
        return view('admin.manualBookings.manualBookings');
    }
}
