@extends('driver.layout')
@section('title')Trips @endsection
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
                    <li class="active">Trips</li>
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
                        <h4>My Trips</h4>
                    </div>
                    <div class="card-body">

                                <!--start buton -->
                                <div  class=" p-md-2   ">

                                    <div class="card-body">

                                        <!-- Centered Tabs -->

                                        <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All trips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Upcoming trips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Completed trips </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cancelled trips</a>
                                            </li>
                                        </ul>


                                    </div>

                                <!--end butoon -->

                                <!--start Search your trips -->
                                <div class=" d-flex justify-content-center border">

                                    <div class="col-sm-12 " >

                                        <div class="well well-sm  d-flex justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="txtSearchTerm">Search your trips</label>
                                                    <div class="form-group">
                                                        <input id="txtSearchTerm" type="text" class="form-control" placeholder="Search term">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="selTimeframe">Placed</label>
                                                    <div class="form-group">
                                                    <select class="form-control" id="selTimeframe">
                                                        <option data-value="-1">None Selected</option>
                                                        <option data-value="0d">today (28 Dec 2020)</option>
                                                        <option data-value="1d">yesterday (27 Dec 2020)</option>
                                                        <option data-value="0m">this month (Dec 2020)</option>
                                                        <option data-value="1m">last month (Nov 2020)</option>
                                                        <option data-value="3m">last 3 month (Sep 2020 - Nov 2020)</option>
                                                        <option data-value="6m">last 6 month (Jun 2020 - Nov 2020)</option>
                                                        <option data-value="2020y">this year (2020)</option>
                                                        <option data-value="2019y">last year (2019)</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                <label for="selSortOrderframe">Order by</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="selSortOrderframe">
                                                    <option data-value="PickUpDate" selected>Pickup date</option>
                                                    <option data-value="BookingTime">Booking date</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-sm-1">
                                                <label for="selSortDirectionframe">Direction</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="selSortDirectionframe" style="font-family: fontAwesome;">
                                                    <option data-value="Asc" title="Ascending">&#xf0aa;</option>
                                                    <option data-value="Desc" title="Descending" selected>&#xf0ab;</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <label>&nbsp;&nbsp;&nbsp;</label>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-primary" ">Go</button>
                                                    </div>
                                                </div>
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

</div><!-- .content -->
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


</div><!-- /#right-panel -->

@endsection
