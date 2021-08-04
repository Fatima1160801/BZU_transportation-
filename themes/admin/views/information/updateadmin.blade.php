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
                    <li class="active">{{__('web.Manage Admin')}}</a></li>
                    <li><a href="#">{{__('web.update Admin information')}}</a></li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light ">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header">{{__('web.Admin Information for')}} {{$admin->name}} </div>
            <div class="card-body card-block">
                <form action="{{url('/admin/adminupdate')}}" method="POST"  >
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="Adminid" value="{{$admin->id}}">

                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Admin name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name"  class="form-control"  value="{{$admin->name}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Admin id </label>
                            <div class="col-sm-10">
                         <input type="text"  class="form-control" name="ssn" id="ssn"    value="{{$admin->ssn}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                         <input type="text"  class="form-control" name="phone" id="Phone"    value="{{$admin->phone}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email"  class="form-control"  value="{{$admin->email}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Bank Number</label>
                            <div class="col-sm-10">
                                <input type="text" id="bankNum" name="bankNum"  class="form-control"  value="{{$admin->bankNum}}">
                          </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> salray</label>
                            <div class="col-sm-10">
                                <input type="text" id="salray" name="salray"  class="form-control" value="{{$admin->salray}}">
                            </div>
                          </div>
                    </div>

                </div>
                <div class="form-actions  d-flex justify-content-center  form-group">

                    <div>

                    <button class="btn btn-success btn-lg" type="submit">{{__('web.Edit')}}</button>
                </div>
                    <div>
                    <a href="{{url("/admin/informationAdmin")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>
                   </div>
                </div>

            </div>
        </div>
    </div>






</form>

</div>



@endsection
