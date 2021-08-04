@extends('layouts.layout')
@section('title')Home @endsection
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
                    <li class="active">{{__('web.Dashboard')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="content mt-3">

    </div>



    <div class="col-xl-12 col-lg-12 ">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <a href="{{url('/admin/home')}}"><img alt="fatima"  style="height: 70px;padding-left:50px ;width:140px" src="{{asset('admin/images/bzu.png')}}"></a>

                </div>
            </div>
        </div>
    </div>


    

  

</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
