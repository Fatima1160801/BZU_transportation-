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
                    <li>{{__('web.Dashboard')}}</li>
                    <li>{{__('web.Manage Driver')}}</li>
                    <li class="active" >{{__('web.Cab Information')}}</li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header"><h3>{{__('web.Cab Information for')}} {{$driver->name}}</h3></div>
            <div class="card-body card-block">
                <form action="{{url('/admin/editCabInformationDriver')}}" method="POST" >
                    @csrf
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Cab Type</label>
                        <div class="col-sm-10">
                        <select  name="cabType" class=" bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">

                            <option value="{{$driver->cabs->cabType}}">{{$driver->cabType}}</option>
                            <option value="taxi">Taxi</option>
                            <option value="van">Van</option>
                            <option value="bus">Bus</option>

                         </select>
                        </div>
                      </div>
                      <input class="form-control" type="hidden" name="driverid" value="{{$driver->id}}">
                      <input class="form-control" type="hidden" name="cabid" value="{{$driver->cabs->id}}">

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Cab Number</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="Number" name="cabNumber" value="{{$driver->cabs->cabNumber}}">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Seat Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Number" name="seatNum" value="{{$driver->cabs->seatNum}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">License</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="license" value="{{$driver->cabs->license}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Insurance</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="insurance" value="{{$driver->cabs->insurance}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Machine Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="machineNumber" value="{{$driver->cabs->machineNumber}}">
                        </div>
                      </div>


            </div>
        </div>
    </div>



    </div>
    <div class="form-actions  d-flex justify-content-center  form-group">

        <div>

            <button type="submit" class="btn btn-success btn-lg">{{__('web.Edit')}}</button>


        </div>
        <div>
        <a href="{{url("/admin/informationDriver")}}" class="btn btn-danger btn-lg" >{{__('web.Cancel')}}</a>
    </div>
    </div>


</form>

</div>


@endsection
