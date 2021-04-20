@extends('admin.layout')
@section('title') Rush Hours
@endsection
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
                    <li><a href="#"> {{__('web.Analytics')}} </a></li>
                    <li class="active">{{__('web.Rush Hours')}} </li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

</div>




</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->


@endsection
