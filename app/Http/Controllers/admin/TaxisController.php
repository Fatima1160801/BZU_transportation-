<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxisController extends Controller
{
    public function Taxis($id){
        return view('admin.taxis.taxis');
    }
}
