<div id="HeadTopBar" style="background-color: #005a93;color: #ffffff;font-size: 14px;">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-7 col-lg-7 col-xl-8 d-inline-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                <a class="btn btn-sm d-md-none" role="button" style="color: #fff;background-color: #014876;padding: 1px 10px;margin-right: 5px;" href="{{ route('register') }}">
                    <i class="fas fa-user-plus" style="margin-right: 3px;color: #c3c3c3;"></i> {{ __('Register') }}
                </a>
                <a class="btn btn-sm d-md-none" role="button" style="color: #fff;background-color: #014876;padding: 1px 10px;" href="{{ route('login') }}">
                    <i class="fas fa-user-plus" style="margin-right: 3px;color: #c3c3c3;"></i>{{__('Login')}}
                </a>
                <span class="d-none d-md-inline d-lg-inline d-xl-inline">+213 542569990</span>
            </div>
            <div class="col-4 col-sm-4 col-md-5 col-xl-4 align-items-center" style="height: 30px;">
                <ul class="list-inline text-capitalize d-none float-left d-sm-none d-md-none d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center visible" style="height: 30px;">
                    <li class="list-inline-item">About us</li>
                    <li class="list-inline-item">Contact us</li>
                    <li class="list-inline-item">privacy plocy</li>
                </ul>
                <div class="dropdown float-right">
                    <a class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button" style="font-size: 14px;background-color: #004876;border: none;border-radius: 0;padding: 4px 13px;" href="#">English</a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a class="dropdown-item" role="presentation" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">العربية</a>
                        <a class="dropdown-item" role="presentation" href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">English</a>
                        <a class="dropdown-item" role="presentation" href="{{ request()->fullUrlWithQuery(['lang' => 'fr']) }}">Francais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="d-flex align-items-center" style="color: #ffffff;height: 66px;background-color: #0078c3;margin: 0px;">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-auto d-flex d-lg-none">
                <button class="btn navbar-toggler toggler-example" id="idHeadMenu" type="button" style="background-color: #004876;color: #ffffff;" data-toggle="collapse" data-target="#HeadMenu" aria-controls="HeadMenu" aria-expanded="false">
							<span>
								<i class="fas fa-bars fa-1x"></i>
							</span>
                </button>
                @if( Route::currentRouteName() != 'index' )
                    <button class="btn shadow-none navbar-toggler toggler-example" id="idHeadSearch" type="button" style="color: #ffffff;" title="Search" data-toggle="collapse" data-target="#HeadSearch" aria-controls="HeadSearch" aria-expanded="false">
							<span>
								<i class="fas fa-search fa-sm" style="color: #fff;font-size: 20px;"></i>
							</span>
                    </button>
                @endif
            </div>
            <div class="col-3 col-lg-2 d-flex justify-content-center align-items-center justify-content-lg-start p-0">
                <a href="{{route('index')}}">
                    <img class="lacasseLogo" src="{{ asset('img/logo.png') }}">
                </a>
            </div>
            <div class="col-md-3 col-lg-5 d-none d-lg-inline-block position-relative">
                <div class="d-inline-flex w-100" id="TopSearchBar">
                    <div class="d-inline-flex align-items-center bg-white rounded-left w-100 d-inline-block px-1" id="TopSearchAddChip" data-placeholder="{{__('Search')}}"></div>
                    <div class="d-flex justify-content-center align-items-center bg-success d-inline-block rounded-right" id="SubmitTopSearchBar">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div id="TopSearchBarDropContent" class="bg-white p-1">
                    <ul class="list-unstyled px-2 mb-0 text-body">
                        <li data-type="make" data-id="1">Seat</li>
                        <li data-type="make" data-id="2">Renault</li>
                        <li data-type="make" data-id="3">Peugeot</li>
                        <li data-type="make" data-id="4">Dacia</li>
                        <li data-type="make" data-id="5">Citroen</li>
                        <li data-type="make" data-id="6">Opel</li>
                        <li data-type="make" data-id="7">Alfa romeo</li>
                        <li data-type="make" data-id="8">Skoda</li>
                        <li data-type="make" data-id="9">Chevrolet</li>
                        <li data-type="make" data-id="10">Porsche</li>
                        <li data-type="make" data-id="11">Honda</li>
                        <li data-type="make" data-id="12">Subaru</li>
                        <li data-type="make" data-id="13">Mazda</li>
                        <li data-type="make" data-id="14">Mitsubishi</li>
                        <li data-type="make" data-id="15">Lexus</li>
                        <li data-type="make" data-id="16">Toyota</li>
                        <li data-type="make" data-id="17">Bmw</li>
                        <li data-type="make" data-id="18">Volkswagen</li>
                        <li data-type="make" data-id="19">Suzuki</li>
                        <li data-type="make" data-id="20">Mercedes benz</li>
                        <li data-type="make" data-id="21">Saab</li>
                        <li data-type="make" data-id="22">Audi</li>
                        <li data-type="make" data-id="23">Kia</li>
                        <li data-type="make" data-id="24">Land rover</li>
                        <li data-type="make" data-id="25">Dodge</li>
                        <li data-type="make" data-id="26">Chrysler</li>
                        <li data-type="make" data-id="27">Ford</li>
                        <li data-type="make" data-id="28">Hummer</li>
                        <li data-type="make" data-id="29">Hyundai</li>
                        <li data-type="make" data-id="30">Infiniti</li>
                        <li data-type="make" data-id="31">Jaguar</li>
                        <li data-type="make" data-id="32">Jeep</li>
                        <li data-type="make" data-id="33">Nissan</li>
                        <li data-type="make" data-id="34">Volvo</li>
                        <li data-type="make" data-id="35">Daewoo</li>
                        <li data-type="make" data-id="36">Fiat</li>
                        <li data-type="make" data-id="37">Mini</li>
                        <li data-type="make" data-id="38">Rover</li>
                        <li data-type="make" data-id="39">Smart</li>
                        <li data-type="make" data-id="40">Chery</li>
                        <li data-type="make" data-id="41">Hino</li>
                        <li data-type="make" data-id="42">Acura</li>
                        <li data-type="make" data-id="43">Dfsk</li>
                        <li data-type="make" data-id="44">Dfm</li>
                        <li data-type="make" data-id="45">Great wall</li>
                        <li data-type="make" data-id="46">Cadillac</li>
                        <li data-type="make" data-id="47">Ssangyong</li>
                        <li data-type="make" data-id="48">Am general</li>
                        <li data-type="make" data-id="49">Avanti Motors</li>
                        <li data-type="make" data-id="50">Asia</li>
                        <li data-type="make" data-id="51">Baic yinxiang</li>
                        <li data-type="make" data-id="52">Baic</li>
                        <li data-type="make" data-id="53">Brilliance</li>
                        <li data-type="make" data-id="54">Byd</li>
                        <li data-type="make" data-id="55">Changan</li>
                        <li data-type="make" data-id="56">Changhe</li>
                        <li data-type="make" data-id="57">Daihatsu</li>
                        <li data-type="make" data-id="58">Datsun</li>
                        <li data-type="make" data-id="59">Faw</li>
                        <li data-type="make" data-id="60">Foton</li>
                        <li data-type="make" data-id="61">Geely</li>
                        <li data-type="make" data-id="62">Gonow</li>
                        <li data-type="make" data-id="63">Pontiac</li>
                        <li data-type="make" data-id="64">Isuzu</li>
                        <li data-type="make" data-id="65">Mahindra</li>
                    </ul>
                </div>
                <form action="{{ route("search") }}" id="TopSearchBarForm" class="d-none" method="post">
                    @csrf
                    <input type="hidden" id="inputTopSMake" name="make">
                    <input type="hidden" id="inputTopSModele" name="modele">
                    <input type="hidden" id="inputTopSYear" name="ModeleYear">
                    <input type="hidden" id="inputTopSPart" name="ModelePart">
                </form>
            </div>
            <div class="col-3 col-sm-2 col-md-7 col-lg-5 col-xl-5 d-flex flex-row-reverse justify-content-start align-items-center" style="color: #ffffff;font-family: Montserrat, sans-serif;">
                <div class="d-flex align-items-center">
                    <a class="d-inline-flex align-items-center" href="{{route('directory')}}" style="font-size: 16px;margin-right: 20px;">
                        <i class="fas fa-map-marked-alt fa-lg" style="color: #58ba25;margin-right: 4px;"></i>
                        <div class="hideon-sm">{{__('Casse Directory')}}</div>
                    </a>
                    <div class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block">
                        <a class="align-items-center" href="{{ route('register') }}" style="font-size: 16px;margin-right: 20px;">
                            <i class="fas fa-user-plus fa-lg" style="color: #58ba25;margin-right: 4px;"></i>{{ __('Register') }}
                        </a>
                        <a class="d-xl-inline-flex align-items-center" href="{{ route('login') }}" style="font-size: 16px;font-family: Montserrat, sans-serif;">
                            <i class="fa fa-sign-in fa-lg" style="color: #58ba25;margin-right: 4px;"></i>{{__('Login')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="d-lg-none collapse navbar-collapse" id="HeadMenu" style="padding: 10px 1.5em;">
    <ul class="list-unstyled">
        <li>
            <a class="d-block" href="#">About Us</a>
        </li>
        <li>
            <a class="d-block" href="#">About Us</a>
        </li>
        <li>
            <a class="d-block" href="#">About Us</a>
        </li>
    </ul>
</div>
@if( Route::currentRouteName() != 'index' )

    <div class="d-lg-none collapse navbar-collapse" id="HeadSearch" style="padding: 2em;">
        <form method="post" action="{{ route("search") }}">
            @csrf
            <div class="form-group">
                <select id="Make" name="make" class="form-control mdb-select md-form" required>
                    <option selected disabled hidden>{{__('Select make')}}</option>
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
            </div>
            <div class="form-group">
                <select id="Modele" name="modele" class="form-control mdb-select md-form" required disabled>
                    <option disabled hidden selected>{{__('Select model')}}</option>
                </select>
            </div>
            <div class="form-group">
                <select id="ModeleYear" name="ModeleYear" class="form-control mdb-select md-form" disabled>
                    <option disabled hidden selected>{{__('Select year')}}</option>
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
            </div>
            <div class="form-group">
                <select id="ModelePart" name="ModelePart" class="form-control mdb-select md-form" required disabled>
                    <option disabled hidden selected>{{__('Select part')}}</option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
                <button class="btn" type="reset" style="background-color: #656565;color: rgb(255,255,255);"><i
                            class="fa fa-close" style="margin: 3px;"></i>{{__('Cancel')}}
                </button>
                <button class="btn" type="submit" style="background-color: #58ba25;color: rgb(255,255,255);"><i
                            class="fa fa-search" style="margin: 3px;"></i>{{__('Search')}}
                </button>
            </div>
        </form>
    </div>
@endif
		