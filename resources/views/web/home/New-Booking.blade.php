@extends('web.layout')
@section('title'){{__('web.Home')}} @endsection
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
                            <li><a href="index.html">{{__('web.Home')}}</a></li>
                            <li class="active">{{__('web.New Booking')}}</li>
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

                        <div class="col-lg-3 bg-light mt-1 mb-1 ">

                            <p>{{__('web.Route and journey details')}}</p>

                        </div>
                        <div class="col-lg-3  mt-1 mb-1 ">
                            <p> {{__('web.Confirm')}}</p>

                        </div>
                        <div class="col-lg-3 mt-1 mb-1 ">
                            <p>{{__('web.Booked')}}</p>

                        </div>




                       </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="default-tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-Bus" role="tab" aria-controls="nav-home" aria-selected="false"><i class="fa fas fa-bus">{{__('web.Bus')}}</i></a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-ford" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fas fa-truck">{{__('web.Van')}} </i></a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-taxi" role="tab" aria-controls="nav-contact" aria-selected="true"><i class="fa fas fa-taxi">{{__('web.Taxi')}}</i></a>



                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-taxi" role="tabpanel" aria-labelledby="nav-home-tab">
                                            @include('web.inc.requestTrip')
                                            <form  method="POST" action="{{url('requestTaxiTrip/1')}}">
                                                @csrf
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header"> {{__('web.Booking')}}</div>
                                                        <div class="card-body card-block">
                                                            <input name="taxi" value="taxi" type="hidden">


                                                                <div class="row ">
                                                                    <div class="col col-md-6">

                                                                        <label for=""> <i class="fa fa-calendar"></i>{{__('web.Pickup date')}}</label>
                                                                        <input type="date" name="date" placeholder="Add the date, please"  value="" >
                                                                    </div>




                                                                    <div class="col col-md-6">

                                                                        <label for=""> <i class="fa fa fa-clock-o "></i> {{__('web.Pickup time')}}</label><br>
                                                                        <input type="time" name="time"  value="">
                                                                    </div>


                                                                </div>

                                                                <br>

                                                                <!--pickup text-->
                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <label class=" mr-3"> <i class="fa fa-map-marker mr-1 "></i>{{__('web.Pickup')}}</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-btn">
                                                                                <div class="btn-group">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-light"><i class="ti-star"></i></button>
                                                                                    <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                                        <div class="ml-3 "> {{__('web.Favourites')}}</div>
                                                                                        <button type="button" tabindex="0" class="dropdown-item"> {{__('web.No favourite addresses have been saved')}}</button>
                                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="text" id="Pickup" name="Pickup" placeholder="Address" class="form-control"  value="">
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <!---dropoff text-->
                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <label class=" mr-2"><i class="fa fa-map-marker mr-1 "></i>{{__('web.Dropoff')}}</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-btn">
                                                                                <div class="btn-group">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-light"><i class="ti-star"></i></button>
                                                                                    <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                                        <div class="ml-3 "> {{__('web.Favourites')}}</div>
                                                                                        <button type="button" tabindex="0" class="dropdown-item">{{__('web.No favourite addresses have been saved')}}</button>
                                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="text" id="Dropoff" name="Dropofff" placeholder="Address" class="form-control" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="card mt-4">
                                                        <div class="card-header ">
                                                            <h4>{{__('web.Journey Details')}}</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-body card-block">
                                                                <div class="fatima">
                                                                    <div class="num">



                                                                        <div class="row form-group Payment">
                                                                            <div class="col col-md-9"><label class=" form-control-label"><i class=" fa  fa-money mr-1"></i>{{__('web.Payment type')}}</label></div>
                                                                            <div class="col col-md-9">
                                                                                <div class="form-check-inline form-check">
                                                                                    <label for="inline-radio1" class="form-check-label  mr-4">
                                                                                        <input type="radio" id="inline-radio1" name="PaymentType" value="cash" class="form-check-input ">{{__('web.Cash')}}
                                                                                    </label>
                                                                                    <label for="inline-radio2" class="form-check-label mr-4 ">
                                                                                        <input type="radio" id="inline-radio2" name="PaymentType" value="BZUid" class="form-check-input ">{{__('web.BZU card')}}
                                                                                    </label>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div>
                                                                            <label><i class="fas fa  fa-comment mr-1"></i>{{__('web.Driver note (optional)')}}</label>
                                                                            <input class="form-control" id="DriverNote" name="DriverNote" placeholder="Blank" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /# card -->
                                                </div>
                                                <!-- /# column -->

                                                <div class="GetQuote text-right">
                                                   <button class="btn btn-outline-warning">{{__('web.Get Quote')}}<i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button>

                                                  </div>

                                            </form>
                                        </div>

                                        <!--navbar tage for ford--->

                                        <div class="tab-pane fade" id="nav-ford" role="tabpanel" name="van" aria-labelledby="nav-profile-tab">
                                            @include('web.inc.requestTrip')
                                             <form method="POST" action="{{url("requestVanTrip/1")}}" >
                                                @csrf
                                                <input type="hidden" id="Van" name="van" value="van">

                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">{{__('web.Booking')}}</div>
                                                        <div class="card-body card-block">


                                                                <div class="row ">
                                                                    <div class="col col-md-6">
                                                                        <label for=""> <i class="fa fa-calendar"></i> {{__('web.Pickup date')}}</label>
                                                                        <input type="date" name="date"  value="">
                                                                    </div>

                                                                    <div class="col col-md-6">

                                                                        <label for=""> <i class="fa fa fa-clock-o "></i> {{__('web.Pickup time')}}</label><br>
                                                                        <input type="time" name="time"  value="">
                                                                    </div>


                                                                </div>

                                                                <br>

                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <label class=" mr-3"> <i class="fa fa-map-marker mr-1 "></i>{{__('web.Pickup')}}</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-btn">
                                                                                <div class="btn-group">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-light"><i class="ti-star"></i></button>
                                                                                    <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                                        <div class="ml-3 "> {{__('web.Favourites')}}</div>
                                                                                        <button type="button" tabindex="0" class="dropdown-item">{{__('web.No favourite addresses have been saved')}}</button>
                                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="text" id="Pickup" name="Pickup" placeholder="Address" class="form-control"  value="">
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <br>

                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <label class=" mr-2"><i class="fa fa-map-marker mr-1 "></i>{{__('web.Dropoff')}}</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-btn">
                                                                                <div class="btn-group">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-light"><i class="ti-star"></i></button>
                                                                                    <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                                        <div class="ml-3 "> {{__('web.Favourites')}}</div>
                                                                                        <button type="button" tabindex="0" class="dropdown-item">{{__('web.No favourite addresses have been saved')}}</button>
                                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="text" id="Dropoff" name="Dropoff" placeholder="Address" class="form-control" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="card mt-4">
                                                        <div class="card-header ">
                                                            <h4>{{__('web.Journey Details')}}</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-body card-block">
                                                                <div class="fatima">
                                                                    <div class="num">

                                                                        <div class="num">
                                                                            <label class="numofpass"> <i class="fa  fa-users"></i> {{__('web.Number of passengers')}}</label>
                                                                            <select class="form-control" name="numPass">
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            </select>
                                                                        </div>
                                                                        <br>

                                                                        <div class="row form-group Payment">
                                                                            <div class="col col-md-9"><label class=" form-control-label"><i class=" fa  fa-money mr-1"></i>{{__('web.Payment type')}} </label></div>
                                                                            <div class="col col-md-9">
                                                                                <div class="form-check-inline form-check">
                                                                                    <label for="inline-radio1" class="form-check-label  mr-4">
                                                                                        <input type="radio" id="inline-radio1" name="paymentType" value="cash" class="form-check-input ">{{__('web.Cash')}}
                                                                                    </label>
                                                                                    <label for="inline-radio2" class="form-check-label mr-4 ">
                                                                                        <input type="radio" id="inline-radio2" name="paymentType" value="BZUid" class="form-check-input ">{{__('web.BZU card')}}
                                                                                    </label>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div>
                                                                            <label><i class="fas fa  fa-comment mr-1"></i>{{__('web.Driver note (optional)')}}</label>
                                                                            <input class="form-control" id="DriverNote" name="DriverNote" placeholder="Blank" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /# card -->
                                                </div>
                                                <!-- /# column -->

                                                <div class="GetQuote text-right">
                                                    <button class="btn btn-outline-warning">{{__('web.Get Quote')}} <i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button>

                                                  </div>

                                            </form>

                                        </div>
                                        <!--end navbar tage for ford--->

                                        <!--navbar tage for bus--->
                                        <div class="tab-pane fade" id="nav-Bus" role="tabpanel" aria-labelledby="nav-contact-tab">



                                            <div class="content mt-3">
                                                <div class="animated fadeIn">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <strong class="card-title">{{__('web.Booking')}} </strong>
                                                                </div>
                                                                <div class="card-body">
                                                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>

                                                                                <th><i class="fa fa-calendar mr-1"></i>{{__('web.Pickup date')}} </th>
                                                                                <th><i class="fa fa fa-clock-o mr-1"></i>{{__('web.Pickup time')}}</th>
                                                                                <th><i class="fa fa-map-marker mr-1 "></i>{{__('web.Pickup')}}</th>
                                                                                <th><i class="fa fa-map-marker mr-1 "></i>{{__('web.Dropoff')}}</th>
                                                                                <th> <i class="fa  fa-users"></i>{{__('web.number of set')}}</th>
                                                                                <th><i class=" fa  fa-money mr-1"></i>{{__('web.Payment type')}}</th>
                                                                                <th>{{__('web.Booking')}} </th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            @foreach ($trips as $trip)
                                                                            <tr>
                                                                                <td>{{$trip->pickupDate}}</td>
                                                                                <td>{{$trip->pickupTime}}</td>
                                                                                <td>{{$trip->pickup}}</td>
                                                                                <td>{{$trip->dropoff}}</td>
                                                                                <td><select class="form-control">
                                                                                    <option>0</option>
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    </select></td>
                                                                                    <td><div class="form-check-inline form-check">
                                                                                        <label for="inline-radio1" class="form-check-label  mr-4">
                                                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input ">{{__('web.Cash')}}
                                                                                        </label>
                                                                                        <label for="inline-radio2" class="form-check-label mr-4 ">
                                                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input "> {{__('web.BZU card')}}
                                                                                        </label>

                                                                                    </div></td>

                                                                                <td> <a href="{{url('passenger/Newbooking-confirm/1')}}"><button type="button" class="btn btn-outline-warning">{{__('web.Get Quote')}}<i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button> </a> </td>

                                                                            </tr>
                                                                            @endforeach


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div><!-- .animated -->
                                            </div><!-- .content -->


                                        </div>
                                        <!--end navbar tage for bus--->


                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                </div> <!-- .row -->
            </div><!-- .animated -->


@endsection
