<?php

namespace App\Http\Controllers\admin;
use App\Models\Cab;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AddDriverController extends Controller

{

    public function showDriver(){
        $data['drivers']=Driver::orderBy('created_at', 'desc')->paginate(2);
        return view('information.Driverinformation')->with($data);

    }
    public function showAddDriver(){

        return view('Add.addDriver');
    }


    public function showDriverCab($id){

        $data['driver']=Driver::findOrFail($id);
       return view('information.cab')->with($data);
       }




       //cabLicense : fun +view
       public function updatecab(request $request){

        $validator=Validator::make($request->all(),[
            'cabType'=>'required',
            'cabNumber' => 'required|Numeric',
            'seatNum'=>'required|Numeric',
            'License'=>'required|Numeric|unique:cabs',
            'insurance'=>'required|Numeric|unique:cabs',
            'machineNumber'=>'required|Numeric',
            'cabid'=>'required',
            'driverid'=>'required',

            ]);

                if($validator->fails()){
                $error=$validator->errors();
                return back()->withErrors($error);


            }



         Cab::findOrFail($request->cabid)->update([

            'cabType'=>$request->cabType,
            'cabNumber'=>$request->cabNumber,
            'seatNum'=>$request->seatNum,
            'license'=>$request->cabLicense,
            'insurance'=>$request->insurance,
            'machineNumber'=>$request->machineNumber,
             ]);



        $request->session()->flash('success','a cab information updated successfully');
        return back();






    }





    public function showCab($id){

        $data=Driver::findOrFail($id);
        $cab=$data->cabs;
        return view('information.Driverinformation')->with($cab);

    }
    //public function Cab($id){
     //$data['driver']=Driver::findOrFail($id);
     //$data['cabs']=$data['driver']->cabs;
    //return view('admin.information.Driverinformation')->with($data);
    //}




    public function insertdriver(Request $request){

        $validator=Validator::make($request->all(),[
        'name'=>'required|string|max:255',
        'phone'=>'required|string|max:255',
        'ssn'=>'required|Numeric|unique:drivers',
        'email'=>'required',
        'password'=>'required|string|max:255',
        'banknumber'=>'required|Numeric|unique:drivers',
        'driverLicense'=>'required|Numeric|unique:drivers',
        'cabType'=>'required',
        'cabNumber' => 'required|Numeric|unique:cabs',
        'seatNum'=>'required|Numeric',
        'cabLicense'=>'required|Numeric|unique:cabs',
        'insurance'=>'required|Numeric|unique:cabs',
        'machineNumber'=>'required|Numeric|unique:cabs',

        ]);
            if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/admin/AddDriver"))->withErrors($error);

        }

        $haspass= Hash::make('password');

        $driver=Driver::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$haspass,
        'phone'=>$request->phone,
        'role_id' =>'3',
        'ssn'=>$request->ssn,
        'banknumber'=>$request->banknumber,
        'driverLicense'=>$request->driverLicense,
        'cabType'=>$request->cabType,
        'admin_id'=>1,
        ]);
        $driverid=$driver->id;

         $data=Cab::create([
        'cabType'=>$request->cabType,
        'cabNumber'=>$request->cabNumber,
        'seatNum'=>$request->seatNum,
        'cabLicense'=>$request->cabLicense,
        'insurance'=>$request->insurance,
        'machineNumber'=>$request->machineNumber,
        'driver_id'=>$driverid,
         ]);


    $request->session()->flash('success','A new driver with his cab add successfully');
     return redirect(url("/admin/AddDriver"));




       }

       public function showUpdatedriver($id){
        $data['driver']=Driver::findOrFail($id);
        return view('information.updatedriver')->with($data);
    }

    //driverLicense : fun +view
    public function driverupdate(Request $request){

        $validator= validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
            'email'=>'required',
            'ssn'=>'required|Numeric',
            'banknumber'=>'required|Numeric',
            'driverLicense'=>'required|Numeric',
            'driverid'=>'required',


        ]);
            if($validator->fails()){
                $error=$validator->errors();
                return back()->withErrors($error);
        }


        Driver::findOrFail($request->driverid)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'ssn'=>$request->ssn,
        'banknumber'=>$request->banknumber,
        'driverLicense'=>$request->driverLicense,

         ]);

        $request->session()->flash('success','a driver information updated successfully');
        return back();

       }




       public function driverdelete( Driver $driver){
        $driver->delete();
        return back();
    }





}
