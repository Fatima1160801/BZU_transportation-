@extends('admin.layout')
@section('title') Add Driver @endsection
@section('main')

</header><!-- /header -->
<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Mange Driver</a></li>
                    <li class="active">Information</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

</div>


<div class="col-lg-6  ">
    <div class="card">
        <div class="card-header">Add a New Driver</div>
        <div class="card-body card-block">
            <form action="" method="post" class="">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" id="username" name="username" placeholder="Driver name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                        <input type="text"  class="form-control" name="Phone"  placeholder="Driver Phone" id="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                        <input type="text" id="ssn" name="ssn" placeholder="Driver ssn" class="form-control">
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
                        <input type="text" id="banknum" name="Banknumber" placeholder="Bank number" class="form-control">
                    </div>
                </div>

                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Add</button></div>
            </form>
        </div>
    </div>
</div>

 <div class="col-lg-6 ">
        <div class="card">
            <div class="card-header">Add Driver Car Information</div>
            <div class="card-body card-block">
            <form action="" method="post" class="">


                <div class="form-group">
                    <div class="dataTables_length" id="bootstrap-data-table-export_length">
                        <label class="d-flex justify-content-start">cab Type <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="Taxi">Taxi</option>
                            <option value="Van">Van</option>
                            <option value="Bus">Bus</option>

                         </select> </label>
                        </div>

                </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></div>
                            <input type="text" id="cabnumber" name="cabnumber" placeholder=" cab number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></div>
                            <input type="number"  class="form-control" name="seatnumber"  placeholder="Seat number " id="seatnumber">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                            <input type="text" id="license" name="license" placeholder="license number" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                            <input type="number" id="insurance" name="insurance" placeholder="Insurance" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                            <input type="number" id="machineNumber" name="machineNumber" placeholder=" Machine Number" class="form-control">
                        </div>
                    </div>

                    <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Add</button></div>
                </form>
            </div>
        </div>
 </div>







</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
