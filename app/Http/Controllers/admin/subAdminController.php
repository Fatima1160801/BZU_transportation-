<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;

class subAdminController extends Controller
{
    public function showpayment(){
        $data['passengers']=Passenger::paginate(10);
       return view('subadmin.PassPayment')->with($data);
   }



   public function paymentsearch(Request $request){

    $data['passengers']=Passenger::where('BZUid', 'LIKE','%'.$request->search.'%')->orderBy("BZUid","desc")->paginate(5);
    return view('subadmin.PassPayment')->with($data);
    }


   public function subadminprofile(){
       return view('subadmin.profile');
   }



   public function insertpayment(Request $request){
    $validator=Validator::make($request->all(),[
        'oldBalance'=>'required',
        'NewBalance'=>'required|Numeric',
        'passengerId'=>'required',
        ]);

        if($validator->fails()){
            $error=$validator->errors();
            return redirect(url("/subadmin/payment"))->withErrors($error);

        }
        $pym=Payment::create([
        'balance'=>$request->NewBalance,
        'passenger_id'=>$request->passengerId,
        'admin_id' => 9,
        ]);
        $pym->save();
            $totalBalance=$request->oldBalance + $request->NewBalance;


        Passenger::findOrFail($request->passengerId)->update([
            'balance'=>$totalBalance,
            ]);


         $request->session()->flash('success','A new balance add successfully');
        return redirect(url('/subadmin/payment'));

   }


   public function showinsertpayment($id){
    $data['payments']=Payment::where('passenger_id',$id)->orderBy('created_at', 'desc')->paginate(10);
    $data['passenger']=Passenger::findOrFail($id);

    return view('subadmin.pssengerpayment')->with($data);

}




}
