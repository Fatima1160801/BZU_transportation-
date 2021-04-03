@extends('admin.layout')
@section('title')
@endsection
@section('main')
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
<div class="col-lg-6 ">
    <div class="card">
        <div class="card-header">Add a New Admin</div>
        <div class="card-body card-block">
            <form action="" method="post" class="">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" id="Adminname" name="Adminname" placeholder="Admin name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                        <input type="text"  class="form-control" name="Phone"  placeholder="Admin Phone" id="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                        <input type="text" id="ssn" name="ssn" placeholder="Admin ssn" class="form-control">
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
                <div class="form-group">
                    <div class="dataTables_length" id="bootstrap-data-table-export_length">
                        <label class="d-flex justify-content-start">Admin Type <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="Taxi">Super Admin</option>
                            <option value="Van">sub Admin</option>


                         </select> </label>
                        </div>

                </div>
                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Add</button></div>
            </form>
        </div>
    </div>
</div>
@endsection


