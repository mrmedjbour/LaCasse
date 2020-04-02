<div class="container-fluid" style="background-color: #474747;margin-top: 10vh;">
    <div class="container">
        <div class="row">
            <div class="col">
                <footer>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 footer-navigation">
                            <h3><a href="#">LaCasse</a></h3>
                            <div>
                                <p><span>Adresse :&nbsp;</span>informica En face Toyota<br> Boumerdes 35000, Algeria</p>
                            </div>
                            <div>
                                <p class="footer-center-info email text-left"><span>Tel :&nbsp;</span>+213 664146126</p>
                            </div>
                            <div>
                                <p><span>Email :&nbsp;</span><a href="#" target="_blank">&nbsp;info@lacasse.dz</a></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-inline-flex align-items-lg-center footer-contacts">
                            <div class="row" style="height: auto;width: 100%;margin: 0px;">
                                <div class="col">
                                    <ul class="list-unstyled app-links">
                                        @auth()
                                            <li><a href="{{ route('requests') }}">Parts Requests</a></li>
                                        @endauth
                                        <li><a href="{{ route('directory') }}">Casse Directory</a></li>
                                        <li><a href="#">How To Use</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms &amp; conditions</a></li>
                                        <li><a href="#">About Lacasse.dz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center align-self-center footer-about">
                            <h4>About the company</h4>
                            <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                            <div class="social-links social-icons"><a href="#" ><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube-play"></i></a></div>
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
                        <p class="text-center text-left">Copyright © 2020 LaCasse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bs-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="{{ asset('js/Card-Carousel.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@if( Route::currentRouteName() == 'messages' )
<script src="{{ asset('js/msgframe.js') }}"></script>
@endif
</body>
</html>
