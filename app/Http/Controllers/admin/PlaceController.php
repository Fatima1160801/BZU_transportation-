<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;

use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{

    public function showaddNewPlacesForBus()
    {
        $data['placespickup'] = Place::where('status', 'pickup')->where('cabType', 'bus')->get();
        $data['placesdropoff'] = Place::where('status', 'dropoff')->where('cabType', 'bus')->get();
        return view('add.addplace')->with($data);
    }


    public function showaddNewPlacesForVan()
    {
        $data['placespickup'] = Place::where('status', 'pickup')->where('cabType', 'van')->get();
        $data['placesdropoff'] = Place::where('status', 'dropoff')->where('cabType', 'van')->get();
        return view('add.addplaceForVan')->with($data);
    }
    public function showaddNewPlacesForTaxi(){
        $data['placespickup'] = Place::where('status', 'pickup')->where('cabType', 'taxi')->get();
        $data['placesdropoff'] = Place::where('status', 'dropoff')->where('cabType', 'taxi')->get();
        return view('add.addplaceForTaxi')->with($data);

    }





    public function insertpickupplace(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pickupE' => 'required|string|max:255',
            'pickupA' => 'required|string|max:255',
            'cabTypee' => 'required',




        ]);
        if ($validator->fails()) {
            $error = $validator->errors();
            if ($request->cabTypee == 'bus') {
                return redirect(url("/admin/addNewPlacesForBus"))->withErrors($error);
            } elseif($request->cabTypee == 'van') {
                return redirect(url("/admin/addNewPlacesForVan"))->withErrors($error);
            }else{
                return redirect(url("/admin/addNewPlacesForTaxi"))->withErrors($error);

            }
        }

        $data = Place::create([
            'place' => json_encode([
                'en' => $request->pickupE,
                'ar' => $request->pickupA
            ]),
            'cabType' => $request->cabTypee,
            'status' => 'pickup'

        ]);

        $request->session()->flash('success', 'A new pickup add successfully');
        return back();
    }






    public function insertdropoffplace(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dropoffE' => 'required|string|max:255',
            'dropoffA' => 'required|string|max:255',
            'cabType' => 'required',



        ]);

        if ($validator->fails()) {
            $error = $validator->errors();
            if ($request->cabType == 'bus') {
                return redirect(url("/admin/addNewPlacesForBus"))->withErrors($error);
            } elseif($request->cabType == 'van') {
                return redirect(url("/admin/addNewPlacesForVan"))->withErrors($error);
            }else{
                return redirect(url("/admin/addNewPlacesForTaxi"))->withErrors($error);

            }
        }

        $data = Place::create([
            'place' => json_encode([
                'en' => $request->dropoffE,
                'ar' => $request->dropoffA
            ]),
            'cabType' => $request->cabType,
            'status' => 'dropoff'

        ]);

        $request->session()->flash('success', 'A new dropoff add successfully');
        return back();
    }


    public function placedelete(Place $pl)
    {

        $pl->delete();

        return back();
    }
}
