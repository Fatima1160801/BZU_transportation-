@extends('web.layout')
@section('title') My Profile @endsection
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
                    <li class="active">My Profile</li>
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

                    <div class="card-body">

                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Passenger Profile</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">BZU Cards</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Favourite</a>



                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <div class="col-lg-6">
                                        <div class="card mt-4">
                                            <div class="card-header">
                                                <h4>Change Passenger Detalies</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body card-block">
                                                    <form action="" method="post" class="">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                <input type="text" id="Phone" name="Phone" placeholder="Phone" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Change Detalies</button></div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /# card -->
                                    </div>
                                    <!-- /# column -->

                                    <div class="col-lg-6">
                                        <div class="card mt-4">
                                            <div class="card-header ">
                                                <h4>Change Password</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body card-block">
                                                    <form action="" method="post" class="">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Current password</label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="Current password" name="Current password"  class="form-control"></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">New password</label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="New password" name="New password"  class="form-control"></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Confirm new password</label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="Confirm new password" name="Confirm new password"  class="form-control"></div>
                                                        </div>
                                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm  ">Change Password</button></div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /# card -->
                                    </div>
                                    <!-- /# column -->

                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card mt-3 ">
                                            <div class="card-header">
                                                <strong class="card-title">BZU Card </strong>
                                            </div>
                                            <div class="card-body">
                                                <!-- Credit Card -->
                                                <div id="pay-invoice">
                                                    <div class="card-body">


                                                        <form action="" method="post" novalidate="novalidate">

                                                            <div class="form-group">
                                                                <label for="cc-payment" class="control-label mb-1">Enter Your Card Number</label>
                                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true"  >
                                                            </div>


                                                                <div>
                                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                                        <span id="payment-button-amount">submit</span>
                                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                                    </button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- .card -->

                                    </div>
                                    <!--/.col-->
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <button type="button" class="btn btn-success mt-5"><i class="fa fa-heart-o"></i>&nbsp; Add Favourite</button>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->
     <!-- footer start  -->
    
@endsection
