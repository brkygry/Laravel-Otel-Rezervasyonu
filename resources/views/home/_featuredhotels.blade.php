<div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Featured Hotels</h2>
                </div>
            </div>
        </div>

        <div class="feature-full-2col">
            @foreach($slider as $rs)
            <div class="f-hotel">
                <div class="image" style="background-image: url({{Storage::url($rs->image)}})">
                    <div class="descrip text-center">
                        <p><small>For as low as</small><span>{{$rs->price}}</span></p>
                    </div>
                </div>
                <div class="desc">
                    <h3>{{$rs->title}}</h3>
                    <p>{{$rs->description}}</p>
                    <p><a href="{{route('hotel', ['id'=>$rs->id, 'slug'=> $rs->slug])}}" class="btn btn-primary btn-luxe-primary">View<i class="ti-angle-right"></i></a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
