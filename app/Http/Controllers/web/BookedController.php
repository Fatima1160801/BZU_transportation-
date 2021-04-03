<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookedController extends Controller
{
    public function show($id){
        return view('web.booked.booked');
    }
}
