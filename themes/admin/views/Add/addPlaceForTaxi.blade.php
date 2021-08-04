@extends('layouts.layout')
@section('title') Add places @endsection
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
                    <li ><a href="#">{{__('web.Manage Trips')}}</a></li>
                    <li><a href="#">{{__('web.Taxi')}}</a></li>
                    <li><a href="#">{{__('web.Add New places')}}</a></li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header">{{__('web.Add a new pickup')}} </div>
            <div class="card-body card-block">
                <form action="{{url("/admin/insertpickupPlaces")}}" method="post" >
                    @csrf
                    <input type="hidden" id="cabTypee" name="cabTypee" value="taxi" class="form-control">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <input type="text" id="pickupE" name="pickupE" placeholder="{{__('web.Pickup in English')}} " class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <input type="text" id="pickupA" name="pickupA" placeholder="{{__('web.Pickup in Arabic')}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-actions  d-flex justify-content-center  form-group">

                        <div>
                            <button class="btn btn-success btn-sm" type="submit" class="btn btn-success btn-sm">{{__('web.Add')}}</button>
                        </div>

                    </div>
                    </form>
                    <div class="form-group">
                        <div class="input-group">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>

                                        </th>
                                        <th> </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $placespickup as $placepickup)
                                    <tr class="">
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td class=" ">
                                            @if (App::getlocale()=='en')
                                            {{json_decode($placepickup->place)->en}}
                                            @else
                                            {{json_decode($placepickup->place)->ar}}
                                            @endif
                                        </td>

                                        <td class="d-flex justify">

                                            <a href="{{url("/admin/placedelete/$placepickup->id")}}" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>

                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>



            </div>
        </div>
    </div>

     <div class="col-lg-6 ">
            <div class="card">
                <div class="card-header"> {{__('web.Add a new dropoff')}}</div>
                <div class="card-body card-block">

                    <form action="{{url("/admin/insertdropoffPlaces")}}" method="post" >
                        @csrf

                        <input type="hidden" id="cabType" name="cabType" value="taxi" class="form-control">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <input type="text" id="dropoffE" name="dropoffE" placeholder=" {{__('web.Dropoff in English')}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <input type="text" id="dropoffA" name="dropoffA" placeholder=" {{__('web.Dropoff in English')}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-actions  d-flex justify-content-center  form-group">

                        <div>
                            <button class="btn btn-success btn-sm" type="submit" class="btn btn-success btn-sm">{{__('web.Add')}}</button>
                        </div>

                    </div>
                    </form>
                    <div class="form-group">
                        <div class="input-group">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>

                                        </th>
                                        <th> </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $placesdropoff as $placedropoff)
                                    <tr class="">
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td class=" ">
                                            @if (App::getlocale()=='en')
                                            {{json_decode($placedropoff->place)->en}}
                                            @else
                                            {{json_decode($placedropoff->place)->ar}}
                                            @endif
                                        </td>

                                        <td class="d-flex justify">

                                            <a href="{{url("/admin/placedelete/$placedropoff->id")}}" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>

                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
     </div>

    </div>






</div>









</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
