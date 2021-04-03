@extends('web.layout')
@section('title') Rewords @endsection
@section('main')
 <!-- Header-->

 <div class="breadcrumbs ">
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
                    <li class="active">New Booking</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3 ">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-12  ">
                <div class=" col-lg-12 bg-flat-color-3 d-flex justify-content-around text-center">

                 <div class="col-lg-3 mt-1 mb-1 ">

                     <p>Route and journey details</p>

                 </div>
                 <div class="col-lg-3 bg-light  mt-1 mb-1 ">
                     <p>confirm</p>

                 </div>
                 <div class="col-lg-3  mt-1 mb-1 ">
                     <p>Booked</p>

                 </div>




                </div>
             </div>
            <div class="col-lg-1 mt-3"></div>



            <div class="col-lg-3 mt-3">
                <div class="card">
                    <div class="card-header"><strong>Your Journey</strong></div>
                    <div class="card-body card-block">
                                <div class="text-pickup mb-5">
                                    <label class="Pickup"> <i class="fa fa-map-marker mr-1"></i>Pickup Location</label>
                                </div>
                                <div class="text-pickup mb-5">
                                    <label class="Pickup"> <i class="fa fa-map-marker mr-1"></i> Drop off </label>
                                </div>

                                <div class="mb-5">
                                    <label> <i class="fa fa-clock-o mr-1"></i>pickup time </label><br>
                                </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header"><strong>Journey Details</strong></div>
                    <div class="card-body card-block">
                        <div class="Price">
                            <div class="alert alert-primary alertsize" role="alert">
                                Price
                                <label class="malabel float-right">(estimated) £2.90</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                Gratuity
                                <label class="malabel float-right">£0.00</label>
                              </div>
                              <div class="alert alert-primary alertsize" role="alert">
                                 Total
                                 <label class="malabel float-right">£2.90</label>
                              </div>
                              <div class="GetQuote mt-3 text-right">
                               <a href="newbooking-booked.html"><button type="button" class="btn btn-outline-warning">Get Quote<i class="fa ti-angle-double-right ml-1"></i>&nbsp; </button></a>

                              </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<div class="height"></div>
<!-- footer start  -->


@endsection
