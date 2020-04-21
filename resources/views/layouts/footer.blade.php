<div class="container-fluid" style="background-color: #474747;margin-top: 10vh;">
    <div class="container">
        <div class="row">
            <div class="col">
                <footer>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 footer-navigation">
                            <h3><a href="#">LaCasse</a></h3>
                            <div>
                                <p><span>{{__('Address')}} :&nbsp;</span>informica En face Toyota<br> Boumerdes 35000, Algeria</p>
                            </div>
                            <div>
                                <p class="footer-center-info email text-left"><span>{{__('Phone')}} :&nbsp;</span>+213 664146126</p>
                            </div>
                            <div>
                                <p><span>{{__('E-Mail')}} :</span><a href="#" target="_blank">&nbsp;info@lacasse.dz</a></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-inline-flex align-items-lg-center footer-contacts">
                            <div class="row" style="height: auto;width: 100%;margin: 0px;">
                                <div class="col">
                                    <ul class="list-unstyled app-links">
                                        @auth()
                                            <li><a href="{{ route('requests') }}">{{__('Parts Requests')}}</a></li>
                                        @endauth
                                        <li><a href="{{ route('directory') }}">{{__('Casse Directory')}}</a></li>
                                        <li><a href="#">{{__('How To Use')}}</a></li>
                                        <li><a href="{{ route('contact.index') }}">{{__('Contact us')}}</a></li>
                                        <li><a href="#">{{__('Privacy Policy')}}</a></li>
                                        <li><a href="#">{{__('Terms & conditions')}}</a></li>
                                        <li><a href="#">{{__('About')}} Lacasse.dz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center align-self-center footer-about">
                            <h4>{{__('About the company')}}</h4>
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube-play"></i></a></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container" style="color: #212529;">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="text-center text-left">Copyright © {{ now()->year }} LaCasse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ secure_asset('js/bs-init.js') }}"></script>
@if( Route::currentRouteName() == 'index' )
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
@endif
<script src="{{ secure_asset('js/Card-Carousel.js') }}"></script>
<script src="{{ secure_asset('js/custom.js') }}"></script>
@if( Route::currentRouteName() == 'messages' )
    <script src="{{ secure_asset('js/msgframe.js') }}"></script>
@endif
@if( Route::currentRouteName() == 'directory' OR Route::currentRouteName() == 'profile')
    @mapscripts
    @endif
    </body>
    </html>
