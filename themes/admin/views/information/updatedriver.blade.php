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
                    <li class="active">{{__('web.Manage Driver')}}</a></li>
                    <li><a href="#">{{__('web.update driver information')}}</a></li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light ">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header">{{__('web.driver Information for')}} {{$driver->name}} </div>
            <div class="card-body card-block">
                <form action="{{url('/admin/driverupdate')}}" method="POST"  >
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="driverid" value="{{$driver->id}}">
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Driver name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" placeholder="Driver name" class="form-control"  value="{{$driver->name}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Driver ID</label>
                            <div class="col-sm-10">
                                <input type="text" id="ssn" name="ssn"  class="form-control"  value="{{$driver->ssn}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                         <input type="text"  class="form-control" name="phone" id="Phone"   id="Phone"  value="{{$driver->phone}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email"  class="form-control"  value="{{$driver->email}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Bank Number</label>
                            <div class="col-sm-10">
                                <input type="text" id="banknumber" name="banknumber"  class="form-control" value="{{$driver->banknumber}}">
                          </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> License</label>
                            <div class="col-sm-10">
                                <input type="text" id="driverLicense" name="driverLicense"  class="form-control" value="{{$driver->driverLicense}}">
                            </div>
                          </div>
                    </div>

                </div>
                <div class="form-actions  d-flex justify-content-center  form-group">

                    <div>

                    <button class="btn btn-success btn-lg" type="submit">{{__('web.Edit')}}</button>
                </div>
                    <div>
                    <a href="{{url("/admin/informationDriver")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>
                   </div>
                </div>

            </div>
        </div>
    </div>






</form>

</div>





@endsection
