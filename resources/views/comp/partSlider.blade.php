<link rel="stylesheet" href="{{ asset('css/partSlider.css') }}">
<div id="part-carousel-1" class="carousel slide PSlider" data-ride="carousel" data-interval="9000">
    <div class="carousel-inner" role="listbox">
        @foreach($ads->images as $img)
            @if ($loop->first)
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="{{ asset("files/annonce/" . $img->img_nom) }}" alt="Slide Image">
                </div>
            @else
                <div class="carousel-item">
                    <img class="w-100 d-block" style="min-height: 250px" src="{{ asset("files/annonce/" . $img->img_nom) }}" alt="{{ Str::title($ads->modele->marque->marque_nom) }} {{ Str::title($ads->modele->modele_nom) }}">
                </div>
            @endif
        @endforeach
    </div>
    <div>
        <a class="carousel-control-prev" href="#part-carousel-1" role="button" data-slide="prev"><span class="sr-only">Previous</span></a>
        <a class="carousel-control-next" href="#part-carousel-1" role="button" data-slide="next"><span class="sr-only">Next</span></a>
    </div>
    <ol class="d-flex d-sm-none carousel-indicators point">
        @foreach($ads->images as $img)
            @if ($loop->first)
                <li class="active" data-slide-to="{{ $loop->index }}" data-target="#part-carousel-1">Item</li>
            @else
                <li data-slide-to="{{ $loop->index  }}" data-target="#part-carousel-1">Item</li>
            @endif
        @endforeach
    </ol>
    <ol class="d-none d-sm-flex justify-content-start carousel-indicators carousel-img">
        @foreach($ads->images as $img)
            @if ($loop->first)
                <li class="active" data-slide-to="{{ $loop->index }}" data-target="#part-carousel-1" style="background-image:url('{{ asset("files/annonce/" . $img->img_nom) }}');"></li>
            @else
                <li data-slide-to="{{ $loop->index  }}" data-target="#part-carousel-1" style="background-image:url('{{ asset("files/annonce/" . $img->img_nom) }}');"></li>
            @endif
        @endforeach
    </ol>
</div>