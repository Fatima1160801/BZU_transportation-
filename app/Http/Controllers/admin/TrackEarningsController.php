<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackEarningsController extends Controller
{
    public function TrackEarnings($id){
        return view('admin.trackEarning.trackEarning');
        
    }
}
