@extends('layouts.app')
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col content-section">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                    @endif
                    @if (Auth::user()->role_id == 5)
                        <div class="row">
                            <div class="col">
                                <div class="Infobox">
                                    <i class="fa fa-user membership"></i>
                                    <span class="heading"><strong>membership</strong></span>
                                    <span class="value">{{ Auth::user()->role->role_nom }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-folder-open-o an-statistic"></i>
                                    <span class="heading"><strong>My Ads</strong></span>
                                    <span class="value"><strong>{{ Auth::user()->annonces->count() }}</strong></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-comments msg-static"></i>
                                    <span class="heading"><strong>Unread Messages</strong></span>
                                    <span class="value"><strong>{{ $unreadMsgCount }}</strong></span>
                                </div>
                            </div>
                        </div>
                    @elseif(Auth::user()->role_id == 4 OR Auth::user()->role_id == 3)
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-user membership"></i>
                                    <span class="heading"><strong>membership</strong></span>
                                    <span class="value">{{ Auth::user()->role->role_nom }}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fas fa-warehouse" style="font-size:3em;color:#eb650c"></i>
                                    <span class="heading"><strong>Casse</strong></span>
                                    <span class="value">{{ Auth::user()->casse->casse_nom }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-folder-open-o an-statistic"></i>
                                    <span class="heading"><strong>Ads</strong></span>
                                    <span class="value"><strong>{{ Auth::user()->annonces->count() }}</strong></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-comments msg-static"></i>
                                    <span class="heading"><strong>Unread Messages</strong></span>
                                    <span class="value"><strong>{{ $unreadMsgCount }}</strong></span>
                                </div>
                            </div>
                        </div>
                    @elseif(Auth::user()->role_id == 2)
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-user membership"></i>
                                    <span class="heading"><strong>membership</strong></span>
                                    <span class="value">{{ Auth::user()->role->role_nom }}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fas fa-warehouse" style="font-size:3em;color:#eb650c"></i>
                                    <span class="heading"><strong>Casse</strong></span>
                                    <span class="value">{{ Auth::user()->casse->casse_nom }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-folder-open-o an-statistic"></i>
                                    <span class="heading"><strong>Ads</strong></span>
                                    <span class="value"><strong>{{ Auth::user()->annonces->count() }}</strong></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-comments msg-static"></i>
                                    <span class="heading"><strong>Unread Messages</strong></span>
                                    <span class="value"><strong>{{ $unreadMsgCount }}</strong></span>
                                </div>
                            </div>
                        </div>
                    @elseif(Auth::user()->role_id == 1)
                        <div class="row">
                            <div class="col">
                                <div class="Infobox">
                                    <i class="fa fa-user membership"></i>
                                    <span class="heading"><strong>membership</strong></span>
                                    <span class="value">{{ Auth::user()->role->role_nom }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-folder-open-o an-statistic"></i>
                                    <span class="heading"><strong>Total Ads</strong></span>
                                    <span class="value"><strong>{{ Auth::user()->annonces->count() }}</strong></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-comments msg-static"></i>
                                    <span class="heading"><strong>Unread Messages</strong></span>
                                    <span class="value"><strong>{{ $unreadMsgCount }}</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fa fa-users an-statistic"></i>
                                    <span class="heading"><strong>Total Users</strong></span>
                                    <span class="value"><strong>30</strong></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="Infobox">
                                    <i class="fas fa-warehouse" style="font-size:3em;color:#eb650c"></i>
                                    <span class="heading"><strong>Total Casse</strong></span>
                                    <span class="value"><strong>10</strong></span>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>@endsection