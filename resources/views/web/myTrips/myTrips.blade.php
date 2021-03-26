@extends('web.layout')
@section('title') Rewords @endsection
@section('main')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <a  href="index.html"> <h1>BZU Transportation</h1></a>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Trips</li>
                </ol>
            </div>
        </div>
    </div>
</div>




<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My Trips</h4>
                    </div>
                    <div class="card-body">

                                <!--start buton -->
                                <div  class=" p-md-2   ">

                                    <div class="card-body">

                                        <!-- Centered Tabs -->

                                        <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All trips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Upcoming trips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Completed trips </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cancelled trips</a>
                                            </li>
                                        </ul>


                                    </div>

                                <!--end butoon -->

                                <!--start Search your trips -->
                                <div class=" d-flex justify-content-center border">

                                    <div class="col-sm-12 " >

                                        <div class="well well-sm  d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="txtSearchTerm">Search your trips</label>
                                                    <div class="form-group">
                                                        <input id="txtSearchTerm" type="text" class="form-control" placeholder="Search term">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="selTimeframe">Placed</label>
                                                    <div class="form-group">
                                                    <select class="form-control" id="selTimeframe">
                                                        <option data-value="-1">None Selected</option>
                                                        <option data-value="0d">today (28 Dec 2020)</option>
                                                        <option data-value="1d">yesterday (27 Dec 2020)</option>
                                                        <option data-value="0m">this month (Dec 2020)</option>
                                                        <option data-value="1m">last month (Nov 2020)</option>
                                                        <option data-value="3m">last 3 month (Sep 2020 - Nov 2020)</option>
                                                        <option data-value="6m">last 6 month (Jun 2020 - Nov 2020)</option>
                                                        <option data-value="2020y">this year (2020)</option>
                                                        <option data-value="2019y">last year (2019)</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                <label for="selSortOrderframe">Order by</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="selSortOrderframe">
                                                    <option data-value="PickUpDate" selected>Pickup date</option>
                                                    <option data-value="BookingTime">Booking date</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-sm-1">
                                                <label for="selSortDirectionframe">Direction</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="selSortDirectionframe" style="font-family: fontAwesome;">
                                                    <option data-value="Asc" title="Ascending">&#xf0aa;</option>
                                                    <option data-value="Desc" title="Descending" selected>&#xf0ab;</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <label>&nbsp;&nbsp;&nbsp;</label>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-primary" ">Go</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                    </div>




                </div>
                <!-- /# card -->




                <div class="col-lg-12">

                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Booking date 22 December 2020 20:43</h4>
                        </div>
                        <div class="card-body">

                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-sm-3">

                                        <i class="fa fa-clock-o"></i> <label Length="13" for="Pickup_date">Pickup date</label>
                                        <p id="pickuptime-p-0"> 01 January 2021 20:55</p>
                                        <input id="PickUpTime-0" name="BookingsList[0].UtcPickUpTime" type="hidden" value="2021-01-01 18:55:00.000" />
                                        <input data-val="true" data-val-required="The PickUpASAP field is required." id="PickupASAP-0" name="BookingsList[0].PickUpASAP" type="hidden" value="False" />

                                        <label class="control-label" for="BookingsList_0__PickUpAddress"><i class="fa fa-map-marker p"></i> Pickup</label>
                                        <address>Birzeit University,<br>Birzeit,</address>


                                        <label class="control-label" for="BookingsList_0__DestinationAddress"><i class="fa fa-map-marker d"></i> Dropoff</label>
                                        <address>street st,<br>Al-Masyoun,<br>Ramallah</address>
                                    </div>

                                    <div class="col-sm-3">



                                        <label class="control-label" for="BookingsList_0__PassengerName"><i class="fa fa-user"></i> Passenger</label> <span style="font-size:small;"></span>
                                        <p>sara harb<br />
                                        <i class="fa fa-phone"></i> +972597511048<br />
                                        <i class="fa fa-envelope"></i> saraharb950@gmail.com</p>


                                    </div>

                                    <div class="col-sm-3">


                                        <label class="control-label" for="BookingsList_0__NumberOfPassengers"><i class="fa fa-users"></i> Number of passengers</label>
                                        <p>Up to 4</p>


                                        <label class="control-label" for="BookingsList_0__VehicleSpecs"><i class="fa fa-taxi"></i> Vehicle type</label>
                                        <p>Fourd</p>

                                        <label class="control-label" for="BookingsList_0__PaymentType"><i class="fa fa-money"></i> Payment type</label>
                                        <p>Cash</p>


                                    </div>

                                    <div class="col-sm-3">
                                        <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#map-0" onclick="UpdateMapCanvas('map-0');" style="margin-bottom:5px;">View Map</button>



                                    </div>








                                </div>
                                <div class="card-footer">
                                    <div class="panel-footer">
                                        <span class="label label-danger">Cancelled</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>





                <div class="col-lg-12">

                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Booking date 31 December 2020 06:53</h4>
                        </div>
                        <div class="card-body">

                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-sm-3">

                                        <i class="fa fa-clock-o"></i> <label Length="13" for="Pickup_date">Pickup date</label>
                                        <p id="pickuptime-p-0"></p>
                                        <input id="PickUpTime-0" name="BookingsList[0].UtcPickUpTime" type="hidden" value="2021-01-02 05:00:00.000" />
                                        <input data-val="true" data-val-required="The PickUpASAP field is required." id="PickupASAP-0" name="BookingsList[0].PickUpASAP" type="hidden" value="False" />

                                        <label class="control-label" for="BookingsList_0__PickUpAddress"><i class="fa fa-map-marker p"></i> Pickup</label>
                                        <address>BONNAR COURT,<br>HEBBURN NE31 2YN</address>


                                         <label class="control-label" for="BookingsList_0__DestinationAddress"><i class="fa fa-map-marker d"></i> Dropoff</label>                            <address>BISHOP SUITE,<br>RAMSIDE HALL,<br>COUNTY DURHAM,<br>DH1 1TD</address>

                                    </div>

                                    <div class="col-sm-3">

                                        <label class="control-label" for="BookingsList_0__BookerName"><i class="fa fa-user"></i> Booker</label>
                                        <p>sara harb<br />
                                        <i class="fa fa-phone"></i> +972597511048<br />
                                        <i class="fa fa-envelope"></i> saraharb950@gmail.com</p>

                                        <br />

                                        <label class="control-label" for="BookingsList_0__PassengerName"><i class="fa fa-user"></i> Passenger</label> <span style="font-size:small;"></span>
                                        <p>sara harb<br />
                                        <i class="fa fa-phone"></i> +972597511048<br />
                                        <i class="fa fa-envelope"></i> saraharb950@gmail.com</p>


                                    </div>

                                    <div class="col-sm-3">


                                        <label class="control-label" for="BookingsList_0__NumberOfPassengers"><i class="fa fa-users"></i> Number of passengers</label>
                                        <p>Up to 4</p>


                                        <label class="control-label" for="BookingsList_0__VehicleSpecs"><i class="fa fa-taxi"></i> Vehicle type</label>
                                        <p>Car</p>

                                        <label class="control-label" for="BookingsList_0__PaymentType"><i class="fa fa-money"></i> Payment type</label>
                                        <p>Cash</p>


                                    </div>

                                    <div class="col-sm-3">

                                      <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#map-0" onclick="UpdateMapCanvas('map-0');" style="margin-bottom:5px;">View Map</button>
                                      <div id="map-0" class="collapse clps">
                                          <div id="mapcanvas-76476"
                                               class="mapcanvas"
                                               style="margin-top:0;margin-bottom:5px;"
                                               data-pickuplat="54.9747100000"
                                               data-pickuplong="-1.5066100000"

                                               data-via1lat="0"
                                               data-via1long="0"
                                               data-via1addr=""

                                               data-via2lat="0"
                                               data-via2long="0"
                                               data-via2addr=""

                                               data-via3lat="0"
                                               data-via3long="0"
                                               data-via3addr=""

                                               data-via4lat="0"
                                               data-via4long="0"
                                               data-via4addr=""

                                               data-destinationlat="54.7947700000"
                                               data-destinationlong="-1.5167600000"
                                               data-asdirected='false'>
                                          </div>
                                      </div>

                                             <a class="btn btn-info btn-block" href="" id="al-viewbooking">View Booking</a>
                                               <button type="button" id="CancelBooking-117650887" class="btn btn-danger btn-block" onclick="CancelBooking(31445, 117650887, 'BookingsPage');">Cancel Booking</button>





                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="panel-footer">
                                                        <div id="BookingProgress-117650887" class="row bookingprogress">
                                                            <div class="col-sm-2 stage active">
                                                                <span>Confirmed</span>
                                                            </div>
                                                            <div class="col-sm-1 seperator">
                                                            </div>
                                                            <div class="col-sm-2 stage">
                                                                <span>Car dispatched</span>
                                                            </div>
                                                            <div class="col-sm-1 seperator">
                                                            </div>
                                                            <div class="col-sm-2 stage">
                                                                <span>Passenger on board</span>
                                                            </div>
                                                            <div class="col-sm-1 seperator">
                                                            </div>
                                                            <div class="col-sm-2 stage">
                                                                <span>Completed</span>
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>

                                            </div>






                                                    </div>

                                                </div>

                             </div>
                        </div>




                </div>



            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->
   <!-- footer start  -->
    <div class="card-footer">
        <div class="panel-footer">
            <div class="col-sm-3 mt-3">
                <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
            </div>
            <div class="col-sm-5 "></div>
            <div class="col-sm-4 mt-3  d-flex justify-content-around ">

                    <div class="form-group d-flex  ">
                        <select class="form-control " id="PickUp_SelectedCity" name="PickUp.SelectedCity">
                        <option selected="selected" value="53.479874/-2.239151">english </option>
                        <option value="51.507033/-0.116043">arabic</option>
                        </select>
                </div>

                <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
                <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS</a>
            </div>
        </div>
    </div>
    <!-- footer end -->

   


</div><!-- /#right-panel -->

@endsection