@extends('layouts.layout')
@section('title')Earning @endsection
@section('main')

   <!-- Header-->

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
                    <li><a href="index.html">{{__('web.Home')}}</a></li>
                    <li class="active">{{__('web.Earning')}}</li>
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
                        <h4>{{__('web.Earning')}}</h4>
                    </div>
                    <div class="card-body">


                                                      <!-- Centered Tabs -->




                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th> {{__('web.Trips')}}</th>
                                    <th> {{__('web.Earning')}}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trip as $t)
                                <tr>
                                    <td>Booking From: @if (App::getlocale()=='en')
                                        {{json_decode($t->pickup)->en}}
                                         @else
                                         {{json_decode($t->pickup)->ar}}
                                         @endif<br>
                                         To:@if (App::getlocale()=='en')
                                         {{json_decode($t->dropoff)->en}}
                                          @else
                                          {{json_decode($t->dropoff)->ar}}
                                          @endif
                                        <br>
                                        pickupDate:{{$t->pickupDate}}<br>
                                        pickupTime:{{$t->pickupTime}}<br>
                                        price:{{$t->price}}<br>
                                        Passengers: {{$t->passengerCounter}}
                                    
                                    </td>

                                    <td>Trip price: {{$t->price * $t->passengerCounter}}<br>
                                        profit: {{$t->price * $t->passengerCounter *.85}} </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>





                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->





 @endsection
