@extends('layouts.layout')
@section('title') Extra @endsection
@section('title') Extra @endsection
@section('main')

 <!-- Header-->

 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{__('web.Dashboard')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">{{__('web.Dashboard')}}</a></li>
                    <li><a href="#">{{__('web.Analytics')}}</a></li>
                    <li class="active">{{__('web.Extra')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="content mt-3">




   

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-user text-primary border-primary"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Passenger')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: {{$numOfPassenger}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-user text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Driver')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: {{$numOfdriver}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-car text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Bus')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: {{$numOfcabBus}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-car text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Van')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: {{$numOfcabVan}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-car text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Taxi')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: {{$numOfcabTaxi}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






</div> <!-- .content -->

<!-- Right Panel -->

@endsection
