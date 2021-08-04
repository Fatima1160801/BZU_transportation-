<?php

namespace App\Http\Controllers\admin;
use App\Models\Passenger;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{

    
   public function mais(){;
    return view('vans.main');

   }
}
