<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/superfish.css">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flexslider.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <!-- Slideshow -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/slideshow.css">

    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            @include('home._header')
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-parallax" style="background-image: url({{Storage::url($data->image)}})"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell">
                            <h1 class="text-center">{{$data->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div>
            <div class="slideshow-container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Full-width images with number and caption text -->
                        @foreach($datalist as $rs)
                            <div class="flex-slider">
                                <img class="mySlides" src="{{Storage::url($rs->image)}}" style="width:100%">
                            </div>
                        @endforeach
                        <br>
                    </div>

                    <div class="col-md-6">
                        <hr>
                        <h1>{{$data->title}}</h1>
                        <hr>
                        <h3>Açıklama</h3>
                        {{$data->description}}
                        <br>
                        <br>
                        <h3>İletişim</h3>
                        <div class="col-md-12">
                            <ul class="contact-info">
                                <li><i class="ti-map"></i>{{$data->address}}</li>
                                <li><i class="ti-mobile"></i>{{$data->phone}}</li>
                                <li><i class="ti-envelope"></i><a href="#">{{$data->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Details</h3>
                        <hr>
                        <div>
                            <p>{!! $data->detail !!}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Review</h3>
                        <hr>
                        <div>
                            @livewire('review' , ['id' => $data->id])
                        </div>
                        @livewireScripts
                    </div>
                </div>
            </div>
        </div>


        @include('home._footer')

    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- Javascripts -->
<script src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="{{asset('assets')}}/js/hoverIntent.js"></script>
<script src="{{asset('assets')}}/js/superfish.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="{{asset('assets')}}/js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{asset('assets')}}/js/classie.js"></script>
<script src="{{asset('assets')}}/js/selectFx.js"></script>
<!-- Flexslider -->
<script src="{{asset('assets')}}/js/jquery.flexslider-min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="{{asset('assets')}}/js/google_map.js"></script>

<script src="{{asset('assets')}}/js/custom.js"></script>

<script src="{{asset('assets')}}/js/slideshow.js"></script>

</body>
</html>
