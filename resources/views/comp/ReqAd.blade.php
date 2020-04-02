<div class="d-flex" id="annonceSearch">
    <div id="right" class="width100">
        <div class="d-flex justify-content-between align-items-center" id="annonce_top">
            <a class="text-decoration-none" href="{{ route("ad.buy", $ad->annonce_id) }}" target="_blank">
                <h2 id="annonce_title">@if ($ad->pieces->count() > 1){{ "I need Parts for" }}@else{{ 'I need '.Str::title($ad->pieces->first()->piece_nom).' for ' }}@endif{{ Str::title($ad->modele->marque->marque_nom.' '.$ad->modele->modele_nom) }}{{$ad->modele_annee?" - $ad->modele_annee":''}}</h2>
            </a>
            <span class="d-none d-lg-inline-block">{{ $ad->annonce_date->format('d M y') }}</span>
        </div>
        <div id="annonce_info">
            <ul class="list-unstyled my-1">
                <li class="d-lg-none">&nbsp;<span class="annonce_date">{{ $ad->annonce_date->format('d M y') }}</span>
                </li>
                <li class="annonceClientName">
                    @if($ad->user->role_id == 2)
                        <a class="d-flex align-items-center" href="{{route('profile',"Casse De Moh Dezairi")}}" target="_blank" id="name">
                            <i class="fas fa-address-card mr-1"></i>{{ $ad->user->casse->casse_nom }}
                        </a>
                    @else
                        <a class="d-flex align-items-center" id="name">
                            <i class="fas fa-address-card mr-1"></i>{{ $ad->user->user_prenom }}
                        </a>
                    @endif
                </li>
            </ul>
            <p class="text-justify annoncePar">{{  Str::limit(strip_tags($ad->annonce_desc), 100) }}</p>
        </div>
        <div class="d-flex justify-content-between justify-content-lg-end" id="annonce_btn">
            @auth()
                <a class="btn btn-sm shadow-none contact" role="button" id="SrBtnCon" data-ad="{{ $ad->annonce_id }}">
                    <i class="fas fa-comment-dots"></i>Contact
                </a>
            @endauth
            <a class="btn btn-sm shadow-none details" role="button" href="{{ route("ad.buy", $ad->annonce_id) }}" target="_blank">
                <i class="fa fa-clone"></i>Details
            </a>
        </div>
    </div>
</div>