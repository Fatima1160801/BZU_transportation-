@extends('layouts.layout')
@section('title') Track Earning @endsection
@section('main')
  <!-- Header-->

  <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{__('web.Dashboard')}} </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#"> {{__('web.Dashboard')}} </a></li>
                    <li><a href="#"> {{__('web.Analytics')}} </a></li>
                    <li class="active"> {{__('web.Track earnings')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"> {{__('web.Earnings')}} </h4>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3"></h4>
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

    <div class="col-xl-3 col-lg-6 ">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">{{__('web.Total Profit')}} </div>
                        <div class="stat-digit">1,012</div>
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
                        <i class="ti-stats-up text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">{{__('web.Daily earnings')}}</div>
                            <div class="stat-text">{{__('web.Total')}}: $76,58</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





        </div>

    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->



@endsection
