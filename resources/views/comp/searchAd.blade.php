<div class="d-flex" id="annonceSearch">
    <div id="left" class="thumbSearchAd">
        @if ($ad->images->count() > 0)
            <img class="img-thumbnail" id="annonce_img" src="{{ asset('/files/annonce/' . $ad->images->first()->img_nom) }}" alt="Annonce picture" loading="auto">
        @else
            <img class="img-thumbnail" id="annonce_img" src="{{asset('img/car.svg')}}" alt="Annonce picture" loading="auto">
        @endif
    </div>
    <div id="right" class="width100">
        <div class="d-flex justify-content-between align-items-center" id="annonce_top">
            <a class="text-decoration-none" href="{{route("ad.sell", [$ad->annonce_id, $ad->pieces->where('piece_id', '=', $request->part)->first()->piece_id])}}" target="_blank">
                <h2 id="annonce_title">{{ Str::title($ad->pieces->where('piece_id', '=', $request->part)->first()->piece_nom.' '.$ad->modele->marque->marque_nom.' '.$ad->modele->modele_nom) }}{{$ad->modele_annee?" - $ad->modele_annee":''}}</h2>
            </a>
            <span class="d-none d-lg-inline-block">{{ $ad->annonce_date->format('d M y')}}</span>
        </div>
        <div id="annonce_info">
            <ul class="list-unstyled my-1">
                <li class="d-lg-none">&nbsp;<span class="annonce_date">{{ $ad->annonce_date->format('d M y')}}</span>
                </li>
                <li class="annonceClientName">
                    @if($ad->user->role_id == 2)
                        <a class="d-flex align-items-center" href="{{route('profile'," Casse De Moh Dezairi ")}}" id="name">
                            <i class="fas fa-address-card"></i>{{ $ad->user->casse->casse_nom }}
                        </a>
                    @else
                        <a class="d-flex align-items-center" id="name">
                            <i class="fas fa-address-card"></i>{{ $ad->user->user_prenom }}
                        </a>
                    @endif
                </li>
                <li class="annonceClientAddress">
                    @if ($ad->user->role_id == 2)
                        <a class="d-flex align-items-center" id="adr">
                            <i class="fas fa-map-marker-alt"></i>{{ Str::title($ad->user->casse->commune->commune_nom.', '.$ad->user->casse->commune->daira->daira_nom.', '.$ad->user->casse->commune->daira->wilaya->wilaya_nom) }}<br>
                        </a>
                    @else
                        <a class="d-flex align-items-center" id="adr">
                            <i class="fas fa-map-marker-alt"></i>{{ $ad->user->commune->commune_nom.', '.$ad->user->commune->daira->daira_nom.', '.$ad->user->commune->daira->wilaya->wilaya_nom }}<br>
                        </a>
                    @endif
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-between justify-content-lg-end" id="annonce_btn">
            @auth()
                <a class="btn btn-sm shadow-none contact" id="SrBtnCon" role="button" data-ad="{{ $ad->annonce_id }}" data-part="{{ $ad->pieces->where('piece_id', '=', $request->part)->first()->piece_id }}">
                    <i class="fas fa-comment-dots"></i>{{__('Contact')}}
                </a>
            @endauth
            <a class="btn btn-sm shadow-none details" role="button" target="_blank" href="{{route("ad.sell", [$ad->annonce_id, $ad->pieces->where('piece_id', '=', $request->part)->first()->piece_id])}}"><i class="fa fa-clone"></i>{{__('Details')}}</a>
        </div>
    </div>
</div>