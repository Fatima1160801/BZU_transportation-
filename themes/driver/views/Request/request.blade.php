@extends('layouts.layout')
@section('title') Add Driver @endsection
@section('main')





<div class="content mt-3">

    <!-- /# column -->
    <div class="col-lg-12">
       <div class="card">

           <div class="card-body">

           

                    @include('inc.requestTrip')
                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">
                           <thead>
                            <tr>
                                <th>{{__('web.Number Passengers')}}</th>
                                <th>{{__('web.Date')}} </th>
                                <th>{{__('web.Time')}} </th>
                                <th>{{__('web.Pickup')}}</th>
                                <th>{{__('web.Dropoff')}}</th>
                                <th>{{__('web.Price')}} </th>
                                <th>{{__('web.Actions')}}</th>

                            </tr>
                           </thead>
                           <tbody>
                           
                             
                                   @foreach ($DriverTrips as $DriverTrip)
                                       
                                  
                              
                               <tr>
                                  <input type="hidden" value="{{Auth::user()->id}}" name="idd">
                                   <td>{{$DriverTrip->passengerCounter}} 
                                    <br>
                                    Nots from passengers:
                                    <br>
                        
                                    @for ($i = 0; $i < count($DriverTrip->passenger_Trip); $i++)
                                    {{$i+1}}- {{$DriverTrip->passenger_Trip[$i]->DriverNote}}
                                <br>
                                  @endfor


                            </td>
                                   <td>{{$DriverTrip->pickupDate}}</td>
                                   <td>{{$DriverTrip->pickupTime}}</td>
                                  
                                  <td>@if (App::getlocale()=='en')
                                    {{json_decode($DriverTrip->pickup)->en}}
                                     @else
                                     {{json_decode($DriverTrip->pickup)->ar}}
                                     @endif
                                    </td>
                                   
                                    <td>@if (App::getlocale()=='en')
                                    {{json_decode($DriverTrip->dropoff)->en}}
                                     @else
                                     {{json_decode($DriverTrip->dropoff)->ar}}
                                     @endif
                                  </td>
                                   <td>{{$DriverTrip->price}}</td>
                                   
                                   <td class="d-flex justify-content-around">
                                   <a href="{{url("/driver/deleteTripForDriver/$DriverTrip->id")}}" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                   </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   
                   
                   

               


           </div>
       </div>
   </div>
</div>
@endsection
