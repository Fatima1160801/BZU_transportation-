@extends('web.layout')
@section('title') Rewords @endsection
@section('main')
 <!-- Header-->

 <div class="breadcrumbs ">
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
                    <li class="active">New Booking</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3 ">
    <div class="animated fadeIn">
        <div class="row">



            <div class="col-lg-12  ">
                <div class=" col-lg-12 bg-flat-color-3 d-flex justify-content-around text-center">

                 <div class="col-lg-3 mt-1 mb-1 ">

                     <p>Route and journey details</p>

                 </div>
                 <div class="col-lg-3  mt-1 mb-1 ">
                     <p>confirm</p>

                 </div>
                 <div class="col-lg-3 bg-light  mt-1 mb-1 ">
                     <p>Booked</p>

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
                                                        <div class="col-sm-2 stage active w-50 bg-success ">
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


@endsection
