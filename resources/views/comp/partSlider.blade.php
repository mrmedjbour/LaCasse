<link rel="stylesheet" href="{{ asset('css/partSlider.css') }}">
<div id="part-carousel-1" class="carousel slide PSlider" data-ride="carousel" data-interval="9000">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="w-100 d-block" src="{{asset('img/annonce-img.png')}}">
        </div>
        <div class="carousel-item">
            <img class="w-100 d-block" src="{{asset('img/annonce-img-1.png')}}">
        </div>
        <div class="carousel-item">
            <img class="w-100 d-block" src="{{asset('img/profile-img.jpg')}}" alt="Slide Image">
        </div>
    </div>
    <div><a class="carousel-control-prev" href="#part-carousel-1" role="button" data-slide="prev"><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#part-carousel-1" role="button" data-slide="next"><span class="sr-only">Next</span></a>
    </div>
    <ol class="d-flex d-sm-none carousel-indicators point">
        <li class="active" data-slide-to="0" data-target="#part-carousel-1">Item 1</li>
        <li data-slide-to="1" data-target="#part-carousel-1">Item 2</li>
        <li data-slide-to="2" data-target="#part-carousel-1">Item 3</li>
    </ol>
    <ol class="d-none d-sm-flex justify-content-start carousel-indicators carousel-img">
        <li class="active" data-slide-to="0" data-target="#part-carousel-1" style="background-image:url('{{asset('img/annonce-img.png')}}');"></li>
        <li data-slide-to="1" data-target="#part-carousel-1" style="background-image:url('{{asset('img/annonce-img-1.png')}}');">Item 2</li>
        <li data-slide-to="2" data-target="#part-carousel-1" style="background-image:url('{{asset('img/profile-img.jpg')}}');" style="opacity: 1;">Item 3</li>
    </ol>
</div>