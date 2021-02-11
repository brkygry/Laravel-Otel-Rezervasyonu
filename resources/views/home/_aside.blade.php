<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">

        <ul class="slides">
            @foreach($slider as $rs)
            <li style="background-image: url({{Storage::url($rs->image)}}) ">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>{{$rs->title}}</span></p>
{{--                                <h2>{{$rs->description}}</h2>--}}
                                <p>
                                    <a href="{{route('hotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}" class="btn btn-primary btn-lg">View</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</aside>
