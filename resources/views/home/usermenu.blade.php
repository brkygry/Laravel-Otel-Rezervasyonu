@auth
<div class="aside">
    <h8 class="aside-title">User Panel</h8>
         <li><a href="{{route('myprofile')}}">Profile</a></li>
         <li><a href="{{route('mybookings')}}">Bookings</a></li>
         @php
            $userRoles = Auth::user()->roles->pluck('name');
         @endphp
         @if($userRoles->contains('admin'))
             <li><a href="{{route('admin_home')}}" target="_blank">Admin</a></li>
         @endif
         <li><a href="{{route('logout')}}">Logout</a></li>
</div>
@endauth
