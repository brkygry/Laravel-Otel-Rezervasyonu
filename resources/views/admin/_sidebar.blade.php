<div class="se-pre-con"></div>
<section>
    <!-- sidebar menu start -->
    <div class="sidebar-menu sticky-sidebar-menu">

        <!-- logo start -->
        <div class="logo">
            <h1><a href="{{route('admin_home')}}">Collective</a></h1>
        </div>

        <!-- if logo is image enable this -->
        <!-- image logo --
        <div class="logo">
          <a href="index.html">
            <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
          </a>
        </div>
        <!-- //image logo -->

        <div class="logo-icon text-center">
            <a href="{{route('admin_home')}}" title="logo"><img src="{{asset('assets')}}/admin/assets/images/logo.png" alt="logo-icon"> </a>
        </div>
        <!-- //logo end -->

        <div class="sidebar-menu-inner">
            <!-- sidebar nav start -->
            <ul class="nav nav-pills nav-stacked custom-nav">

                <li><a href="{{route('admin_category')}}"><i class="fa fa-th"></i> <span>Category</span></a></li>
                <li><a href="{{route('admin_hotels')}}"><i class="fa fa-university"></i> <span>Hotels</span></a></li>
                <li class="menu-list">
                    <a href="#"><i class="fa fa-book"></i>
                        <span>Reservations<i class="fa fa-book"></i></span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('admin_reservations')}}">All Reservations</a> </li>
                        <li><a href="{{route('admin_reservation_list', ['status'=>'new'])}}">New Reservations</a> </li>
                        <li><a href="{{route('admin_reservation_list', ['status'=>'accepted'])}}">Accepted Reservations</a> </li>
                        <li><a href="{{route('admin_reservation_list', ['status'=>'completed'])}}">Completed Reservations</a></li>
                        <li><a href="{{route('admin_reservation_list', ['status'=>'canceled'])}}">Canceled Reservations</a></li>
                    </ul>
                </li>
                <li><a href="{{route('admin_users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                <li><a href="{{route('admin_setting')}}"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
                <li><a href="{{route('admin_message')}}"><i class="fa fa-envelope-o"></i> <span>Contact</span></a></li>
                <li><a href="{{route('admin_faq')}}"><i class="fa fa-question"></i> <span>FAQ</span></a></li>
            </ul>
            <!-- //sidebar nav end -->
            <!-- toggle button start -->
            <a class="toggle-btn">
                <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                <i class="fa fa-angle-double-right menu-collapsed__right"></i>
            </a>
            <!-- //toggle button end -->
        </div>
    </div>
    <!-- //sidebar menu end -->
</section>
