@extends('layouts.app')
@section('title'){{__('Home')}}@endsection
@section('content')
    <section class="d-flex justify-content-center align-items-center" id="sectionSearchBox">
        <div class="container" id="containerSearchBox">
            <div class="d-none d-md-block" id="h1">
                <h2 class="text-center">{{ __('Get your wheels back on the Road') }}</h2><span class="text-center d-block">{{ __('Find the Part that you need now!') }}</span>
            </div>
            <div id="searchBox">
                <h1 class="text-center text-lg-left">{{ __('Search For Used Auto Parts Online Instantly') }}</h1>
                <form class="d-none d-lg-inline input-group-addon" id="lg-form" method="post" action="{{ route("search") }}">
                    @csrf
                    <div class="form-group input-group inputGroup mb-0">
                        <select class="form-control form-control-lg" autofocus id="Make" name="make" required style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;">
                            <option selected disabled hidden>{{ __('Select Make') }}</option>
                            <option value="1">Seat</option>
                            <option value="2">Renault</option>
                            <option value="3">Peugeot</option>
                            <option value="4">Dacia</option>
                            <option value="5">Citroen</option>
                            <option value="6">Opel</option>
                            <option value="7">Alfa romeo</option>
                            <option value="8">Skoda</option>
                            <option value="9">Chevrolet</option>
                            <option value="10">Porsche</option>
                            <option value="11">Honda</option>
                            <option value="12">Subaru</option>
                            <option value="13">Mazda</option>
                            <option value="14">Mitsubishi</option>
                            <option value="15">Lexus</option>
                            <option value="16">Toyota</option>
                            <option value="17">Bmw</option>
                            <option value="18">Volkswagen</option>
                            <option value="19">Suzuki</option>
                            <option value="20">Mercedes benz</option>
                            <option value="21">Saab</option>
                            <option value="22">Audi</option>
                            <option value="23">Kia</option>
                            <option value="24">Land rover</option>
                            <option value="25">Dodge</option>
                            <option value="26">Chrysler</option>
                            <option value="27">Ford</option>
                            <option value="28">Hummer</option>
                            <option value="29">Hyundai</option>
                            <option value="30">Infiniti</option>
                            <option value="31">Jaguar</option>
                            <option value="32">Jeep</option>
                            <option value="33">Nissan</option>
                            <option value="34">Volvo</option>
                            <option value="35">Daewoo</option>
                            <option value="36">Fiat</option>
                            <option value="37">Mini</option>
                            <option value="38">Rover</option>
                            <option value="39">Smart</option>
                            <option value="40">Chery</option>
                            <option value="41">Hino</option>
                            <option value="42">Acura</option>
                            <option value="43">Dfsk</option>
                            <option value="44">Dfm</option>
                            <option value="45">Great wall</option>
                            <option value="46">Cadillac</option>
                            <option value="47">Ssangyong</option>
                            <option value="48">Am general</option>
                            <option value="49">Avanti Motors</option>
                            <option value="50">Asia</option>
                            <option value="51">Baic yinxiang</option>
                            <option value="52">Baic</option>
                            <option value="53">Brilliance</option>
                            <option value="54">Byd</option>
                            <option value="55">Changan</option>
                            <option value="56">Changhe</option>
                            <option value="57">Daihatsu</option>
                            <option value="58">Datsun</option>
                            <option value="59">Faw</option>
                            <option value="60">Foton</option>
                            <option value="61">Geely</option>
                            <option value="62">Gonow</option>
                            <option value="63">Pontiac</option>
                            <option value="64">Isuzu</option>
                            <option value="65">Mahindra</option>
                        </select>
                        <select class="form-control form-control-lg" id="Modele" name="modele" autofocus required disabled>
                            <option disabled hidden selected>{{__('Select Model')}}</option>
                        </select>
                        <select id="ModeleYear" name="ModeleYear" class="form-control form-control-lg" autofocus disabled>
                            <option disabled hidden selected>{{ __('Select Year') }}</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                        </select>
                        <select id="ModelePart" name="ModelePart" class="form-control form-control-lg" autofocus required disabled>
                            <option disabled hidden selected>{{ __('Select a Part') }}</option>
                        </select>
                        <button class="btn btn-success btn-lg input-group-addon" type="submit" style="border-radius: 0px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                            <i class="fas fa-search fa-lg"></i>
                        </button>
                    </div>
                </form>
                <form class="d-lg-none input-group-addon" id="md-form" method="post" action="{{ route("search") }}">
                    @csrf
                    <div class="form-group mb-0">
                        <select id="Make" name="make" class="form-control form-control-lg" autofocus required>
                            <option selected disabled hidden>Select Make</option>
                            <option value="1">Seat</option>
                            <option value="2">Renault</option>
                            <option value="3">Peugeot</option>
                            <option value="4">Dacia</option>
                            <option value="5">Citroen</option>
                            <option value="6">Opel</option>
                            <option value="7">Alfa romeo</option>
                            <option value="8">Skoda</option>
                            <option value="9">Chevrolet</option>
                            <option value="10">Porsche</option>
                            <option value="11">Honda</option>
                            <option value="12">Subaru</option>
                            <option value="13">Mazda</option>
                            <option value="14">Mitsubishi</option>
                            <option value="15">Lexus</option>
                            <option value="16">Toyota</option>
                            <option value="17">Bmw</option>
                            <option value="18">Volkswagen</option>
                            <option value="19">Suzuki</option>
                            <option value="20">Mercedes benz</option>
                            <option value="21">Saab</option>
                            <option value="22">Audi</option>
                            <option value="23">Kia</option>
                            <option value="24">Land rover</option>
                            <option value="25">Dodge</option>
                            <option value="26">Chrysler</option>
                            <option value="27">Ford</option>
                            <option value="28">Hummer</option>
                            <option value="29">Hyundai</option>
                            <option value="30">Infiniti</option>
                            <option value="31">Jaguar</option>
                            <option value="32">Jeep</option>
                            <option value="33">Nissan</option>
                            <option value="34">Volvo</option>
                            <option value="35">Daewoo</option>
                            <option value="36">Fiat</option>
                            <option value="37">Mini</option>
                            <option value="38">Rover</option>
                            <option value="39">Smart</option>
                            <option value="40">Chery</option>
                            <option value="41">Hino</option>
                            <option value="42">Acura</option>
                            <option value="43">Dfsk</option>
                            <option value="44">Dfm</option>
                            <option value="45">Great wall</option>
                            <option value="46">Cadillac</option>
                            <option value="47">Ssangyong</option>
                            <option value="48">Am general</option>
                            <option value="49">Avanti Motors</option>
                            <option value="50">Asia</option>
                            <option value="51">Baic yinxiang</option>
                            <option value="52">Baic</option>
                            <option value="53">Brilliance</option>
                            <option value="54">Byd</option>
                            <option value="55">Changan</option>
                            <option value="56">Changhe</option>
                            <option value="57">Daihatsu</option>
                            <option value="58">Datsun</option>
                            <option value="59">Faw</option>
                            <option value="60">Foton</option>
                            <option value="61">Geely</option>
                            <option value="62">Gonow</option>
                            <option value="63">Pontiac</option>
                            <option value="64">Isuzu</option>
                            <option value="65">Mahindra</option>
                        </select>
                        <select id="Modele" name="modele" class="form-control form-control-lg" autofocus required
                                disabled>
                            <option disabled hidden selected>Select Model</option>
                        </select>
                        <select id="ModeleYear" name="ModeleYear" class="form-control form-control-lg" autofocus
                                required disabled>
                            <option disabled hidden selected>Select Year</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                        </select>
                        <select id="ModelePart" name="ModelePart" class="form-control form-control-lg" autofocus
                                required disabled>
                            <option disabled hidden selected>Select Part</option>
                        </select>
                        <button class="btn btn-success btn-lg input-group-addon" type="submit">
                            <strong>{{ __('Find Part') }}&nbsp;</strong><i class="fas fa-search fa-lg"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">{{__('main features')}}</h2>
                <hr>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600"><i class="fa fa-map-marker icon"></i>
                        <h3><strong>{{__('Find nearest used part')}}</strong></h3>
                        <p class="description">{{__('save extremely valuable time and resources in locating parts')}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100"><i class="fa fa-search icon"></i>
                        <h3><strong>{{__('Search for used parts easily')}}</strong></h3>
                        <p class="description">{{__('Our simple to use online search tool above makes finding your auto part easy and convenient')}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200"><i class="fa fa-money icon"></i>
                        <h3><strong>{{__('Get the best deal')}}</strong></h3>
                        <p class="description">{{__('Used parts are easier for the wallet! search for the best price on the parts you need.')}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300"><i class="fa fa-handshake-o icon"></i>
                        <h3><strong>{{__('Reliability')}}</strong></h3>
                        <p class="description">{{__('all parts are from reliable source of quality used parts')}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="400"><i class="fa fa-comments icon"></i>
                        <h3><strong>{{__('Communicate easily')}}</strong></h3>
                        <p class="description">{{__('We offer a way to easily communicate with all advertisers online')}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 d-flex d-lg-flex justify-content-center justify-content-lg-center item">
                    <div class="shadow box" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="500"><i class="fa fa-share-alt icon"></i>
                        <h3><strong>{{__('a place to share your ads')}}</strong></h3>
                        <p class="description">{{__('we offer a place to share all your used auto parts as regular client or professional')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="find-call">
        <div>
            <div class="container find-call-box">
                <div>
                    <p class="lead text-center">{{__('Get your wheels back on the road. Let\'s find the part you need!')}}</p>
                    <p class="text-center">
                        <button class="btn shadow-none" data-aos="zoom-in" data-aos-duration="500" type="button"
                                onclick="window.location.href='#HeadTopBar'">{{__('Find Your Parts now')}}&nbsp;<i class="fa fa-chevron-right"></i>
                        </button>
                    </p>
                </div>
            </div>
        </div>
        @include('comp.brandCarousel')
    </div>
@endsection