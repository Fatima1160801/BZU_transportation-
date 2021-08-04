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
                        <a href="{{url('/home')}}"><img alt="fatima"  style="height: 55px;padding-left:40px ;width:150px" src="{{asset('web/images/bzu.png')}}"></a>

                    </div>
                </div>


                <div class="col-sm-5  ">
                    <div class="user-area dropdown float-right">
                        <div class="d-flex flex-row-reverse">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src=" {{asset('web/images/admin.jpg')}}" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu ">

                                <a class="nav-link" href="{{url("passenger/My-Profile/5")}}"><i class="fa fa-user"></i> {{__('web.My profile')}}</a>
                                <a class="nav-link" href="{{url('passenger/My-Rate/5')}}"><i class="fa fa-star-half-o"></i> {{__('web.My Rate')}}</a>
                                <a class="nav-link" href="{{url('passenger/Rewards/5')}}"><i class="fa fa-star-half-o"></i> {{__('web.Rewards')}} </a>
                            </div>
                            <?php $idpass=Auth::user()->id?>
                            <a class="nav-link mr-1" href="{{url("passenger/My-Trips/$idpass")}}"><i class="fa ti-panel"></i> {{__('web.Trips')}}</a>
                            <a class="nav-link" href="{{url("passenger/$idpass")}}"><i class="fa fa-plus"></i> {{__('web.New Booking')}}</a>

                        </div>




                    </div>





                </div>


            </div>

        </header><!-- /header -->

       

@yield('main')
 <!-- footer -->
<div class="card-footer">
    <div class="panel-footer">
        <div class="col-sm-3 mt-3">
            <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
        </div>




        <div class="col-sm-5 "></div>
        <div class="col-sm-4 mt-3  d-flex justify-content-around ">
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
<script>
    $("#pac-input").focusin(function() {
        $(this).val('');
    });
    $('#latitude').val('');
    $('#longitude').val('');

        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 24.740691, lng: 46.6528521 },
                zoom: 13,
                mapTypeId: 'roadmap'
            });
            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos),
                        map: map,
                        title: 'موقعك الحالي'
                    });
                    markers.push(marker);
                    marker.addListener('click', function() {
                        geocodeLatLng(geocoder, map, infoWindow,marker);
                    });
                    // to get current position address on load
                    google.maps.event.trigger(marker, 'click');
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                console.log('dsdsdsdsddsd');
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log( results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });
            function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
                var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());
                geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(8);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);
                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
            }
            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }
            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }
            function clearMarkers() {
                setMapOnAll(null);
            }
            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }
            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("أبحث هنا ");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });
            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));
                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        function splitLatLng(latLng){
            var newString = latLng.substring(0, latLng.length-1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng  = trainindIdArray[1];
            $("#latitude").val(lat);
            $("#longitude").val(Lng);
        }
    </script>
    <script src="{{asset('web/assets/js/googlemap.js')}}" defer ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['map_apikey']}}&callback=initMap" async defer></script>


</body>

</html>

