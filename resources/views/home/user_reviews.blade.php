@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luxe Hotels Services</title>
@section('description') {{$setting->description}} @endsection

@section('keywords', $setting->keywords)

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
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            @include('home._header')
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-parallax" style="background-image: url({{asset('assets')}}/images/slider1.jpg);"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell">
                            <h1 class="text-center">My Reviews</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <div id="fh5co-services-section">
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div id="aside" class="col-md-2">
                        @include('home.usermenu')
                    </div>
                    <div id="main" class="col-md-10">
                        <div class="container">
                            <div class="row">
                                <section class="content">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Hotel</th>
                                                    <th>Subject</th>
                                                    <th>Review</th>
                                                    <th>Created at</th>
                                                    <th>Status</th>
                                                    <th style="..." colspan="1">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as  $rs)
                                                    <tr>
                                                        <td>{{ $rs -> id }}</td>
                                                        <td>{{ $rs -> hotel -> title }}</td>
                                                        <td>{{ $rs -> subject }}</td>
                                                        <td>{{ $rs -> review }}</td>
                                                        <td>{{ $rs -> created_at }}</td>
                                                        <td>{{ $rs -> status }}</td>
                                                        <td>
                                                            <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" style="height: 30px"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Row -->
            </div>
            <!-- END Container -->
        </div>
        <!-- END Section -->
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

