<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\RateController;
use App\Http\Controllers\admin\VansController;
use App\Http\Controllers\web\BookedController;
use App\Http\Controllers\admin\BusesController;
use App\Http\Controllers\admin\ExtraController;
use App\Http\Controllers\admin\TaxisController;
use App\Http\Controllers\web\ConfirmController;
use App\Http\Controllers\web\MyTripsController;
use App\Http\Controllers\web\ProfileController;
use App\Http\Controllers\web\RewardsController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\AddDriverController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\RushHoursController;
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
use App\Http\Controllers\admin\InformationDriversController;
use App\Http\Controllers\admin\InformationPassengerController;

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
//Passsenger

Route::get('/{id}',[HomeController::class,'index']);
Route::get('/passenger/My-Profile/{id}',[ProfileController::class,'profile']);
Route::get('/passenger/My-Rate/{id}',[RateController::class,'rate']);
Route::get('/passenger/Newbooking-booked/{id}',[BookedController::class,'booked']);
Route::get('/passenger/Newbooking-confirm/{id}',[ConfirmController::class,'confirm']);
Route::get('/passenger/My-Trips/{id}',[MyTripsController::class,'MyTrips']);
Route::get('/passenger/My-Rewards/{id}',[RewardsController::class,'Rewards']);


//Admin
Route::get('/admin/{id}',[AdminHomeController::class,'index']);
Route::get('/admin/Admin-Profile/{id}',[AdminProfileController::class,'AdminProfile']);
Route::get('/admin/AddDriver/{id}',[AddDriverController::class,'AddDriver']);
Route::get('/admin/informationDrivers/{id}',[InformationDriversController::class,'InformationDrivers']);
Route::get('/admin/Extra/{id}',[ExtraController::class,'Extra']);
Route::get('/admin/ManageRewards/{id}',[ManageRewardsController::class,'ManageRewards']);
Route::get('/admin/ManualBookings/{id}',[ManualBookingsController::class,'ManualBookings']);
Route::get('/admin/Messages/{id}',[MessagesController::class,'Messages']);
Route::get('/admin/Notifications/{id}',[NotificationsController::class,'Notifications']);
Route::get('/admin/InformationPassenger/{id}',[InformationPassengerController::class,'InformationPassenger']);
Route::get('/admin/RushHours/{id}',[RushHoursController::class,'RushHours']);
Route::get('/admin/TrackDrivers/{id}',[TrackDriversController::class,'TrackDrivers']);
Route::get('/admin/TrackEarnings/{id}',[TrackEarningsController::class,'TrackEarnings']);
Route::get('/admin/Buses/{id}',[BusesController::class,'Buses']);
Route::get('/admin/Taxis/{id}',[TaxisController::class,'Taxis']);
Route::get('/admin/Vans/{id}',[VansController::class,'Vans']);





//Driver
Route::get('/driver/{id}',[DriverHomeController::class,'index']);
Route::get('/driver/Driver-Profile/{id}',[DriverProfileController::class,'DriverProfile']);
Route::get('/driver/Driver-Rate/{id}',[DriverRateController::class,'DriverRate']);
Route::get('/driver/Driver-Trips/{id}',[DriverTripsController::class,'DriverTrips']);
Route::get('/driver/Earning/{id}',[DriverEarningController::class,'Earning']);
Route::get('/driver/DriverCredit/{id}',[DriverCreditController::class,'DriverCredit']);

