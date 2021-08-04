@extends('layouts.layout')
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
                    <li><a href="index.html">{{__('web.Home')}} </a></li>
                    <li class="active">{{__('web.My profile')}} </li>
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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{__('web.Passenger profile')}} </a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{__('web.BZU card')}} </a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">{{__('web.Favorite')}} </a>



                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <div class="col-lg-6">
                                        <div class="card mt-4">
                                            <div class="card-header">
                                                <h4>{{__('web.Change Passenger Detalies')}} </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body card-block">
                                                    @include('web.inc.requestTrip')
                                                    <form action="{{url('user/profile-information')}}" method="POST" >
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                <input type="text" id="username" name="name" value="{{old('name') ?? Auth::user()->name}}" placeholder="{{__('web.Username')}}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                <input type="email" id="email" name="email" value="{{old('email') ?? Auth::user()->email}}" placeholder="{{__('web.Email')}}" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                                <input type="text" id="Phone" name="phone" value="{{old('phone') ?? Auth::user()->phone}}" placeholder="{{__('web.Phone')}}" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm"> {{__('web.change Detalies')}} </button></div>
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
                                                <h4> {{__('web.change Password')}} </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body card-block">
                                                    @include('web.inc.requestTrip')
                                                    <form action="{{url('user/password')}}" method="POST" >
                                                        @method('PUT')


                                                        @csrf
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">{{__('web.Current password')}} </label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="Current password" name="current_password"  @error('current_password','updatePassword') is-invalid @enderror class="form-control"></div>
                                                        </div>
                                                        @error('current_password','updatePassword')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>

                                                        @enderror
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">{{__('web.New password')}} </label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="New password" name="password" @error('current_password','updatePassword') is-invalid @enderror class="form-control"></div>
                                                        </div>
                                                        @error('current_password','updatePassword')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>

                                                        @enderror
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">{{__('web.Confirm new password')}} </label></div>
                                                            <div class="col-12 col-md-9"><input type="password" id="Confirm new password" name="ConfirmNewPassword"  @error('current_password','updatePassword') is-invalid @enderror  class="form-control"></div>
                                                        </div>
                                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm  ">{{__('web.change Password')}} </button></div>

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
                                                <strong class="card-title">{{__('web.BZU card')}} </strong>
                                            </div>
                                            <div class="card-body">
                                                <!-- Credit Card -->
                                                <div id="pay-invoice">
                                                    <div class="card-body">


                                                        <form action="" method="post" novalidate="novalidate">

                                                            <div class="form-group">
                                                                <label for="cc-payment" class="control-label mb-1">{{__('web.Enter Your Card Number')}} </label>
                                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true"  >
                                                            </div>


                                                                <div>
                                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                                        <span id="payment-button-amount">{{__('web.submit')}} </span>
                                                                        <span id="payment-button-sending" style="display:none;">{{__('web.Sending')}}</span>
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
                                    <button type="button" class="btn btn-success mt-5"><i class="fa fa-heart-o"></i>&nbsp; {{__('web.Add Favorite')}} </button>
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
