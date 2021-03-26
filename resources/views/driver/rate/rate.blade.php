@extends('driver.layout')
@section('title')Earning @endsection
@section('main')
 <!-- Header-->

 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <a  href="index.html"> <h1>BZU Transportation</h1></a>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Rate</li>
                </ol>
            </div>
        </div>
    </div>
</div>


 <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">




            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>uu</h4>
                    </div>
                    <div class="card-body">


                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->





        </div> <!-- .row -->
    </div><!-- .animated -->
    <!-- start footer -->
    <div class="card-footer">
        <div class="panel-footer">
            <div class="col-sm-3 mt-3">
                <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
            </div>
            <div class="col-sm-5 "></div>
            <div class="col-sm-4 mt-3  d-flex justify-content-around ">

                    <div class="form-group d-flex  ">
                        <select class="form-control " id="PickUp_SelectedCity" name="PickUp.SelectedCity">
                        <option selected="selected" value="53.479874/-2.239151">english </option>
                        <option value="51.507033/-0.116043">arabic</option>
                        </select>
                </div>

                <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
                <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS</a>
            </div>
        </div>
    </div>
    <!-- end footer -->
</div><!-- .content -->


</div><!-- /#right-panel -->



@endsection
