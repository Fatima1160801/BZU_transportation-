<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> BZU transportaion @yield('title') </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href=" {{asset('web/vendors/bootstrap/dist/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('web/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{asset('web/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('web/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('web/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/mystyle.css')}}">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('styles')

</head>

<body>




    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7  ">

                    <div class="header-left">
                        <div>
                            <img alt="avatar" style="width:150px ; height:40px" src="{{asset('web/images/BZU.PNG')}}">
                        </div>



                    </div>
                </div>


                <div class="col-sm-5  ">
                    <div class="user-area dropdown float-right">
                        <div class="d-flex flex-row-reverse">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Register
                            </a>

                            <div class="user-menu dropdown-menu ">

                                <a class="nav-link" href="{{url("passenger/My-Profile/5")}}"><i class="fa fa-user"></i> {{__('web.Register for Passenger')}}</a>
                                <a class="nav-link" href="{{url('passenger/My-Rate/5')}}"><i class="fa fa-star-half-o"></i> {{__('web.Register for Driver')}}</a>
                            </div>
                            <div style="width: 15px"> </div>

                            <a class="dropdown-toggle" data-toggle="dropdown" href="{{url("login")}}"> {{__('web.login')}}</a>
                            

                        </div>

                    </div>

                </div>


            </div>

        </header><!-- /header -->
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
                            <li><a href="index.html">{{__('web.Home')}}</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" style="height: 150px;">

        </div>

@yield('main')
 <!-- footer -->
<div class="card-footer">
    <div class="panel-footer">
        <div class="col-sm-3 mt-3">
            <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
        </div>




        <div class="col-sm-5 "></div>
        <div class="col-sm-4 mt-3  d-flex justify-content-around ">


            @if(App::getLocale()=="ar")
            <a class="nav-link mr-1" href="{{url('lang/set/en')}}"><i class="fa fa-question-circle"></i> english</a>
            @else
            <a class="nav-link mr-1" href="{{url('lang/set/ar')}}"><i class="fa fa-question-circle"></i> arabic</a>
            @endif
            <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> {{__('web.HELP')}}</a>
            <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS</a>


        </div>
    </div>
</div>

 <!-- footer end -->
<!-- .content -->


</div><!-- /#right-panel -->



<script src="{{asset('web/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('web/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('web/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/assets/js/main.js')}}"></script>


<script src="{{asset('web/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/js/dashboard.js')}}"></script>
<script src="{{asset('web/assets/js/widgets.js')}}"></script>
<script src="{{asset('web/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('web/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('web/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
    @yield('scripts')
</script>
<script>
   $('#logout-link').click(function(e){
       e.preventDefault();
       $('#logout-form').submit();
   });
</script>

    <script src="{{asset('web/assets/js/googlemap.js')}}" defer ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['map_apikey']}}&callback=initMap" async defer></script>


</body>

</html>

