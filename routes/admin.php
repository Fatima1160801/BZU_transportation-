<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AddAdmin;
use App\Http\Controllers\admin\VansController;
use App\Http\Controllers\admin\BusesController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\PlaceController;
use App\Http\Controllers\admin\TaxisController;
use App\Http\Controllers\admin\AddAdminController;
use App\Http\Controllers\admin\AddTripsController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\subAdminController;
use App\Http\Controllers\admin\AddDriverController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\RushHoursController;
use App\Http\Controllers\admin\InformationController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\TrackDriversController;
use App\Http\Controllers\admin\ManageRewardsController;
use App\Http\Controllers\admin\NotificationsController;
use App\Http\Controllers\admin\TrackEarningsController;
use App\Http\Controllers\admin\ManualBookingsController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



        Route::prefix('admin')->middleware('theme:admin','lang')->name('admin.')->group(function () {
        Route::view('/login', 'auth.login') ->name('login');
        Route::view('/register', 'auth.register') ->name('register');
       // Route::view('/home', 'Home')->middleware('auth:admin')->name('home');
        Route::view('/main',[mainController::class,'mais']);
        Route::get('/home',[AdminHomeController::class,'show']);
        Route::get('/Extra',[ExtraController::class,'show']);
        Route::get('/ManageRewards',[ManageRewardsController::class,'show']);
        Route::get('/ManualBookings',[ManualBookingsController::class,'show']);
        Route::get('/Messages',[MessagesController::class,'show']);
        Route::get('/Notifications',[NotificationsController::class,'show']);
        Route::get('/RushHours',[RushHoursController::class,'show']);
        Route::get('/TrackDrivers',[TrackDriversController::class,'show']);
        Route::get('/TrackEarnings',[TrackEarningsController::class,'show']);

        ////*****************************profile*****************************

        Route::get('/Profile',[AdminProfileController::class,'showAdminprofile']);

        //*****************************Trips*****************************

        Route::get('/tripdelete/{trip}',[AddTripsController::class,'tripdelete']);
        Route::get('/updateTrips/{id}',[AddTripsController::class,'showupdateTrips']);
        Route::post('/updateTrips',[AddTripsController::class,'updateTrips']);
        Route::get('/completTrips/{id}',[AddTripsController::class,'updatetocomplet']);
        Route::get('/waiteTrips/{id}',[AddTripsController::class,'updatetowaite']);
        //places
        Route::get('/addNewPlacesForBus',[PlaceController::class,'showaddNewPlacesForBus']);
        Route::post('/insertpickupPlaces',[PlaceController::class,'insertpickupplace']);
        Route::post('/insertdropoffPlaces',[PlaceController::class,'insertdropoffplace']);
        Route::get('/addNewPlacesForVan',[PlaceController::class,'showaddNewPlacesForVan']);
        Route::get('/addNewPlacesForTaxi',[PlaceController::class,'showaddNewPlacesForTaxi']);


        Route::get('/placedelete/{pl}',[PlaceController::class,'placedelete']);

        //----------------Bus----------------
        Route::get('/AddBusTrips',[BusesController::class,'showBusTrips']);
        Route::post('/insertBusesTrip',[BusesController::class,'insertBus']);
        Route::get('/moreDetalis/{id}',[BusesController::class,'moreDetalis']);
        //order
        Route::get('/AddBusTripsorderByPickup',[BusesController::class,'orderByPickup']);
        Route::get('/AddBusTripsorderBydropoff',[BusesController::class,'orderBydroppoff']);
        Route::get('/AddBusTripsorderByPrice',[BusesController::class,'orderByPric']);
        Route::get('/AddBusTripsorderByDate',[BusesController::class,'orderByDate']);
        Route::get('/AddBusTripsorderByNumOfPassenger',[BusesController::class,'orderByPassenger']);
        Route::get('/addrDriversForBus/{id}',[BusesController::class,'addrDriversForBus']);
        Route::post('/addDriverForTrip',[AddTripsController::class,'addDriverForTrip']);
        Route::post('/minSeatNum',[BusesController::class,'minSeatNum']);


        //----------------van----------------
        //Route::get('/Vans/{id}',[VansController::class,'show']);
        Route::get('/AddVanTrips',[VansController::class,'showVanTrips']);
        Route::post('/insertVansTrip',[VansController::class,'insertVan']);
        //order
        Route::get('/AddVanTripsorderByPickup',[VansController::class,'orderByPickup']);
        Route::get('/AddVanTripsorderBydropoff',[VansController::class,'orderBydroppoff']);
        Route::get('/AddVanTripsorderByPrice',[VansController::class,'orderByPric']);
        Route::get('/AddVanTripsorderByDate',[VansController::class,'orderByDate']);
        Route::get('/AddVanTripsorderByNumOfPassenger',[VansController::class,'orderByPassenger']);

        //----------------taxi----------------
        //Route::get('/Taxis/{id}',[TaxisController::class,'show']);
        Route::get('/AddTaxiTrips',[TaxisController::class,'showTaxiTrips']);
        Route::post('/insertTaxisTrip',[TaxisController::class,'insertTaxi']);

        Route::get('/AddTaxiTripsorderByPickup',[TaxisController::class,'orderByPickup']);
        Route::get('/AddTaxiTripsorderBydropoff',[TaxisController::class,'orderBydroppoff']);
        Route::get('/AddTaxiTripsorderByPrice',[TaxisController::class,'orderByPric']);
        Route::get('/AddTaxiTripsorderByDate',[TaxisController::class,'orderByDate']);
        Route::get('/AddTaxiTripsorderByNumOfPassenger',[TaxisController::class,'orderByPassenger']);

        //----------------driver ----------------
        Route::get('/informationDriver',[AddDriverController::class,'showDriver']);
        Route::get('/AddDriver',[AddDriverController::class,'showAddDriver']);
        Route::post('/insertdriver',[AddDriverController::class,'insertdriver']);
        Route::get('/driverupdate/{id}',[AddDriverController::class,'showUpdatedriver']);
        Route::post('/driverupdate',[AddDriverController::class,'driverupdate']);
        Route::get('/driverdelete/{driver}',[AddDriverController::class,'driverdelete']);


        //---------------- cab----------------
        Route::get('/informationCab/{id}',[AddDriverController::class,'showDriverCab']);
        Route::post('/editCabInformationDriver',[AddDriverController::class,'updatecab']);
        //Route::get('/cab/{id}',[InformationController::class,'showcabview']);

        //Route::post('/insertcab',[AddDriverController::class,'insertcab']);

        //Route::get('/informationCab/{id}',[InformationController::class,'Cab']);


        //*****************************Passenger*****************************
        Route::get('/informationPassenger',[InformationController::class,'showPassenger']);
        //can book
        Route::get('/informationPassengerToggle/{passenger}',[InformationController::class,'toggle']);
        //search
        Route::get('/passenger/search',[InformationController::class,'passengersearch']);


        //*****************************Admin*****************************
        Route::get('/informationAdmin',[AddAdminController::class,'showAdmin']);
        Route::get('/AddAdmin',[AddAdminController::class,'showAddAdmin']);
        Route::post('/insertadmin',[AddAdminController::class,'insertadmin']);
        Route::get('/adminupdate/{id}',[AddAdminController::class,'showUpdateadmin']);
        Route::post('/adminupdate',[AddAdminController::class,'adminupdate']);
        Route::get('/admindelete/{admin}',[AddAdminController::class,'admindelete']);



    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']) ->middleware(array_filter([ 'guest:admin',   $limiter ? 'throttle:'.$limiter : null,  ]));
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:admin')->name('logout');
    Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['guest:admin']);



});

Route::middleware('theme:admin','lang')->name('admin.')->group(function () {
Route::get('/subadmin/profile',[subAdminController::class,'subadminprofile']);
Route::get('/subadmin/payment',[subAdminController::class,'showpayment']);
Route::post('/subadmin/insertpayment',[subAdminController::class,'insertpayment']);
Route::get('/subadmin/showinsertpayment/{id}',[subAdminController::class,'showinsertpayment']);
Route::post('/subadmin/search',[subAdminController::class,'paymentsearch']);

});
