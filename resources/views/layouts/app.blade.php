<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome5-overrides.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="{{ asset('css/breadcrumb.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navigation-e-commerce.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleSendMsgBox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/x-dropdown.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('select2/dist/css/select2.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('select2/dist/css/select2-bootstrap4.min.css') }}">--}}
    @if(Route::currentRouteName() == 'directory' OR Route::currentRouteName() == 'profile')
        @mapstyles
    @endif
</head>
<body>
@guest
    @include('layouts.header')
@else
    @include('layouts.headerAuth')
@endguest

@if( Route::currentRouteName() != 'index')
    <div id="breadCrumb" style="margin-top: 2em;padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div>
                        <ul class="list-inline text-capitalize d-flex align-items-center" id="breadCrumbList" style="margin-bottom: 0;font-size: 0px;">
                            <li class="list-inline-item" id="beadCrumbHome"><a href="{{route('index')}}"><i class="fa fa-home fa-lg" style="color: #58ba25;"></i></a></li>
                            <li class="list-inline-item" id="beadCrumbPage"><a href="#">» Search Results<br></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@yield('content')

@include('layouts.footer')
