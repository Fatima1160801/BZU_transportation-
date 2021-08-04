@extends('layouts.layout')
@section('title'){{__('web.Home')}} @endsection
@section('main')
        <!-- Header-->





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
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-Bus" role="tab" aria-controls="nav-bus" aria-selected="true"><i class="fa fas fa-bus">{{__('web.Bus')}}</i></a>
                                            <a class="nav-item nav-link" id="nav-van-tab" data-toggle="tab" href="#nav-ford" role="tab" aria-controls="nav-van" aria-selected="false"><i class="fa fas fa-truck">{{__('web.Van')}} </i></a>
                                            <a class="nav-item nav-link" id="nav-taxi-tab" data-toggle="tab" href="#nav-taxi" role="tab" aria-controls="nav-taxi" aria-selected="false"><i class="fa fas fa-taxi">{{__('web.Taxi')}}</i></a>



                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show " id="nav-taxi" role="tabpanel" aria-labelledby="nav-taxi-tab">
                                            @include('inc.requestTrip')
                                            <form  method="POST" action="{{url("requestTaxiTrip")}}">
                                                @csrf
                                                <input type="hidden" name="cabType" value="taxi" ><!--- trip_id -->
                                                <input name="statusTrip" value="confirmed" type="hidden">
                                                <input name="passenger" value="{{ $userid[0]->id }}"  type="hidden">






                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header"> {{__('web.Booking')}}</div>
                                                        <div class="card-body card-block">



                                                                <div class="row ">
                                                                    <div class="col col-md-6">

                                                                        <label for=""> <i class="fa fa-calendar"></i>{{__('web.Pickup date')}}</label>
                                                                        <input  class="form-control" type="date" name="pickupDate" placeholder="Add the date, please"  value="" >
                                                                    </div>





                                                                    <div class="col col-md-6">
                                                                        <label for=""> <i class="fa fa fa-clock-o "></i> {{__('web.Pickup time')}}</label>
                                                                       <input   class="form-control" type="time" name="pickupTime"  value="">



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

                                                                            <select searchable="Search here.." name="pickup" class=" form-control mdb-select md-form bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                                                                @foreach ($placespickup as $placepickup )
                                                                                @if (App::getlocale()=='en')
                                                                                <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->en}}</option>
                                                                                @else
                                                                                <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->ar}}</option>
                                                                                @endif
                                                                                 @endforeach
                                                                                </select>

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
                                                                                        <div class="ml-3"> {{__('web.Favourites')}}</div>
                                                                                        <button type="button" tabindex="0" class="dropdown-item">{{__('web.No favourite addresses have been saved')}}</button>
                                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                          <select  name="dropoff" class="form-control bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">

                                                                                @foreach ($placesdropoff as $placedropoff )
                                                                                @if (App::getlocale()=='en')
                                                                                <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->en}}</option>
                                                                                @else
                                                                                <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->ar}}</option>
                                                                                @endif
                                                                                 @endforeach



                                                                             </select>

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
                                                                        <input name="seatNum" value="1" type="hidden">


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

                                        <!--navbar tage for van--->

                                        <div class="tab-pane fade" id="nav-ford" role="tabpanel" name="van" aria-labelledby="nav-profile-tab">
                                            @include('inc.requestTrip')
                                             <form method="POST" action="{{url("requestVanTrip/")}}" >
                                                @csrf
                                                <input type="hidden" id="Van" name="cabType" value="van">
                                                <input name="statusTrip" value="confirmed" type="hidden"><!--- trip_id -->
                                                <input name="passenger_id" value="{{ $userid[0]->id }}"  type="hidden"><!--- triasdftghjgfdsaWERFHHJHGFREDWSAerfghjhgvdsaASDFGHp_id -->

                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">{{__('web.Booking')}}</div>
                                                        <div class="card-body card-block">


                                                            <div class="row ">
                                                                <div class="col col-md-6">

                                                                    <label for=""> <i class="fa fa-calendar"></i>{{__('web.Pickup date')}}</label>
                                                                    <input  class="form-control" type="date" name="pickupDate" placeholder="Add the date, please"  value="" >
                                                                </div>

                                                                <div class="col col-md-6">
                                                                    <label for=""> <i class="fa fa fa-clock-o "></i> {{__('web.Pickup time')}}</label>
                                                                   <input   class="form-control" type="time" name="pickupTime"  value="">

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
                                                                               <select searchable="Search here.." name="pickup" class=" form-control mdb-select md-form bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                                                                @foreach ($placespickupp as $placepickup )
                                                                                @if (App::getlocale()=='en')
                                                                                <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->en}}</option>
                                                                                @else
                                                                                <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->ar}}</option>
                                                                                @endif
                                                                                 @endforeach
                                                                                </select>                                                                        </div>

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
                                                                            <select  name="dropoff" class="form-control bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">

                                                                                @foreach ($placesdropofff as $placedropoff )
                                                                                @if (App::getlocale()=='en')
                                                                                <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->en}}</option>
                                                                                @else
                                                                                <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->ar}}</option>
                                                                                @endif
                                                                                 @endforeach



                                                                             </select>

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
                                                                            <select class="form-control" name="seatNum">
                                                                            <option  value="1">1</option>
                                                                            <option  value="2">2</option>
                                                                            <option  value="3">3</option>
                                                                            <option  value="4">4</option>
                                                                            <option  value="5">5</option>
                                                                            <option  value="6">6</option>
                                                                            <option  value="7">7</option>
                                                                            </select>
                                                                        </div>
                                                                        <br>

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
                                                                            <input class="form-control" id="DNote" name="DriverNote" placeholder="Blank" type="text" value="">
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
                                        <div class="tab-pane fade show active" id="nav-Bus" role="tabpanel" aria-labelledby="nav-home-tab">

                                                <input name="cabType" value="bus" type="hidden" form="bus-trip-form">

                                            <div class="content mt-3">
                                                <div class="animated fadeIn">
                                                    <div class="row">
                                                        @include('inc.requestTrip')
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <strong class="card-title">{{__('web.Booking')}} </strong>
                                                                </div>
                                                                <div class="card-body">
                                                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>{{__('web.Passengers')}}</th>
                                                                                <th><i class="fa fa-calendar mr-1"></i>{{__('web.Pickup date')}} </th>
                                                                                <th><i class="fa fa fa-clock-o mr-1"></i>{{__('web.Pickup time')}}</th>
                                                                                <th><i class="fa fa-map-marker mr-1 "></i>{{__('web.Pickup')}}</th>
                                                                                <th><i class="fa fa-map-marker mr-1 "></i>{{__('web.Dropoff')}}</th>
                                                                                <th><i class=" fa  fa-money mr-1"></i>{{__('web.Payment type')}}</th>
                                                                                <th> <i class="fa  fa-users"></i>{{__('web.number of set')}}</th>
                                                                                <th><i class="fas fa  fa-comment mr-1"></i>{{__('web.Driver note (optional)')}}</th>
                                                                                <th>{{__('web.Booking')}} </th>

                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>

                                                                            @foreach ($tripsBus as $trip)
                                                                             <form id="bus-trip-form" method="POST" action="{{url("requestBusTrip")}}">
                                                                                  @csrf
                                                                                <input name="passenger" value="{{ $userid[0]->id }}"  type="hidden">
                                                                                <input name="trip_id" value="{{$trip->id}}" type="hidden">
                                                                                <input name="passengerNumber" type="hidden" value="{{$trip->passengerCounter}}">
                                                                            <tr>
                                                                                <td>{{$trip->passengerCounter}}</td>
                                                                                <td>{{$trip->pickupDate}}</td>
                                                                                <td>{{$trip->pickupTime}}</td>
                                                                                <td> @if (App::getlocale()=='en')
                                                                                    {{json_decode($trip->pickup)->en}}
                                                                                     @else
                                                                                     {{json_decode($trip->pickup)->ar}}
                                                                                     @endif</td>
                                                                                <td>
                                                                                    @if (App::getlocale()=='en')
                                                                                    {{json_decode($trip->dropoff)->en}}
                                                                                     @else
                                                                                     {{json_decode($trip->dropoff)->ar}}
                                                                                     @endif
                                                                                </td>

                                                                                 <td><div class="form-check-inline form-check">
                                                                                        <label for="inline-radio1" class="form-check-label  mr-4">
                                                                                            <input type="radio"  name="PaymentType"  value="cash" class="form-check-input ">{{__('web.Cash')}}
                                                                                        </label>
                                                                                        <label for="inline-radio2" class="form-check-label mr-4 ">
                                                                                            <input type="radio"  name="PaymentType"  value="BZUid" class="form-check-input "> {{__('web.BZU card')}}
                                                                                        </label>

                                                                                    </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="seatNum" class="form-control">
                                                                                            <option  value="1" >1</option>
                                                                                            <option  value="2" >2</option>
                                                                                            <option  value="3" >3</option>
                                                                                            <option  value="4" >4</option>
                                                                                            <option  value="5" >5</option>
                                                                                            <option  value="6" >6</option>
                                                                                            <option  value="7" >7</option>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input class="form-control" name="DriverNote" placeholder="Blank" type="text">
                                                                                    </td>
                                                                                    <td>
                                                                                        <button  type="submit" value="{{$trip->id}}" class="btn btn-outline-warning">{{__('web.Get Quote')}}<i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button>
                                                                                    </td>

                                                                            </tr>
                                                                              </form>

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