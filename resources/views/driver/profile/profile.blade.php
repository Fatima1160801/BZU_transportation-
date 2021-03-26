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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Driver Profile</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Credit Cards</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="col-lg-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Change Driver Detalies</h4>
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
                                                                        <span id="payment-button-amount">Pay $100.00</span>
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

                            </div>

                        </div>
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
