@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
@extends('layouts.home')

@section('title', $setting->title)

@section('description') {{$setting->description}} @endsection

@section('keywords', $setting->keywords)

@section('body')
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
                                <h1 class="text-center">Write Anything</h1>
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
@endsection
