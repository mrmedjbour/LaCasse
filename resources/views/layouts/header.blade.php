<div id="HeadTopBar" style="background-color: #005a93;color: #ffffff;font-size: 14px;">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-7 col-lg-7 col-xl-8 d-inline-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center">
                <a class="btn btn-sm d-md-none" role="button" style="color: #fff;background-color: #014876;padding: 1px 10px;margin-right: 5px;" href="{{ route('register') }}">
                    <i class="fas fa-user-plus" style="margin-right: 3px;color: #c3c3c3;"></i>Register
                </a>
                <a class="btn btn-sm d-md-none" role="button" style="color: #fff;background-color: #014876;padding: 1px 10px;" href="{{ route('login') }}">
                    <i class="fas fa-user-plus" style="margin-right: 3px;color: #c3c3c3;"></i>Login
                </a>
                <span class="d-none d-md-inline d-lg-inline d-xl-inline">+213 542569990</span>
            </div>
            <div class="col-4 col-sm-4 col-md-5 col-xl-4 align-items-center" style="height: 30px;">
                <ul class="list-inline text-capitalize d-none float-left d-sm-none d-md-none d-lg-flex d-xl-flex align-items-md-center align-items-lg-center align-items-xl-center visible" style="height: 30px;font-size:  ;">
                    <li class="list-inline-item">About us</li>
                    <li class="list-inline-item">Contact us</li>
                    <li class="list-inline-item">privacy plocy</li>
                </ul>
                <div class="dropdown float-right">
                    <a class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button" style="font-size: 14px;background-color: #004876;border: none;border-radius: 0;padding: 4px 13px;" href="#">English</a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu" style="font-size: 14px;">
                        <a class="dropdown-item text-center" role="presentation" href="#" style="font-size: 15px;">العربية</a>
                        <a class="dropdown-item text-center" role="presentation" href="#" style="font-size: 15px;">English</a>
                        <a class="dropdown-item text-center" role="presentation" href="#" style="font-size: 15px;">Francais</a>
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
								<i class="fas fa-search fa-sm" style="color: #ffffff;font-size: 20px;"></i>
							</span>
                    </button>
                @endif

            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center justify-content-lg-start" style="padding: 0px;">
                <a href="{{route('index')}}">
                    <img class="lacasseLogo" src="{{ asset('img/logo.png') }}">
                </a>
            </div>
            <div class="col-md-3 col-lg-5 col-xl-5 d-none d-lg-inline d-xl-inline">
                <form class="navbar-left" method="get" action="#" target="_self">
                    <div id="TopSearchInput">
                        <div class="form-group input-group">
                            <input class="form-control" type="text" placeholder="Search" aria-describedby="basic-addon1">
                            <button class="btn shadow-none input-group-addon" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3 col-sm-2 col-md-7 col-lg-5 col-xl-5 d-flex flex-row-reverse justify-content-start align-items-center" style="color: #ffffff;font-family: Montserrat, sans-serif;">
                <div class="d-flex align-items-center">
                    <a class="d-inline-flex align-items-center" href="{{route('directory')}}" style="font-size: 16px;margin-right: 20px;">
                        <i class="fas fa-map-marked-alt fa-lg" style="color: #58ba25;margin-right: 4px;"></i>
                        <div class="hideon-sm">Casse Directory</div>
                    </a>
                    <div class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block">
                        <a class="align-items-center" href="{{ route('register') }}" style="font-size: 16px;margin-right: 20px;">
                            <i class="fas fa-user-plus fa-lg" style="color: #58ba25;margin-right: 4px;"></i>Register
                        </a>
                        <a class="d-xl-inline-flex align-items-center" href="{{ route('login') }}" style="font-size: 16px;font-family: Montserrat, sans-serif;">
                            <i class="fa fa-sign-in fa-lg" style="color: #58ba25;margin-right: 4px;"></i>Login
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
        <form>
            <div class="form-group">
                <select class="form-control mdb-select md-form">
                    <option value="" selected="" disabled="" hidden="">Make</option>
                    <option value="12">BMW</option>
                    <option value="13">Peujet</option>
                    <option value="14">Cleo</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control mdb-select md-form">
                    <option value="" selected="" disabled="" hidden="">Model</option>
                    <option value="12">BMW</option>
                    <option value="13">Peujet</option>
                    <option value="14">Cleo</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control mdb-select md-form">
                    <option value="" selected="" disabled="" hidden="">Year</option>
                    <option value="12">BMW</option>
                    <option value="13">Peujet</option>
                    <option value="14">Cleo</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control mdb-select md-form">
                    <option value="" selected="" disabled="" hidden="">Part</option>
                    <option value="12">BMW</option>
                    <option value="13">Peujet</option>
                    <option value="14">Cleo</option>
                </select>
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
                <button class="btn" id="closeHeadSearch" type="reset" style="background-color: #656565;color: rgb(255,255,255);">
                    <i class="fa fa-close" style="margin: 3px;"></i>Cancel
                </button>
                <button class="btn" type="submit" style="background-color: #58ba25;color: rgb(255,255,255);">
                    <i class="fa fa-search" style="margin: 3px;"></i>Search
                </button>
            </div>
        </form>
    </div>
@endif
		