<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LangController;
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
use App\Http\Controllers\RegisterController;

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


    Route::middleware('lang')->group(function () {
//register and login
Route::get('/register/{id}',[RegisterController::class,'show']);


//Passsenger
Route::get('/{id}',[HomeController::class,'show']);
Route::get('/passenger/My-Profile/{id}',[ProfileController::class,'show']);
Route::get('/passenger/My-Rate/{id}',[RateController::class,'show']);
Route::get('/passenger/Newbooking-booked/{id}',[BookedController::class,'show']);
Route::get('/passenger/Newbooking-confirm/{id}',[ConfirmController::class,'show']);
Route::get('/passenger/My-Trips/{id}',[MyTripsController::class,'show']);
Route::get('/passenger/My-Rewards/{id}',[RewardsController::class,'show']);

//Admin
Route::get('/admin/{id}',[AdminHomeController::class,'show']);
Route::get('/admin/Admin-Profile/{id}',[AdminProfileController::class,'show']);
Route::get('/admin/AddDriver/{id}',[AddDriverController::class,'show']);
Route::get('/admin/AddAdmin/{id}',[AddDriverController::class,'show']);
Route::get('<div class="content mt-3">

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Employees</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add New Employee</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"> <i class="fa fa-trash-o" aria-hidden="true"></i><span>Delete</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Name</th>
                    <th>SSN</th>
                    <th>Email</th>
                    <th>Bank Number</th>
                    <th>phone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td>Thomas Hardy</td>
                    <td>thomashardy@mail.com</td>
                    <td>89 Chiaroscuro Rd, Portland, USA</td>
                    <td>(171) 555-2222</td>
                    <td>(171) 555-2222</td>.
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>


            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Previous</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

</div>',[InformationDriversController::class,'show']);
Route::get('/admin/informationAdmin/',[InformationDriversController::class,'showAdmin']);
Route::get('/admin/Extra/{id}',[ExtraController::class,'show']);
Route::get('/admin/ManageRewards/{id}',[ManageRewardsController::class,'show']);
Route::get('/admin/ManualBookings/{id}',[ManualBookingsController::class,'show']);
Route::get('/admin/Messages/{id}',[MessagesController::class,'show']);
Route::get('/admin/Notifications/{id}',[NotificationsController::class,'show']);
Route::get('/admin/InformationPassenger/{id}',[InformationPassengerController::class,'show']);
Route::get('/admin/RushHours/{id}',[RushHoursController::class,'show']);
Route::get('/admin/TrackDrivers/{id}',[TrackDriversController::class,'show']);
Route::get('/admin/TrackEarnings/{id}',[TrackEarningsController::class,'show']);
Route::get('/admin/Buses/{id}',[BusesController::class,'show']);
Route::get('/admin/Taxis/{id}',[TaxisController::class,'show']);
Route::get('/admin/Vans/{id}',[VansController::class,'show']);





//Driver
Route::get('/driver/{id}',[DriverHomeController::class,'show']);
Route::get('/driver/Driver-Profile/{id}',[DriverProfileController::class,'show']);
Route::get('/driver/Driver-Rate/{id}',[DriverRateController::class,'show']);
Route::get('/driver/Driver-Trips/{id}',[DriverTripsController::class,'show']);
Route::get('/driver/Earning/{id}',[DriverEarningController::class,'show']);
Route::get('/driver/DriverCredit/{id}',[DriverCreditController::class,'show']);

//

    });

Route::get('/lang/set/{lang}',[LangController::class,'set']);
