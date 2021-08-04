@extends('layouts.layout')
@section('title')
Driver Information
@endsection
@section('main')

 <!-- Header-->

 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1> {{__('web.Dashboard')}} </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">{{__('web.Dashboard')}} </a></li>
                    <li><a href="#">{{__('web.Manage Driver')}} </a></li>
                    <li class="active"><a href="{{url('/admin/informationDriver')}}">{{__('web.Driver Information')}} </a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>{{__('web.Manage')}}  <b>{{__('web.Driver')}} </b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{url('/admin/AddDriver')}}" class="btn btn-success" ><i class="fa fa-plus" aria-hidden="true"></i> {{__('web.Add New driver')}} </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>{{__('web.Name')}} </th>
                        <th>{{__('web.ID number')}} </th>
                        <th>{{__('web.Bank Number')}} </th>
                        <th>{{__('web.Phone')}} </th>
                        <th>{{__('web.License')}} </th>
                        <th>{{__('web.created_at')}} </th>
                        <th>{{__('web.Cab Details')}} </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                    <tr>

                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->ssn}}</td>
                        <td>{{$driver->banknumber}}</td>
                        <td>{{$driver->phone}}</td>
                        <td>{{$driver->driverlicense}}</td>
                        <td>{{$driver->created_at}} </td>




                        <td>

                            <a   class="btn cab-btn" href="{{url("/admin/informationCab/$driver->id")}}"><i class="fa ti-car" aria-hidden="true"></i> </a>

                        </td>
                        <td>
                            <a   class="btn edit drive-btn" href="{{url("/admin/driverupdate/$driver->id")}}"><i class="fa fa-pencil" aria-hidden="true"></i> </a>

                        </td>
                        <td>
                            <a href="{{url("/admin/driverdelete/$driver->id")}}" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
            {{$drivers->links('inc.paginator')}}
        </div>
    </div>


    <!-- Edit Modal HTML -->
    <div id="editDriverModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{url("/admin/driverupdate")}}">
                    @csrf

                    <div class="modal-header">
                        <h4 class="modal-title">{{__('web.Edit Employee')}} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">

                            <input type="text" name="id" id ="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Name')}} </label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Email')}} </label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>{{__('web.Phone')}} </label>
                            <input type="text" name="phone"  class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- cab Modal HTML -->
    <div id="editCabModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form >
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">{{__('web.Cab Details')}} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('web.Cab Type')}} </label>
                            <select name="cabType" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="Taxi">Taxi</option>
                                <option value="Van">Van</option>
                                <option value="Bus">Bus</option>

                             </select>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Cab Number')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Seat Number')}} </label>
                            <input type="Number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.license')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Machine Number')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>



 <!-- .content -->
<!-- /#right-panel -->

<!-- Right Panel -->

@endsection
