@extends('layouts.layout')
@section('title') Rewords @endsection
@section('main')
 <!-- Header-->


<div class="content mt-3 ">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-12  ">
                <div class=" col-lg-12 bg-flat-color-3 d-flex justify-content-around text-center">

                 <div class="col-lg-3 mt-1 mb-1 ">

                     <p>{{__('web.Route and journey details')}} </p>

                 </div>
                 <div class="col-lg-3 bg-light  mt-1 mb-1 ">
                     <p>{{__('web.Confirm')}} </p>

                 </div>
                 <div class="col-lg-3  mt-1 mb-1 ">
                     <p>{{__('web.Booked')}} </p>

                 </div>




                </div>
             </div>
            <div class="col-lg-1 mt-3"></div>



            <div class="col-lg-3 mt-3">
                <div class="card">
                    <div class="card-header"><strong>{{__('web.Your Journey')}} </strong></div>
                    <div class="card-body card-block">
                                <div class="text-pickup mb-5">
                                    <label class="Pickup"> <i class="fa fa-map-marker mr-1"></i>{{__('web.Pickup Location')}} </label>
                                    <p>@if (App::getlocale()=='en')
                                        {{json_decode($trips->pickup)->en}}
                                         @else
                                         {{json_decode($trips->pickup)->ar}}
                                         @endif</p>
                                </div>
                                <div class="text-pickup mb-5">
                                    <label class="Pickup"> <i class="fa fa-map-marker mr-1"></i>{{__('web.Dropoff')}} </label>

                                    <P> @if (App::getlocale()=='en')
                                         {{json_decode($trips->dropoff)->en}}
                                          @else
                                         {{json_decode($trips->dropoff)->ar}}
                                         @endif
                                    </P>
                                </div>

                                <div class="mb-5">
                                    <label> <i class="fa fa-clock-o mr-1"></i>{{__('web.Pickup time')}} </label>
                                    <p>{{$trips->pickupDate}} {{$trips->pickupTime}}</p>

                                </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header"><strong> {{__('web.Journey Details')}} </strong></div>
                    <div class="card-body card-block">
                        <div class="Price">
                            <div class="alert alert-primary alertsize" role="alert">
                             {{__('web.Price')}}
                                <label class="malabel float-right">(estimated) {{$trips->price}}₪</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                {{__('web.Seat Number')}}
                                <label class="malabel float-right">{{$idpass[0]->seatNum}}</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                 {{__('web.Total')}}
                                 <label class="malabel float-right">{{$trips->price * $idpass[0]->seatNum}}₪</label>


                              </div>
                              <div class="GetQuote mt-3 text-right">

                                <form method="POST" action="{{url("/balance/$trips->id")}}">
                                    @csrf
                                  <input type="hidden" value="{{$trips->price * $idpass[0]->seatNum}}" name="pay">
                                  <input type="hidden" value="{{$passengerBal[0]->balance}}" name="bal">
                                  <input type="hidden" value="{{$idpass[0]->PaymentType}}" name="PaymentType">

                                <button class="btn btn-outline-warning">{{__('web.Get Quote')}} <i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button>
                               </form>
                              </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<div class="height"></div>
<!-- footer start  -->


@endsection
