<link rel="stylesheet" href="{{asset('css/brandCarousel.css')}}">
<div>
    <div class="container">
        <div class="container-fluid">
            <div id="carousel-brand" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    @foreach($marques as $marque)
                        @if ($loop->first)
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                <img src="{{ asset('files/marque/'. $marque->marque_symbole) }}" width="80" height="60" class="img-fluid mx-auto d-block" alt="{{ $marque->marque_nom }}">
                            </div>
                        @else
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                <img src="{{ asset('files/marque/'. $marque->marque_symbole) }}" width="80" height="60" class="img-fluid mx-auto d-block" alt="{{ $marque->marque_nom }}">
                            </div>
                        @endif
                    @endforeach
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1667.png" class="img-fluid mx-auto d-block" alt="img1">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1636.png" class="img-fluid mx-auto d-block" alt="img2">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1641.png" class="img-fluid mx-auto d-block" alt="img3">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1662.png" class="img-fluid mx-auto d-block" alt="img4">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1658.png"  class="img-fluid mx-auto d-block" alt="img5">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1660.png" class="img-fluid mx-auto d-block" alt="img6">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1661.png"  class="img-fluid mx-auto d-block" alt="img7">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
                    {{--                        <img src="http://pngimg.com/uploads/car_logo/car_logo_PNG1664.png" class="img-fluid mx-auto d-block" alt="img8">--}}
                    {{--                    </div>--}}
                </div>
                <a class="carousel-control-prev" href="#carousel-brand" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-brand" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>