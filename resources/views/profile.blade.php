@extends('layouts.app')

@section('content')

    <section>
        <div class="container profile-content">
            <div class="row">
                <div class="col profile-header">
                    <div style="background-image: url('{{asset('img/abandoned-orange-sedan-746684.jpg')}}')">
                        <img class="rounded-circle" src="{{asset('img/profile-5.jpeg')}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col available">
                    <div class="row">
                        <div class="col">
                            <h5>Available</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="available-brand">
                                <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1667.png">
                                <h4>Volkswagen<br></h4>
                                <div class="text-left">
                                    <div class="row model-dispo">
                                        <div class="col col-11 col-xs-11 col-sm-5 col-md-4 col-lg-4 col-xl-4"><span>Bora</span>
                                        </div>
                                        <div class="col col-11 col-xs-11 col-sm-5 col-md-4 col-lg-4 col-xl-4"><span>Caddy</span>
                                        </div>
                                        <div class="col col-11 col-xs-11 col-sm-5 col-md-4 col-lg-4 col-xl-4"><span>Golf Sportvan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 casse-side">
                    <h2 class="text-center">Casse De Moh Dezairi</h2>
                    <div class="casse-side-info"><span><i class="fa fa-phone-square"></i><br></span><span class="social-side-info-text">0512 345 678&nbsp;&nbsp;&nbsp;(Mohammed)<br></span>
                    </div>
                    <div class="casse-side-info"><span><i class="fa fa-phone-square"></i><br></span><span class="social-side-info-text">0512 345 678&nbsp;&nbsp;&nbsp;(Mohammed)<br></span>
                    </div>
                    <div class="casse-side-info"><span><i class="fa fa-phone-square"></i><br></span><span class="social-side-info-text">0512 345 678&nbsp;&nbsp;&nbsp;(Mohammed)<br></span>
                    </div>
                    <div class="casse-side-info" style="padding: 5px 20px;"><span><i class="fa fa-map-marker" style="color: #0078c3;"></i><br><span class="social-side-info-text-last">En Face Rue Nationnel N5<br>Tijelabine, Boumerdes 35000</span></span>
                    </div>
                    <div class="text-center casse-social"> <a href="#"><i class="fa fa-facebook-square" style="color: #005992;"></i></a>
                        <a href="#" <i class="fa fa-youtube-play" style="color: #d40e0e;">
                        </i>
                        </a> <a href="#"><i class="fa fa-twitter" style="color: #0078c3;"></i></a>
                    </div>
                    <div style="height: 300px;margin-top: 20px;">
                        <div style="border: 1px solid #7d7d7d;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1598.9589218823085!2d3.4904316291341613!3d36.724534301963615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5da68bc414d7678!2sCasse%20Auto%20Djamel!5e0!3m2!1sfr!2sdz!4v1582465610511!5m2!1sfr!2sdz" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection