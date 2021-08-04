<?php

namespace App\Http\Controllers\driver;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DriverCreditController extends Controller
{
    public function show($id){
        return view('credit.credit');
    }

   
    



}
