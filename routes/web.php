<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LangController;
use App\Http\Controllers\web\RateController;
use App\Http\Controllers\admin\mainController;
use App\Http\Controllers\web\BookedController;
use App\Http\Controllers\admin\BusesController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\TaxisController;

use App\Http\Controllers\web\ConfirmController;
use App\Http\Controllers\web\MyTripsController;
use App\Http\Controllers\web\ProfileController;
use App\Http\Controllers\web\RewardsController;
use App\Http\Controllers\admin\AddAdminController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\subAdminController;
use App\Http\Controllers\admin\AddDriverController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\RushHoursController;
use App\Http\Controllers\admin\InformationController;
use App\Http\Controllers\driver\DriverHomeController;
use App\Http\Controllers\driver\DriverRateController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\TrackDriversController;
use App\Http\Controllers\driver\DriverTripsController;
use App\Http\Controllers\admin\ManageRewardsController;
use App\Http\Controllers\admin\NotificationsController;
use App\Http\Controllers\admin\TrackEarningsController;
use App\Http\Controllers\driver\DriverCreditController;
use App\Http\Controllers\admin\ManualBookingsController;
use App\Http\Controllers\driver\DriverEarningController;
use App\Http\Controllers\driver\DriverProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/admin.php';
require __DIR__.'/driver.php';

    Route::middleware('theme:frontend','lang')->name('frontend.')->group(function () {
        Route::view('/welcome',[Controller::class,'home']);


      //  Route::view('/home','home')->middleware('auth:web');


        //Passsenger

        Route::get('/home',[HomeController::class,'home'])->middleware('auth:web');
        Route::get('/passenger/{id}',[HomeController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Profile/{id}',[ProfileController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Rate/{id}',[RateController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/Newbooking-booked/{id}',[BookedController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/Newbooking-confirm/{id}',[ConfirmController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Trips/{id}',[MyTripsController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Trips/UpcomingTrips/{id}',[MyTripsController::class,'UpcomingTrips'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Trips/CompletedTrips/{id}',[MyTripsController::class,'CompletedTrips'])->middleware(['auth:web','verified']);
        Route::get('/passenger/My-Trips/CancelledTrips/{id}',[MyTripsController::class,'CancelledTrips'])->middleware(['auth:web','verified']);
        Route::view('/profile', 'web.profile.My-Profile')->middleware(['auth:web']);
        Route::get('/passenger/Rewards/{id}',[RewardsController::class,'show'])->middleware(['auth:web','verified']);
        Route::get('/passenger/send/CanNotBook',[HomeController::class,'can_book'])->middleware(['auth:web','verified']);
       // Route::view('/passenger/CanNotBook','home.cannotbook');
                //insert data to database Passenger (Post)
        Route::post('/requestVanTrip',[HomeController::class,'requestTripVan']);
        Route::post('/requestTaxiTrip',[HomeController::class,'requestTripTaxi']);
        Route::post('/requestBusTrip',[HomeController::class,'requestBusTrip']);
        Route::post('/changePassengerInfo',[ProfileController::class,'changePassengerInfo']);
        Route::post('/changePassengerPassword',[ProfileController::class,'changePassengerPassword']);
        Route::post('/balance/{id}',[ConfirmController::class,'balancess']);
        Route::post('/information',[HomeController::class,'info']);


        //Route::post('/delete',[BookedController::class,'delete']);
        Route::post('/delete/{id}',[BookedController::class,'delete']);






    });


        Route::get('/lang/set/{lang}',[LangController::class,'set']);

        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
         })->name('dashboard');
