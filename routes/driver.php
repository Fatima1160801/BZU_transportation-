<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\driver\DriverHomeController;
use App\Http\Controllers\driver\DriverRateController;
use App\Http\Controllers\driver\DriverTripsController;
use App\Http\Controllers\driver\DriverCreditController;
use App\Http\Controllers\driver\DriverEarningController;
use App\Http\Controllers\driver\DriverProfileController;
use App\Http\Controllers\driver\DriverRequesrController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;



Route::prefix('driver')->middleware('theme:driver','lang')->name('driver.')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/home', 'fatima')->middleware('auth:driver')->name('home');
    Route::view('/register', 'auth.register')->name('register');
    Route::get('/email/verify', function () { return view('auth.verify-email');})->middleware('auth:driver')->name('verification.notice');
    Route::view('/forgot','auth.passwords.forget')->middleware(['guest:driver'])->name('driver.password.request');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->middleware(['guest:driver','lang'])->name('driver.password.reset');
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->middleware(['guest:driver'])->name('driver.passwords.forget');

    Route::get('/{id}',[DriverHomeController::class,'show'])->middleware('auth:driver');
    Route::get('/Profile/{id}',[DriverProfileController::class,'show'])->middleware('auth:driver');
    Route::get('/Driver-Rate/{id}',[DriverRateController::class,'show'])->middleware('auth:driver');
    Route::get('/Trips/{id}',[DriverTripsController::class,'show'])->middleware('auth:driver');
    Route::get('/Earning/{id}',[DriverEarningController::class,'show'])->middleware('auth:driver');
    Route::get('/DriverCredit/{id}',[DriverCreditController::class,'show'])->middleware('auth:driver');
    Route::get('/RequestTrips',[DriverRequesrController::class,'RequestTrip'])->middleware('auth:driver');
    Route::get('/button/busy',[DriverHomeController::class,'ButtonBusy'])->middleware('auth:driver');
    Route::get('/button/available',[DriverHomeController::class,'ButtonAvailable'])->middleware('auth:driver');
    Route::get('/moreDetalisForDriver/{id}',[DriverRequesrController::class,'moreDetalisForDriver'])->middleware('auth:driver');
   


    $limiter = config('fortify.limiters.login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware(array_filter(['guest:driver', $limiter ? 'throttle:'.$limiter : null,]));
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:driver')->name('logout');
    Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['guest:driver']);
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['auth:driver','guest:driver','throttle:6,1'])->name('driver.verification.send');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->middleware(['guest:driver']);
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->middleware(['guest:driver'])->name('driver.password.update');
    Route::get('/deleteTripForDriver/{id}',[DriverHomeController::class,'deleteTripForDriver']);





});



