<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function confirm($id){
        return view('web.confirm.confirm');

    }
}
