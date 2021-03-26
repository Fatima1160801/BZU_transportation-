<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RushHoursController extends Controller
{
    public function RushHours($id){
        return view('admin.rushHours.rushHours');
    }
}
