@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row" id="casse-directory">
                <div class="col-lg-4" id="casses">
                    @foreach($casses as $casse)
                        <div class="d-inline-flex justify-content-between align-items-center w-100 mt-2 py-1" style="border:1px solid #ddd;box-shadow:0 2px 5px 0 rgba(0, 0, 0, 0.26);">
                            <div class="p-1">
                                <img class="rounded-circle" src="{{ asset('files/avatar/'.$casse->user->user_avatar) }}" style="height: 70px;width: 70px;"/>
                            </div>
                            <div class="p-2 w-100">
                                <a class="text-decoration-none" href="{{route('profile' , 1)}}" target="_blank">
                                    <h5 class="m-0" style="color:#007bff;">{{ $casse->casse_nom }}</h5>
                                </a>
                                <span class="text-secondary">
                                <i class="fa fa-map-marker pr-1"></i>{{ Str::title($casse->commune->commune_nom .' '.$casse->commune->daira->daira_nom .' '.$casse->commune->daira->wilaya->wilaya_nom) }}
                            </span>
                                <div class="text-right px-2">
                                    <a class="mx-1" href="#">
                                        <i class="fa fa-map fa-lg" style="color:#55a90d;"></i>
                                    </a>
                                    <a class="mx-1" href="{{route('profile' , $casse->casse_id)}}" target="_blank">
                                        <i class="fa fa-external-link fa-lg" style="color:#3e3e3e;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col dash-info order-first order-xs-first order-sm-first order-md-first order-lg-last">
                    <style>
                        .gnw-map-service {
                            height: 500px;
                        }
                    </style>
                    <div id="map">
                        @map($map)
                    </div>
                    <script>
                        window.addEventListener('LaravelMaps:MarkerClicked', function (event) {
                            var element = event.detail.element;
                            var map = event.detail.map;
                            var marker = event.detail.marker;
                            var service = event.detail.service;
                            console.log('marker clicked', element, map, marker, service);
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection