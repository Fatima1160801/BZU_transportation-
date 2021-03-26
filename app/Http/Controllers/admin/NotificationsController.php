<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function Notifications($id){
        return view('admin.notificatios.notifications');
    }
}
