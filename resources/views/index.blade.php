@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-center align-items-center" id="sectionSearchBox">
        <div class="container" id="containerSearchBox">
            <div class="d-none d-md-block" id="h1">
                <h2 class="text-center">Get your wheels back on the Road</h2><span class="text-center d-block">Let's find the part you need!</span></div>
            <div id="searchBox">
                <h1 class="text-center text-lg-left">Search For Used Auto Parts Online Instantly</h1>
                <form class="d-none d-lg-inline input-group-addon" id="lg-form">
                    <div class="form-group input-group inputGroup" style="margin-bottom: 0px;"><select class="form-control form-control-lg" autofocus="" required="" style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;"><option value="Cleo" selected="">Cleo</option><option value="BMW">BMW</option><option value="Peojeut">Peojeut</option><option value="" selected="" disabled="" hidden="">Select Make</option></select>
                        <select
                                class="form-control form-control-lg" autofocus="" required="" readonly="" disabled="">
                            <option value="Cleo" selected="">Cleo</option>
                            <option value="BMW">BMW</option>
                            <option value="Peojeut">Peojeut</option>
                            <option value="" selected="" disabled="disabled" hidden="hidden">Select Model</option>
                        </select><select class="form-control form-control-lg" autofocus="" required="" readonly="" disabled=""><option value="Cleo" selected="">Cleo</option><option value="BMW">BMW</option><option value="Peojeut">Peojeut</option><option value="" selected="" disabled="disabled" hidden="hidden">Select Model</option></select>
                        <select
                                class="form-control form-control-lg" autofocus="" required="" readonly="" disabled="">
                            <option value="Cleo" selected="">Cleo</option>
                            <option value="BMW">BMW</option>
                            <option value="Peojeut">Peojeut</option>
                            <option value="" selected="" disabled="disabled" hidden="hidden">Select Model</option>
                        </select><button class="btn btn-success btn-lg input-group-addon" type="submit" style="border-radius: 0px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;"><i class="fas fa-search fa-lg"></i></button></div>
                </form>
                <form class="d-lg-none input-group-addon" id="md-form">
                    <div class="form-group" style="margin-bottom: 0px;"><select class="form-control form-control-lg" autofocus="" required=""><option value="Cleo" selected="">Cleo</option><option value="BMW">BMW</option><option value="Peojeut">Peojeut</option><option value="" selected="" disabled="" hidden="">Select Make</option></select>
                        <select
                                class="form-control form-control-lg" autofocus="" required="" readonly="" disabled="">
                            <option value="Cleo" selected="">Cleo</option>
                            <option value="BMW">BMW</option>
                            <option value="Peojeut">Peojeut</option>
                            <option value="" selected="" disabled="disabled" hidden="hidden">Select Model</option>
                        </select><select class="form-control form-control-lg" autofocus="" required="" readonly="" disabled=""><option value="Cleo" selected="">Cleo</option><option value="BMW">BMW</option><option value="Peojeut">Peojeut</option><option value="" selected="" disabled="disabled" hidden="hidden">Select Year</option></select>
                        <select
                                class="form-control form-control-lg" autofocus="" required="" readonly="" disabled="">
                            <option value="Cleo" selected="">Cleo</option>
                            <option value="BMW">BMW</option>
                            <option value="Peojeut">Peojeut</option>
                            <option value="" selected="" disabled="disabled" hidden="hidden">Select Part</option>
                        </select><button class="btn btn-success btn-lg input-group-addon" type="submit"><strong>Find part&nbsp;</strong><i class="fas fa-search fa-lg"></i></button></div>
                </form>
            </div>
        </div>
    </section>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><strong>main features</strong></h2>
                <hr>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600"><i class="fa fa-map-marker icon"></i>
                        <h3><strong>Find nearest used part</strong></h3>
                        <p class="description">save extremely valuable time and resources in locating parts</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100"><i class="fa fa-search icon"></i>
                        <h3><strong>Search for used parts easily</strong></h3>
                        <p class="description">Our simple to use online search tool above makes finding your auto part easy and convenient</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200"><i class="fa fa-money icon"></i>
                        <h3><strong>Get the best deal</strong></h3>
                        <p class="description">Used parts are easier for the wallet! search for the best price on the parts you need.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300"><i class="fa fa-handshake-o icon"></i>
                        <h3><strong>Reliability</strong></h3>
                        <p class="description">all parts are from reliable partner in sourcing quality used parts</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400"><i class="fa fa-comments icon"></i>
                        <h3><strong>Communicate easily</strong></h3>
                        <p class="description">We offer a way to easily communicate with all advertisers online</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="500"><i class="fa fa-share-alt icon"></i>
                        <h3><strong>a place to share your ads</strong></h3>
                        <p class="description">we offer a place to share all your used auto parts as regular client or professional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="find-call">
        <div>
            <div class="container find-call-box">
                <div>
                    <p class="lead text-center">Get your wheels back on the road. Let's find the part you need!</p>
                    <p class="text-center">
                        <button class="btn shadow-none" data-aos="zoom-in" data-aos-duration="500" type="button" onclick="window.location.href='#HeadTopBar'">Find Your Parts now&nbsp;<i class="fa fa-chevron-right"></i></button></p>
                </div>
            </div>
        </div>
        @include('comp.brandCarousel')
    </div>
@endsection
