@extends('web.layout')
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
                                    <p>{{$trip->pickup}}</p>
                                </div>
                                <div class="text-pickup mb-5">
                                    <label class="Pickup"> <i class="fa fa-map-marker mr-1"></i>{{__('web.Dropoff')}} </label>
                                    <P>{{$trip->dropoff}}</P>
                                </div>

                                <div class="mb-5">
                                    <label> <i class="fa fa-clock-o mr-1"></i>{{__('web.Pickup time')}} </label>
                                    <p>{{$trip->pickupDate}} {{$trip->pickupTime}}</p>

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
                                <label class="malabel float-right">(estimated) {{$trip->price}}₪</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                {{__('web.Gratuity')}}
                                <label class="malabel float-right">{{$trip->gratuity}}0₪</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                 {{__('web.Total')}}
                                 <label class="malabel float-right">{{$trip->price + $trip->gratuity}}₪</label>
                              </div>
                              <div class="GetQuote mt-3 text-right">
                               <a href="{{url("passenger/Newbooking-booked/$trip->id")}}"><button type="button" class="btn btn-outline-warning">{{__('web.Get Quote')}} <i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button></a>

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
