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
                    <li><a href="index.html">{{__('web.Home')}} </a></li>
                    <li class="active">{{__('web.Trips')}} </li>
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
                        <h4> {{__('web.My Trips')}} </h4>
                    </div>
                    <div class="card-body">

                                <!--start buton -->
                                <div  class=" p-md-2   ">

                                    <div class="card-body">

                                        <!-- Centered Tabs  ********************************-->
                                        <?php $passid=Auth::user()->id?>

                                        <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active"  data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">{{__('web.All trips')}} </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  href="{{url("/passenger/My-Trips/UpcomingTrips/$passid")}}" role="tab" aria-selected="true" > {{__('web.Upcoming trips')}} </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  href="{{url("/passenger/My-Trips/CompletedTrips/$passid")}}" role="tab"  aria-selected="false">{{__('web.Completed trips')}} </a>
                                            </li>
                                            <li class="nav-item">
                                             <a class="nav-link"   href="{{url("/passenger/My-Trips/CancelledTrips/$passid")}}" role="tab"  aria-selected="false"> {{__('web.Cancelled trips')}} </a>

                                            </li>
                                        </ul>
                                        <!-- Centered Tabs  ********************************-->


                                    </div>

                                <!--end butoon -->

                                <!--start Search your trips -->
                                <div class=" d-flex justify-content-center border">

                                    <div class="col-sm-12 " >

                                        <div class="well well-sm  d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="txtSearchTerm">{{__('web.Search your trips')}} </label>
                                                    <div class="form-group">
                                                        <input id="txtSearchTerm" type="text" class="form-control" placeholder="Search term">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="selTimeframe">{{__('web.Placed')}} </label>
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
                                                <label for="selSortOrderframe">{{__('web.Order by')}} </label>
                                                <div class="form-group">
                                                    <select class="form-control" id="selSortOrderframe">
                                                    <option data-value="PickUpDate" selected>{{__('web.Pickup date')}} </option>
                                                    <option data-value="BookingTime"> {{__('web.Booking date')}} </option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-sm-1">
                                                <label for="selSortDirectionframe"> {{__('web.Direction')}} </label>
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
                                                        <button type="button" class="btn btn-primary" "> {{__('web.Go')}} </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                    </div>




                </div>
                <!-- /# card -->
                <!-- && $passenger_trips->trip_id == $trips->id -->
               <!-- <taxtarea>$passengerTrip->passenger_id</taxtarea> -->

                   @foreach ($passengerTrips as $passTrip)
                    @if (Auth::user()->id == $passTrip->passenger_id)
                    @foreach ($trips as $myTrips)
                    @if ($passTrip->trip_id == $myTrips->id)



                <div class="col-lg-12">
                    <div class="col-lg-12">


                        <div class="card mt-3">
                            <div class="card-header">
                                <h4>{{__('web.Booking date')}} {{$myTrips->pickupDate}} </h4>
                            </div>
                            <div class="card-body">

                                <div class="panel-body">
                                    <div class="row">

                                        <div class="col-sm-3">

                                            <i class="fa fa-clock-o"></i> <label Length="13" for="Pickup_date">{{__('web.Pickup date')}} </label>
                                            <p id="pickuptime-p-0">{{$myTrips->pickupDate}} </p>
                                            <input id="PickUpTime-0" name="BookingsList[0].UtcPickUpTime" type="hidden" value="2021-01-02 05:00:00.000" />
                                            <input data-val="true" data-val-required="The PickUpASAP field is required." id="PickupASAP-0" name="BookingsList[0].PickUpASAP" type="hidden" value="False" />

                                            <label class="control-label" for="BookingsList_0__PickUpAddress"><i class="fa fa-map-marker p"></i>{{__('web.Pickup')}}</label>
                                            <address>{{$myTrips->pickup}} </address>


                                            <label class="control-label" for="BookingsList_0__DestinationAddress"><i class="fa fa-map-marker d"></i>{{__('web.Dropoff')}}</label>
                                                                      <address>{{$myTrips->dropoff}}</address>

                                        </div>

                                        <div class="col-sm-3">

                                            <label class="control-label" for="BookingsList_0__BookerName"><i class="fa fa-user"></i> {{__('web.Booker')}} </label>
                                            <p>{{Auth::user()->name}}<br />
                                            <i class="fa fa-phone"></i> {{Auth::user()->phone}}<br />
                                            <i class="fa fa-envelope"></i>{{Auth::user()->email}}</p>

                                            <br />

                                            <label class="control-label" for="BookingsList_0__PassengerName"><i class="fa fa-user"></i> {{__('web.Passenger')}} </label> <span style="font-size:small;"></span>
                                            <p>{{Auth::user()->name}}<br />
                                            <i class="fa fa-phone"></i> {{Auth::user()->phone}}<br />
                                            <i class="fa fa-envelope"></i> {{Auth::user()->email}}</p>


                                        </div>

                                        <div class="col-sm-3">


                                            <label class="control-label" for="BookingsList_0__NumberOfPassengers"><i class="fa fa-users"></i>  {{__('web.Number of passengers')}} </label>
                                            <p>{{$passTrip->seatNum}}</p>


                                            <label class="control-label" for="BookingsList_0__VehicleSpecs"><i class="fa fa-taxi"></i>{{__('web.Vehicle type')}} </label>
                                            <p>{{$myTrips->cabType}}</p>

                                            <label class="control-label" for="BookingsList_0__PaymentType"><i class="fa fa-money"></i>{{__('web.Payment type')}} </label>
                                            <p>{{$passTrip ->PaymentType}} </p><!--PaymentType-->


                                        </div>

                                        <div class="col-sm-3">

                                        <button type="button" class="btn btn-default btn-block" data-toggle="collapse" data-target="#map-0" onclick="UpdateMapCanvas('map-0');" style="margin-bottom:5px;"> {{__('web.View Map')}}</button>
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

                                                <a class="btn btn-info btn-block" href="" id="al-viewbooking">{{__('web.View Booking')}}</a>
                                                <button type="button" id="CancelBooking-117650887" class="btn btn-danger btn-block" onclick="CancelBooking(31445, 117650887, 'BookingsPage');">{{__('web.Cancel Booking')}} </button>





                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="panel-footer">

                                                            <div id="BookingProgress-117650887" class="row bookingprogress">
                                                                <div class="col-sm-2 stage active w-50 bg-success ">
                                                                    <span>{{__('web.Confirmed')}} </span>
                                                                </div>
                                                                <div class="col-sm-1 seperator">
                                                                </div>
                                                                <div class="col-sm-2 stage">
                                                                    <span>{{__('web.Car dispatched')}} </span>
                                                                </div>
                                                                <div class="col-sm-1 seperator">
                                                                </div>
                                                                <div class="col-sm-2 stage">
                                                                    <span>{{__('web.Passenger on board')}} </span>
                                                                </div>
                                                                <div class="col-sm-1 seperator">
                                                                </div>
                                                                <div class="col-sm-2 stage">
                                                                    <span> {{__('web.Completed')}} </span>
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
                @endif
                @endforeach
                @endif
                @endforeach




            <!-- /# column -->
        </div> <!-- .row -->
    </div><!-- .animated -->
@endsection
