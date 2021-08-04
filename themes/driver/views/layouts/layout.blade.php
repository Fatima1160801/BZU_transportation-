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
    <title> Birzeit Transportation @yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('driver/vendors/bootstrap/dist/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('driver/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('driver/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('driver/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('driver/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('driver/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href=" {{asset('driver/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
                                <span class="photo media-left"><img alt="avatar" src="{{asset('driver/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('driver/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('driver/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('driver/images/avatar/4.jpg')}}"></span>
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
                                <img class="user-avatar rounded-circle" src=" {{asset('driver/images/admin.jpg')}}" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu ">
                                <a class="nav-link" href="{{url('driver/Profile/$id')}}"><i class="fa fa-user"></i> {{__('web.My profile')}}</a>

                                <a class="nav-link" href="{{url('driver/Rate/$id')}}"><i class="fa fa-star-half-o"></i> {{__('web.My Rate')}} </a>


                            </div>

                            <a class="nav-link mr-1" href="{{url('driver/Trips/$id')}}"><i class="fa ti-panel"></i> {{__('web.Trips')}}</a>
                            <a class="nav-link" href="{{url('driver/Earning/$id')}}"><i class="fa ti-money"></i> {{__('web.Earning')}}</a>
                            <a class="nav-link" href="{{url('driver/RequestTrips')}}"><i class="fa fa-bell"></i> {{__('web.Requests')}}</a>
                            <a class="nav-link" href="{{url('/driver/button/busy')}}"><i class="fa ti-reload"> {{__('web.Busy')}}</i></a>






                        </div>


                    </div>

                </div>

            </div>


        </header><!-- /header -->
        <?php $r=Auth::user()->busy;?>
        <div style="background-color: white; text-align:center">
            @if($r==1)
        <div class="alert alert-warning" role="alert">
            
            {{__('web.Not Busy')}}
        </div>
        @else
        <div class="alert alert-secondary" role="alert">
            
            {{__('web.Busy')}}
        </div>
        @endif
    </div>

    <?php $d=Auth::user()->available;?>
    <div style="background-color: white; text-align:center">
        @if($d==0)
    <div class="alert alert-danger" role="alert">
        {{__('web.Not Available')}}
    </div>
    @else
    <div class="alert alert-success" role="alert">
        {{__('web.Available')}}
    </div>
    @endif
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

            <div class="d-flex">
            @if($d==1)
            <a class="nav-link" href="{{url('/driver/button/available')}}"><i class="fa ti-unlock"> {{__('web.Available')}}</i></a>
            @else
            <a class="nav-link" href="{{url('/driver/button/available')}}"><i class="fa ti-lock"> {{__('web.Not Available')}}</i></a>
            @endif

            <form method="POST" action="{{url('logout')}}" id="logout-form" style="">
                @csrf
                <input class="btn btn-outline-warning" style="border-radius: 8px;" type="submit" value="{{__('web.Logout')}}" id="logout-link"><i class="fas fa-sign-out-alt"></i>

            </form>

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
</div><!-- .content -->
</div><!-- /#right-panel -->






<script src="{{asset('driver/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('driver/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('driver/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('driver/assets/js/main.js')}}"></script>


<script src="{{asset('driver/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('driver/assets/js/dashboard.js')}}"></script>
<script src="{{asset('driver/assets/js/widgets.js')}}"></script>
<script src="{{asset('driver/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('driver/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('driver/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
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
</script>

</body>

</html>

