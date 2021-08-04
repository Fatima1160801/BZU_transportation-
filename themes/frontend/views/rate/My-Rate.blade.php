@extends('layouts.layout')
@section('title') {{__('web.My Rate')}} @endsection
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
                    <li class="active">{{__('web.My Rate')}} </li>

                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

</div>
@endsection
