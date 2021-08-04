@extends('layouts.layout')
@section('title') Add Driver @endsection
@section('main')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{__('web.Dashboard')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">{{__('web.Dashboard')}}</a></li>
                    <li ><a class="active">{{__('web.Manage Trips')}}</a></li>
                    <li><a href="{{url('/admin/AddVanTrips')}}">{{__('web.Van')}}</a></li>
                </ol>
            </div>
        </div>

    </div>


<div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">

            <a href="{{url("/admin/addNewPlacesForVan")}}"  class="btn btn-success" >{{__('web.Add New places')}} <i class="fa fa-plus" aria-hidden="true"></i></a>

        </div>
  </div>
</div>

<div class="content mt-3">

    <!-- /# column -->
    <div class="col-lg-12">
       <div class="card">

           <div class="card-body">

               <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item">
                       <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <h4>{{__('web.waiting list')}}</h4> </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>{{__('web.Confirmed')}}</h4></a>
                   </li>

               </ul>
               <div class="tab-content pl-3 p-1" id="myTabContent">

                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('inc.requestTrip');
                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">
                           <thead>
                            <tr>
                                <th><a  href="{{url("/admin/AddVanTripsorderByNumOfPassenger")}}">{{__('web.Passengers')}} </a></th>
                                <th><a  href="{{url("/admin/AddVanTripsorderByDate")}}">{{__('web.Date')}} </a></th>
                                <th>{{__('web.Time')}} </th>
                                <th><a  href="{{url("/admin/AddVanTripsorderByPickup")}}">{{__('web.Pickup')}} </a></th>
                                <th><a  href="{{url("/admin/AddVanTripsorderBydropoff")}}">{{__('web.Dropoff')}} </a></th>
                                <th><a  href="{{url("admin/AddVanTripsorderByPrice")}}">{{__('web.Price')}} </a></th>
                                <th>{{__('web.Driver')}}</th>
                                <th>{{__('web.Actions')}}</th>

                            </tr>
                           </thead>
                           <tbody>
                            <tr>
                                <form action="/admin/insertVansTrip" method="post" class="form-horizontal">
                                    @csrf
                                    <td>0</td>
                                    <td>
                                            <input type="date" id="pickupDate" name="pickupDate"
                                            value="2021-07-22"
                                            min="2021" >

                                    </td>
                                    <td>

                                     <input id="pickupTime" type="time" name="pickupTime" value="13:30">

                                    </td>
                                    <td>

                                        <select  name="pickup" class=" bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                         @foreach ($placespickup as $placepickup )
                                         @if (App::getlocale()=='en')
                                         <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->en}}</option>
                                         @else
                                         <option value="{{$placepickup->place}}">{{json_decode($placepickup->place)->ar}}</option>
                                         @endif
                                          @endforeach
                                         </select>

                                   </td>
                                   <td>
                                    <select  name="dropoff" class=" bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">

                                        @foreach ($placesdropoff as $placedropoff )
                                        @if (App::getlocale()=='en')
                                        <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->en}}</option>
                                        @else
                                        <option value="{{$placedropoff->place}}">{{json_decode($placedropoff->place)->ar}}</option>
                                        @endif
                                         @endforeach



                                     </select>
                                   </td>
                                    <td>
                                        <div style="width: 70px">
                                        <input type="number" id="price" name="price"  class="input-sm form-control-sm form-control wed" min="0" >
                                        </div>
                                    </td>

                                  <td>
                                    </td>

                                    <td class="d-flex justify-content-around">
                                     <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                    </td>
                                </form>
                                </tr>
                               @foreach ($tripsVanW as $Btrip )
                               <tr>

                                   <td>{{$Btrip->passengerCounter}}</td>
                                   <td>{{$Btrip->pickupDate}}</td>
                                   <td>{{$Btrip->pickupTime}}</td>
                                   <td>
                                    @if (App::getlocale()=='en')
                                    {{json_decode($Btrip->pickup)->en}}
                                     @else
                                     {{json_decode($Btrip->pickup)->ar}}
                                     @endif
                                 </td>
                                 <td>
                                     @if (App::getlocale()=='en')
                                     {{json_decode($Btrip->dropoff)->en}}
                                      @else
                                      {{json_decode($Btrip->dropoff)->ar}}
                                      @endif

                                  </td>
                                   <td>{{$Btrip->price}}</td>
                                   <td></td>

                                   <td class="d-flex justify-content-around">
                                    <a href="{{url("/admin/updateTrips/$Btrip->id")}}"  class="edit" ><i class="fa  fa-pencil"></i></a>

                                    <a href="{{url("/admin/tripdelete/$Btrip->id")}}" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <a href="{{url("/admin/completTrips/$Btrip->id")}}" class=""><i class="fa fa-check-circle-o" aria-hidden="true"></i></a>

                                  </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
                   {{$tripsVanW->links('inc.paginator')}}
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           <thead>
                               <tr>

                                    <th> {{__('web.Passengers')}}</th>
                                    <th> {{__('web.Date')}}</th>
                                    <th> {{__('web.Time')}}</th>
                                    <th>{{__('web.Pickup')}} </th>
                                    <th>{{__('web.Dropoff')}}</th>
                                    <th> {{__('web.Price')}}</th>
                                    <th>{{__('web.Driver')}}</th>
                                    <th>{{__('web.Actions')}}</th>


                               </tr>
                           </thead>
                           <tbody>
                            @foreach ($tripsVanC as $Btrip )
                            <tr>

                                <td>{{$Btrip->passengerCounter}}</td>
                                <td>{{$Btrip->pickupDate}}</td>
                                <td>{{$Btrip->pickupTime}}</td>
                                <td>
                                    @if (App::getlocale()=='en')
                                    {{json_decode($Btrip->pickup)->en}}
                                     @else
                                     {{json_decode($Btrip->pickup)->ar}}
                                     @endif

                                 </td>
                                 <td>
                                     @if (App::getlocale()=='en')
                                     {{json_decode($Btrip->dropoff)->en}}
                                      @else
                                      {{json_decode($Btrip->dropoff)->ar}}
                                      @endif

                                  </td>
                                <td>{{$Btrip->price}}</td>
                                <td></td>

                                <td class="d-flex justify-content-around">
                                    <a href="{{url("/admin/updateTrips/$Btrip->id")}}" href="/admin/updateBusTrips/{id}" class="edit" ><i class="fa  fa-pencil"></i></a>

                                    <a href="{{url("/admin/tripdelete/$Btrip->id")}}" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <a href="{{url("/admin/waiteTrips/$Btrip->id")}}" class=""><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>

                                </td>
                            </tr>
                            @endforeach


                           </tbody>
                       </table>
                   </div>
                   {{$tripsVanC->links('inc.paginator')}}

               </div>


           </div>
       </div>
   </div>
</div>
@endsection
