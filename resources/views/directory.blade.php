@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row" id="casse-directory">
                <div class="col-lg-4" id="casses">

                    @for($i = 0; $i < 10; $i++)
                    <div class="align-items-lg-center casse">
                        <img class="rounded-circle" src="{{asset('img/profile-5.jpeg')}}">
                        <h6><a href="{{route('profile' , 1)}}">Casse de Moh Dezairi</a></h6>
                        <span class="casse-info"><i class="fa fa-map-marker"></i>Tijelabine, Boumerdes<br></span>
                        <span class="casse-info"><i class="fa fa-phone"></i>0551234567<br></span>
                        <span class="casse-links">
                            <a href="#"><i class="fa fa-map"></i></a>
                            <a href="{{route('profile' , 1)}}"><i class="fa fa-external-link"></i></a><br>
                        </span>
                    </div>
                    @endfor

                </div>
                <div class="col dash-info order-first order-xs-first order-sm-first order-md-first order-lg-last">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.9675702565482!2d3.6655801152907097!3d36.723340079722036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e79fdd3dd5d4f%3A0x4e8cda14149b3761!2sIsser%2C%20Issers!5e0!3m2!1sfr!2sdz!4v1583261373164!5m2!1sfr!2sdz" width="100%" height="500" frameborder="0" style="border:1px solid #444;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection