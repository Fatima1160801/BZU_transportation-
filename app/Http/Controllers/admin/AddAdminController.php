<?php

namespace App\Http\Controllers\admin;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AddAdminController extends Controller
{


    public function showAdmin(){
        $data['admins']=Admin::orderBy('created_at', 'desc')->paginate(10);
         return view('information.Admininformation')->with($data);
         }


    public function showAddAdmin(){
     $data['roles']=Role::where('name', 'superadmin')->orwhere('name', 'admin')->get();
     return view('Add.AddAdmin')->with($data);

    }



    public function insertadmin(Request $request){
     //   $userId=Auth::user()->id;
        $validator=Validator::make($request->all(),[
        'name'=>'required|string|max:255',
        'email'=>'required|unique:users',
        'phone'=>'required|unique:users',
        'ssn'=>'required|Numeric|unique:admins',
        'password'=>'required|string|confirmed',
        'bankNum'=>'required|Numeric|unique:admins',
        'role_id'=>'required',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/admin/AddAdmin"))->withErrors($error);

        }
        $haspass= Hash::make('password');
        Admin::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$haspass,
        'phone'=>$request->	phone,
        'role_id'=>$request->role_id,
        'ssn'=>$request->ssn,
        'bankNum'=>$request->bankNum,
         ]);

         $request->session()->flash('success','A new admin add successfully');
        return redirect(url("/admin/AddAdmin"));



    }

    public function showUpdateadmin($id){


        $data['admin']=Admin::findOrFail($id);

        return view('information.updateadmin')->with($data);
    }


   public function adminupdate(Request $request){

    $validator= validator::make($request->all(),[
        'name'=>'required|string|max:255',
        'email'=>'required|email',
        'phone'=>'required',
        'ssn'=>'required|Numeric',
        'bankNum'=>'required|Numeric',
        'salray'=>'required|Numeric',
        'Adminid'=>'required',

    ]);
        if($validator->fails()){
            $error=$validator->errors();
            return back()->withErrors($error);
    }

    Admin::findOrFail($request->Adminid)->update([
     'name'=>$request->name,
     'email'=>$request->email,
     'phone'=>$request->phone,
     'ssn'=>$request->ssn,
     'bankNum'=>$request->bankNum,
     'salray'=>$request->salray,

        ]);

    $request->session()->flash('success','a admin information updated successfully');
    return back();

   }

   public function admindelete(Admin $admin){
    $admin->delete();
    return back();
}


}
