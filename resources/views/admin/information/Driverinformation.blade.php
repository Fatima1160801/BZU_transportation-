@extends('admin.layout')
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
                    <li><a href="#">{{__('web.Add Driver')}} </a></li>
                    <li class="active">{{__('web.Driver Information')}} </li>
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
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i><span>Add New Employee{{__('web.')}} </span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"> <i class="fa fa-trash-o" aria-hidden="true"></i><span>Delete{{__('web.')}} </span></a>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                    <tr>

                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->ssn}}</td>
                        <td>{{$driver->banknumber}}</td>
                        <td>{{$driver->phone}}</td>
                        <td>{{$driver->license}}</td>
                        <td>{{$driver->created_at}}</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text"> {{__('web.Showing')}} <b>5</b> out of <b>25</b>  {{__('web.entries')}} </div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"> {{__('web.Previous')}}  </a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">{{__('web.Next')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title"> {{__('web.Add Employee')}} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('web.Name')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Email')}} </label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Address')}} </label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Phone')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">{{__('web.Edit Employee')}} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('web.Name')}} </label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Email')}} </label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Address')}} </label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>{{__('web.Phone')}} </label>
                            <input type="text" class="form-control" required>
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
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">{{__('web.Delete Employee')}} </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>{{__('web.Are you sure you want to delete these Records?')}} </p>
                        <p class="text-warning"><small>{{__('web.This action cannot be undone.')}} </small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
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