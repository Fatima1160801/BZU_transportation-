<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VansController extends Controller
{
    public function show($id){
        return view('admin.vans.vans');
    }
}
