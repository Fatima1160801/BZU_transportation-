@extends('layouts.layout')
@section('title') Admin update @endsection
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
                    <li class="active">{{__('web.Manage Trips')}}</a></li>
                    <li><a href="#">{{__('web.Update Trip information')}}</a></li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light ">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header">{{__('web.Trip Information')}} </div>
            <div class="card-body card-block">
                <form action="{{url('/admin/updateTrips')}}" method="POST"  >
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="tripid" value="{{$trip->id}}">
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label"> pickup Date</label>
                            <div class="col-sm-10">
                                <input type="date" id="pickupDate" name="pickupDate"
                                value="{{$trip->pickupDate}}"
                                min="2021-01-01" >
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">pickup Time </label>
                            <div class="col-sm-10">
                                <input id="pickupTime" type="time" name="pickupTime" value="{{$trip->pickupTime}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">pickup</label>
                            <div class="col-sm-10">
                                <input type="text" id="pickup" name="pickup" value="">
                            </div>
                          </div>
                          @if (App::getlocale()=='en')
                          {{json_decode($trip->pickup)->en}}
                           @else
                           {{json_decode($trip->pickup)->ar}}
                           @endif

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">dropoff</label>
                            <div class="col-sm-10">
                                <input type="text" id="dropoff" name="dropoff" value="">
                            </div>
                          </div>

                          @if (App::getlocale()=='en')
                          {{json_decode($trip->dropoff)->en}}
                           @else
                           {{json_decode($trip->dropoff)->ar}}
                           @endif


                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">price </label>
                            <div class="col-sm-10" style="width: 70px">
                                <input type="number" id="price" name="price"  class="input-sm form-control-sm form-control wed" min="0" value="{{$trip->price}}" >
                          </div>
                          </div>

                    </div>

                </div>
                <div class="form-actions  d-flex justify-content-center  form-group">

                    <div>

                    <button class="btn btn-success btn-lg" type="submit">{{__('web.Edit')}}</button>
                </div>
                    <div>
                        @if ($trip->cabType == "bus")
                        <a href="{{url("/admin/AddBusTrips")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>

                        @elseif ($trip->cabType == "van")
                        <a href="{{url("/admin/AddVanTrips")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>

                        @elseif ($trip->cabType == "taxi")
                        <a href="{{url("/admin/AddTaxiTrips")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>

                        @endif

                   </div>
                </div>

            </div>
        </div>
    </div>






</form>

</div>



@endsection
