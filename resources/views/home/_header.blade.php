@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{route('home_home')}}">Luxe</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a class="active" href="{{route('home_home')}}">Home</a></li>
                                <li>
                                    <a class="fh5co-sub-ddown">Categories</a>
                                    <ul class="fh5co-sub-menu">
                                        @foreach($parentCategories as $rs)
                                            <li>
                                                <a href="#" class="fh5co-sub-ddown">{{$rs->title}}</a>
                                                    @if(count($rs->children))
                                                        @include('home.categorytree', ['children'=> $rs->children])
                                                    @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('hotels')}}">Hotels</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                @guest
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                                @endguest

                                @auth
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                                       aria-expanded="false">
                                        <div class="profile_img">
                                            <img src="{{asset('assets')}}/admin/assets/images/profileimg.png" class="img-circle" style="height: 50px" alt="img" />
                                        </div>
                                    </a>
                                    <ul class="fh5co-sub-menu">
                                        <li class="user-info">
                                            <h9 class="user-name">{{ Auth::user()->name }}</h9>
                                        </li>
                                        <li> <a href="{{route('myprofile')}}">My Profile</a> </li>
                                        <li> <a href="{{route('admin_setting')}}">Setting</a> </li>
                                        <li class="logout"> <a href="{{route('admin_log_out')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
    <span class="fa fa-angle-up"></span>
</button>










