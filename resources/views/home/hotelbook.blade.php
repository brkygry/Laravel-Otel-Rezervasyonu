@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luxe Hotels</title>
@section('description') {{$setting->description}} @endsection

@section('keywords', $setting->keywords)

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
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

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
        <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell">
                            <h1 class="text-center">Choose Our Hotel</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-hotel-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-1.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-2.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-3.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-4.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-5.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets')}}/images/image-6.jpg);">
                                <div class="price"><small>For as low as</small><span>$100/night</span></div>
                                <a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Hotel Name</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
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

<script src="{{asset('assets')}}/js/custom.js"></script>

</body>
</html>
