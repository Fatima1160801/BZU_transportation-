<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function show($id){
        return view('web.rewords.rewords');

    }
}
