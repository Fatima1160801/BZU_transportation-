@extends('layouts.layout')
@section('title')
@endsection
@section('main')
<!-- Header-->
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
                    <li><a href="#">{{__('web.Manage Admin')}}</a></li>
                    <li class="active"><a href="{{url("/admin/AddAdmin")}}">{{__('web.Add New Admin')}}</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3 d-flex justify-content-center">
    <div class="col-lg-6 ">
        <div class="card ">
            <div class="card-header"><h3>{{__('web.Add a New Admin')}}</h3></div>
            <div class="card-body card-block">
                @include('inc.requestTrip');
                <form action="{{url('/admin/insertadmin')}}" method="post" class="">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" id="name" name="name" placeholder="Admin name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="email" id="email" name="email" placeholder="Admin Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text"  class="form-control" name="phone" id="phone" placeholder="Admin Phone" id="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                            <input type="text" id="ssn" name="ssn" placeholder="Admin ID" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            <input type="password" id="password" name="password_confirmation" placeholder="Password confirmation" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                            <input type="text" id="bankNum" name="bankNum" placeholder="Bank number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="dataTables_length" id="bootstrap-data-table-export_length">
                            <label class="d-flex justify-content-start">Admin Type</label'12>
                                 <select  id="role_id" name="role_id" class=" bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach

                             </select>
                            </div>

                    </div>

                    <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm">{{__('web.Add')}}</button>
                    <a href="{{url("/admin/informationAdmin")}}" class="btn btn-danger btn-sm" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>

                   </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
