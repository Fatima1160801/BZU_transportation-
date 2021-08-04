@extends('layouts.layout')
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
                    <li><a href="index.html">{{__('web.Home')}}</a></li>
                    <li class="active">{{__('web.My profile')}}</li>
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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{__('web.Driver Profile')}}</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{__('web.Credit Cards')}}</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="col-lg-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>{{__('web.Change Driver Detalies')}}</h4>
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
                        <h4>{{__('web.change Password')}} </h4>
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
                                                <strong class="card-title">Credit Card</strong>
                                            </div>
                                            <div class="card-body">
                                                <!-- Credit Card -->
                                                <div id="pay-invoice">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <h3 class="text-center">Pay Invoice</h3>
                                                        </div>
                                                        <hr>
                                                        <form action="" method="post" novalidate="novalidate">
                                                            <div class="form-group text-center">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                                            </div>
                                                                <div class="form-group has-success">
                                                                    <label for="cc-name" class="control-label mb-1">Name on card</label>
                                                                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cc-number" class="control-label mb-1">Card number</label>
                                                                    <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="form-group">
                                                                            <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                                            <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                                        <div class="input-group">
                                                                            <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                                                            <div class="input-group-addon">
                                                                                <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code" data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>" data-trigger="hover"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                                        <span id="payment-button-amount">Pay</span>
                                                                        <span id="payment-button-sending" style="display:none;">Sending… </span>
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

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->


@endsection
