@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
    @endphp


            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html">Luxe</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a class="active" href="index.html">Home</a></li>
                                <li>
                                    <a href="hotel.html" class="fh5co-sub-ddown">Hotel</a>
                                    <ul class="fh5co-sub-menu">
                                        @foreach($parentCategories as $rs)
                                            <li>
                                                <a href="#" class="fh5co-sub-ddown">{{$rs->title}}</a>
{{--                                                    <li><a>{{$rs->title}}</a></li>--}}
                                                    @if(count($rs->children))
                                                        @include('home.categorytree', ['children'=> $rs->children])
                                                    @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>




