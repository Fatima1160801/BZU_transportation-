<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageRewardsController extends Controller
{
    public function ManageRewards($id){
        return view('admin.manageRewords.manageRewords');
    }
}
