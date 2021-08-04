<?php

namespace App\Http\Controllers\admin;


use App\Models\Passenger;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{

   public function showPassenger(){
    $data['pasengers']=Passenger::orderBy('created_at', 'desc')->paginate(2);
    return view('information.Passengerinformation')->with($data);

   }

    public function toggle(Passenger $passenger){
     $passenger->update([
            'canbook'=> ! $passenger->canbook
        ]);
            return back();
    }

public function showcabview(){
    return view('information.cab');
}



public function passengersearch(Request $request){

$data['pasengers']=Passenger::where('BZUid', 'LIKE','%'.$request->search.'%')->orderBy("id","desc")->paginate(5);

return view('information.Passengerinformation')->with($data);
}


}

