@extends('layouts.home')

@section('title', $setting->title)

@section('description') {{$setting->description}} @endsection

@section('keywords', $setting->keywords)

@section('body')



{{--        <div id="featured-hotel" class="fh5co-bg-color">--}}
{{--            <div class="container">--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="section-title text-center">--}}
{{--                            <h2>Featured Hotels</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @foreach($slider as $rs)--}}
{{--                <div class="row">--}}
{{--                    <div class="feature-full-1col">--}}
{{--                        <div class="image" style="background-image: url({{Storage::url($rs->image)}})">--}}
{{--                            <div class="descrip text-center">--}}
{{--                                <p><small>For as low as</small><span>{{$rs->price}}</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="desc">--}}
{{--                            <h3>{{$rs->title}}</h3>--}}
{{--                            <p>{{$rs->description}}</p>--}}
{{--                            <p><a href="{{route('booknow', ['id'=>$rs->id])}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

@include('home._featuredhotels')


    @include('home.comment')

@endsection
