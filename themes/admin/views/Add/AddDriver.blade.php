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
                    <li><a href="{{url('/admin/AddDriver')}}">>{{__('web.Add New Driver')}}</a></li>
                </ol>
            </div>
        </div>
    </div>



<div class="content mt-3">

    @include('inc.requestTrip');

    <div class="d-flex bg-light">
    <div class="col-lg-6  ">
        <div class="card">
            <div class="card-header">Add a New Driver</div>
            <div class="card-body card-block">
                <form action="{{url("/admin/insertdriver")}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" id="name" name="name" placeholder="Driver name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text"  class="form-control" name="phone" id="Phone"  placeholder="Driver Phone" id="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                            <input type="text" id="ssn" name="ssn" placeholder="Driver ID" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="email" id="email" name="email" placeholder="{{__('web.Email')}}" class="form-control">
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
                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                            <input type="text" id="banknumber" name="banknumber" placeholder="Bank number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                            <input type="text" id="driverLicense" name="driverLicense" placeholder="driver license" class="form-control">
                        </div>
                    </div>
            </div>
        </div>
    </div>
     <div class="col-lg-6 ">
            <div class="card">
                <div class="card-header">Add Driver Car Information</div>
                <div class="card-body card-block">



                    <div class="form-group">
                        <div class="dataTables_length" id="bootstrap-data-table-export_length">
                            <label class="d-flex justify-content-start " id="type">cab Type <select name="cabType" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="Taxi">Taxi</option>
                                <option value="Van">Van</option>
                                <option value="Bus">Bus</option>

                             </select> </label>
                            </div>

                    </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></div>
                                <input type="text" id="cabNumber" name="cabNumber" placeholder=" cab number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></div>
                                <input type="number"  class="form-control" name="seatNum"  placeholder="Seat number " id="seatNum">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                                <input type="text" id="cabLicense" name="cabLicense" placeholder="license number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                                <input type="text" id="insurance" name="insurance" placeholder="Insurance" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <input type="text" id="machineNumber" name="machineNumber" placeholder=" Machine Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group h-50">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group h-50">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group h-50">

                            </div>
                        </div>

                </div>
            </div>
     </div>

    </div>
    <div class="form-actions  d-flex justify-content-center  form-group">

        <div>
        <button class="btn btn-success btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Add')}}</button></div>
        <div>
        <a href="{{url("/admin/informationDriver")}}" class="btn btn-danger btn-lg" type="submit" class="btn btn-success btn-sm">{{__('web.Cancel')}}</a>
    </div>
    </div>


</form>

</div>









</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
