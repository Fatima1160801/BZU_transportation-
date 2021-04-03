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

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Notification #1 from admin .</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Notification #2 from admin.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Notification #3 from admin.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('web/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('web/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('web/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('web/images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-5  ">
                    <div class="user-area dropdown float-right">
                        <div class="d-flex flex-row-reverse">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src=" {{asset('web/images/admin.jpg')}}" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu ">
                                <a class="nav-link" href="My-Profile.html"><i class="fa fa-user"></i> {{__('web.My profile')}}</a>

                                <a class="nav-link" href="My-Rate.html"><i class="fa fa-star-half-o"></i> {{__('web.My Rate')}}</a>
                                <a class="nav-link" href="Rewards.html"><i class="fa fa-star-half-o"></i> {{__('web.Rewards')}} </a>


                                <a class="nav-link" href="#"><i class="fa fa-power-off"></i> {{__('web.Logout')}}</a>
                            </div>

                            <a class="nav-link mr-1" href="Trips.html"><i class="fa ti-panel"></i> {{__('web.Trips')}}</a>
                            <a class="nav-link" href="#"><i class="fa fa-plus"></i> {{__('web.New Booking')}}</a>

                        </div>




                    </div>





                </div>


            </div>

        </header><!-- /header -->

@yield('main');

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
            <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
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

</body>

</html>

