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
                    <li class="active">{{__('web.My Rate')}}</li>
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
                    <div class="card-header" >
                        <h4>Welcome Driver</h4>
                    </div>
                    <div class="card-body" style="height: 200px">
                        {{ __('You are logged in!') }}


                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->





        </div> <!-- .row -->
    </div><!-- .animated -->



@endsection
