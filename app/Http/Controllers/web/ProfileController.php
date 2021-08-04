<?php

namespace App\Http\Controllers\web;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show(){
        return view('profile.My-Profile');

    }
    public function changePassengerInfo(Request $request ,$id){
     $user=Auth::user();

      $validator=Validator::make($request->all(),[
        'id'=>'exists:users,id',
         'name'=>'required',
         'email'=>'required|email',
         'phone'=> 'required'

     ]);
     $update=User::findOrFail($request->id)->update([
        'id'=>$request->id,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone
     ]);


    }
    public function changePassengerPassword(Request $request){

          $user=Auth::user();


          $validator=Validator::make($request->all(),[
              'passwordNew'=>'required',
              'ConfirmNewPassword'=>'required|confirmed'

          ]);
          if($validator->fails()){
              $error=$validator->errors();
              return redirect(url("/{$user->id}"))->withErrors($error);
          }
          $user=User::findOrFail($request->id)->update([
            'password'=>$request->passwordNew

          ]);
          $request->session()->flash('success','your request sent successflly');
          return back();


    }
}
