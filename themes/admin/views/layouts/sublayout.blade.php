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
    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">



    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

   <!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">

            <a href="{{url('/admin/home')}}"><img alt="fatima"  style="height: 70px;padding-left:0px ;width:120px" src="{{asset('admin/images/bzu.png')}}"></a>

        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <h3 class="menu-title">{{__('web.Management')}}</h3><!-- /.menu-title -->

                    <li>
                        <a href="{{url("/subadmin/payment")}}"><i class="menu-icon fa fa-user"></i>{{__('web.Passengers Payments')}}</a>
                    </li>


                    <h3 class="menu-title"> {{__('web.Communicate')}} </h3><!-- /.menu-title -->


                    <li>
                        <a href="Notifications.html"><i class="menu-icon fa fa-bell-o"></i> {{__('web.Send Notifications')}} </a>
                    </li>
                    <li>
                        <a href="Messages.html"> <i class="menu-icon ti-email"></i> {{__('web.Send Messages')}} </a>
                    </li>




        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
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
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/4.jpg')}}"></span>
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

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('admin/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{url("/subadmin/profile")}}"><i class="fa fa-user"></i>{{__('web.My profile')}} </a>

                          
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
@yield('main')
<!-- footer -->
<div class="card-footer">
    <div class="panel-footer">
        <div class="col-sm-4 mt-3">
            <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
        </div>
        <div class="col-sm-5 "></div>
        <div class="col-sm-5 mt-3  d-flex justify-content-around ">

            @if(App::getLocale()=="ar")
            <a class="nav-link mr-1" href="{{url('lang/set/en')}}"><i class="fa fa-question-circle"></i> english</a>
            @else
            <a class="nav-link mr-1" href="{{url('lang/set/ar')}}"><i class="fa fa-question-circle"></i> arabic</a>
            @endif
            <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
            <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS +970599234522</a>


        </div>
    </div>
</div>
</div>

 <!-- footer end -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('admin/assets/js/widgets.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
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
