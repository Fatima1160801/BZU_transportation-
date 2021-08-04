@extends('layouts.layout')
@section('title')Trip Details @endsection
@section('main')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <?php
            $dr;
             if($trips->driver==null)
             {
                $dr="--";

             }
                 else{
                    $dr=$trips->driver->name;

                 }

            ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"
                        <strong class="card-title">{{__('web.Booking')}} From: @if (App::getlocale()=='en')
                            {{json_decode($trips->pickup)->en}}
                             @else
                             {{json_decode($trips->pickup)->ar}}
                             @endif <br> To: @if (App::getlocale()=='en')
                             {{json_decode($trips->dropoff)->en}}
                              @else
                              {{json_decode($trips->dropoff)->ar}}
                              @endif <br> Driver Name:{{$dr}} <br> pickupDate:{{$trips->pickupDate}} <br> pickupTime:{{$trips->pickupTime}} </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>

                                    <th>{{__('web.Passenger Id')}} </th>

                                    <th><i class=" fa  fa-money mr-1"></i>{{__('web.Payment type')}}</th>
                                    <th> <i class="fa  fa-users"></i>{{__('web.number of set')}}</th>
                                    <th><i class="fas fa  fa-comment mr-1"></i>{{__('web.Driver note (optional)')}}</th>
                                    <th>{{__('web.Passenger Status')}}</th>



                                </tr>
                            </thead>
                            <tbody>
                            <!-- ******************-->

                                @foreach ($detalis as $trip)
                                 <form id="bus-trip-form" method="POST" action="{{url("requestBusTrip")}}">
                                      @csrf
                                <tr>


                                <input name="passenger_id" value=""  type="hidden">
                                    <input name="trip_id" value="{{$trip->id}}" type="hidden">

                                    <td>{{$trip->passenger_id}}</td>
                                    <td>{{$trip->PaymentType}}</td>
                                    <td>{{$trip->seatNum}}</td>
                                    <td>{{$trip->DriverNote}}</td>
                                    <td>{{$trip->statusTrip}}</td>




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
@endsection
