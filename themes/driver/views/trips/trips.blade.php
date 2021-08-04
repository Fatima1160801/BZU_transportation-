@extends('layouts.layout')
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
                    <li><a href="index.html">{{__('web.Home')}}</a></li>
                    <li class="active">{{__('web.Trips')}}</li>
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
                        <h4>{{__('web.My Trips')}}</h4>
                    </div>
                    <div class="card-body">

                                <!--start buton -->
                                <div  class=" p-md-2   ">

                                    <div class="card-body">

                                        <!-- Centered Tabs -->

                                        <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{__('web.All trips')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('web.Upcoming trips')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('web.Completed trips')}}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"> {{__('web.Cancelled trips')}}</a>
                                            </li>
                                        </ul>


                                    </div>

                                <!--end butoon -->

                                <!--start Search your trips -->
                                <div class=" d-flex justify-content-center border">

                                    <div class="col-sm-12 " >

                                       

                                    </div>

                    </div>




                </div>
                <!-- /# card -->





            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->

</div><!-- .content -->


@endsection
