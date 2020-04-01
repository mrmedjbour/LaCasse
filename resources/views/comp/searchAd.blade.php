<div class="d-flex" id="annonceSearch">
    <div id="left">
        <img class="img-thumbnail" id="annonce_img" src="{{asset('img/annonce-img.png')}}" alt="Annonce picture" loading="auto">
    </div>
    <div id="right" class="width100">
        <div class="d-flex justify-content-between align-items-center" id="annonce_top">
            <h2 id="annonce_title">Radiator Peugeot 307 - 2011</h2><span class="d-none d-lg-inline-block">26 Jan 2020</span>
        </div>
        <div id="annonce_info">
            <ul class="list-unstyled" style="margin: 5px 0px;">
                <li class="d-lg-none">&nbsp;<span class="annonce_date">26 Jan 2020</span>
                </li>
                <li class="annonceClientName"><a class="d-flex align-items-center" href="{{route('profile'," Casse De Moh Dezairi ")}}"><i class="fas fa-address-card"></i>Casse De Moh Dezairi<br></a>
                </li>
                <li class="annonceClientAddress"><a class="d-flex align-items-center" href="#"><i class="fas fa-map-marker-alt"></i>Tijelabine, Boumerdes<br></a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-between justify-content-lg-end" id="annonce_btn">
            @auth()
                <a class="btn btn-sm shadow-none contact" role="button" id="fContactMsg" data-toggle="modal" data-target="#contact_1"><i class="fas fa-comment-dots"></i>Contact</a>
            @endauth
            <a class="btn btn-sm shadow-none details" role="button" href="#"><i class="fa fa-clone"></i>Details</a>
        </div>
    </div>
    @auth()
        @include('comp.contactSearchModal')
    @endauth
</div>