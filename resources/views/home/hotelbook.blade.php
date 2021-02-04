@extends('layouts.home')

@section('title', $setting->title)

@section('description') {{$setting->description}} @endsection

@section('keywords', $setting->keywords)

@section('body')
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <!-- end:fh5co-header -->
        <div id="fh5co-hotel-section">
            <div class="container">
                <div class="row">
                    @foreach($slider as $rs)
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{Storage::url($rs->image)}})">
                                <div class="price"><small>For as low as</small><span>{{$rs->price}}</span></div>
                                <a class="book-now text-center" href="{{route('hotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}"><i class="ti-calendar"></i> Book Now</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('hotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}">{{$rs->title}}</a></h3>
                                <p>{{$rs->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->
@endsection
