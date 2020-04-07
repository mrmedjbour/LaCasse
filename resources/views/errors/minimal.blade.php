<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/Navigation-e-commerce.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleSendMsgBox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/x-dropdown.css') }}">
</head>
<body>
@guest
    @include('layouts.header')
@else
    @include('layouts.headerAuth')
@endguest
<script>
    var x = document.getElementById("breadCrumb").style.display = "none";
</script>
<section id="sectionContent">
    <div class="container py-4">
        <div class="row" style="min-height: 45vh;">
            <div class="col-12">
                @yield('code')
                <img src="{{ asset('/img/break.svg') }}">
                @yield('message')
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')