@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp


<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

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
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->


<script src="{{asset('assets')}}/admin/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="{{asset('assets')}}/admin/assets/js/Chart.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="{{asset('assets')}}/admin/assets/js/bar.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="{{asset('assets')}}/admin/assets/js/jquery.nicescroll.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/scripts.js"></script>

<!-- close script -->
<script>
    var closebtns = document.getElementsByClassName("close-grid");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function () {
            this.parentElement.style.display = 'none';
        });
    }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
    $(function () {
        $('.sidebar-menu-collapsed').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll when navbar is in active -->

<!-- loading-gif Js -->
<script src="{{asset('assets')}}/admin/assets/js/modernizr.js"></script>
<script>
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets')}}/admin/assets/js/bootstrap.min.js"></script>









