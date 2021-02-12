@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp
<footer id="footer" class="fh5co-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="copyright">
                    <p><small>&copy; 2021 <br> All Rights Reserved. <br>
                            Designed by {{$setting->company}} </small></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Company</h3>
                        <ul class="link">
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li><a href="{{route('hotels')}}">Hotels</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3>Subscribe</h3>
                        <p>Abone olmak için aşağıdaki alana email adresinizi yazın. </p>
                        <form action="#" id="form-subscribe">
                            <div class="form-field">
                                <input type="email" placeholder="Email Address" id="email">
                                <input type="submit" id="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="social-icons">
                    <li>
                        @if($setting->facebook != null) <a href="{{$setting->facebook}}"><i class="icon-facebook-with-circle"></i></a> @endif
                        @if($setting->twitter != null) <a href="{{$setting->twitter}}"><i class="icon-twitter-with-circle"></i></a> @endif
                        @if($setting->instagram != null) <a href="{{$setting->instagram}}"><i class="icon-instagram-with-circle"></i></a> @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
