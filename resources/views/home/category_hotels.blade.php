@extends('layouts.home')

@section('title', $data->title . "Product List")

@section('description') {{$data->description}} @endsection

@section('keywords', $data->keywords)

@section('body')
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <!-- end:fh5co-header -->
            <div id="fh5co-hotel-section">
                <div class="container">
                    <div class="row">
                        @foreach($datalist as $rs)
                            <div class="col-md-4">
                                <div class="hotel-content">
                                    <div class="hotel-grid" style="background-image: url({{Storage::url($rs->image)}})">
                                        <div class="price"><small>For as low as</small><span>{{$rs->price}}</span></div>
                                        <a class="book-now text-center" href="{{route('hotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}"><img src="https://img.icons8.com/material-rounded/24/000000/visible.png"/>View</a>
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
