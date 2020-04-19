<section id="sectionContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="searchResultTitle">{{ Str::title($ads->pieces->where('piece_id', $part)->first()->piece_nom.' - '.$ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                @include('comp.partSlider')
            </div>
            <div class="col-12 col-sm-6">
                <div id="partSideCont">
                    <div class="d-lg-flex justify-content-lg-between" id="postedBy">
                        <div class="d-inline-block">
                            <span class="text-nowrap">{{__('Posted by')}}:</span>
                            @if($ads->user->role_id == 2)
                                <a class="text-nowrap" href="{{route('profile', [$ads->user->casse_id, Str::slug($ads->user->casse->casse_nom, '-')])}}"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->casse->casse_nom }}</a>
                            @else
                                <a class="text-nowrap"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->user_prenom .' '. $ads->user->user_nom }}</a>
                            @endif
                        </div>
                        <div class="d-inline-block">
                            <span class="text-nowrap">{{__('Posted on')}}:</span>
                            <a class="text-nowrap">{{ $ads->annonce_date->format('d M Y')}}</a>
                        </div>
                    </div>
                    <div id="CWays">
                        <p style="color: #555555;">{{__('For parts pricing, or other inquiries')}}:</p>
                        @auth()
                            <button class="btn btn-lg shadow-none" id="fContactMsg" type="button" data-toggle="modal" data-target="#contact">
                                <i class="fas fa-comment-dots fa-lg"></i>{{__('Contact The Advertiser')}}
                            </button>
                        @endauth
                        <div class="table-responsive table-borderless">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                @foreach($ads->user->user_tel as $phone)
                                    <tr>
                                        <td width="30%">
                                            <a class="text-nowrap partPhones" href="tel:{{ phone($phone, 'DZ') }}" target="_blank"><i class="fas fa-phone-square-alt fa-lg"></i>{{ phone($phone, 'DZ') }}</a>
                                        </td>
                                        <td>({{ Str::title($ads->user->user_prenom) }})</td>
                                    </tr>
                                @endforeach
                                @if ($ads->user->role_id == 2)
                                    @foreach($ads->user->casse->seller as $employee)
                                        @foreach($employee->user_tel as $phone)
                                            <tr>
                                                <td width="30%">
                                                    <a class="text-nowrap partPhones" href="tel:{{ phone($phone, 'DZ') }}" target="_blank"><i class="fas fa-phone-square-alt fa-lg"></i>{{ phone($phone, 'DZ') }}</a>
                                                </td>
                                                <td>({{ Str::title($employee->user_prenom) }})</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-2">
                            <a class="d-flex align-items-center pl-1" href="#" style="color: #444;" target="_blank">
                                <i class="fas fa-map-marker-alt fa-2x mr-1" style="color: #0078c3;"></i>
                                @if ($ads->user->role_id == 2)
                                    <span class="font-weight-normal">{{ Str::title($ads->user->casse->casse_adr) }}<br>{{ Str::title($ads->user->casse->commune->commune_nom.', '.$ads->user->casse->commune->daira->daira_nom.', '.$ads->user->casse->commune->daira->wilaya->wilaya_nom) }}</span>
                                @else
                                    <span class="font-weight-normal">{{ $ads->user->commune->commune_nom.', '.$ads->user->commune->daira->daira_nom.', '.$ads->user->commune->daira->wilaya->wilaya_nom }}</span>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal fade SendModel" role="dialog" tabindex="-1" id="contact" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="modal-title"><i class="fa fa-send fa-lg"></i>{{__('Send a message')}}</span>
                                <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: red;"><strong>×</strong></span>
                                </button>
                            </div>
                            <form id="AdContactAdvForm" method="post" action="{{ route('contactAd') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="d-flex">
                                        @if($ads->images->count() > 0)
                                            <img class="img-thumbnail" src="{{asset('files/annonce/' . $ads->images->first()->img_nom)}}" loading="auto" alt="Annonce">
                                        @else
                                            <img class="img-thumbnail" src="{{ asset('img/car.svg') }}" loading="auto" alt="Annonce">
                                        @endif
                                        <div>
                                            <span>{{ Str::title($ads->pieces->where('piece_id', $part)->first()->piece_nom) }} - {{ Str::title($ads->modele->marque->marque_nom) }} {{ Str::title($ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</span>
                                            <ul class="list-unstyled">
                                                <li>
                                                    @if($ads->user->role_id == 2)
                                                        <a class="d-flex align-items-center"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->casse->casse_nom }}</a>
                                                    @else
                                                        <a class="d-flex align-items-center"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->user_prenom .' '. $ads->user->user_nom }}</a>
                                                    @endif
                                                </li>
                                                <li>
                                                    @if ($ads->user->role_id == 2)
                                                        <a class="d-flex align-items-center"><i class="fas fa-map-marker-alt"></i>{{ Str::title($ads->user->commune->commune_nom.', '.$ads->user->commune->daira->daira_nom.', '.$ads->user->commune->daira->wilaya->wilaya_nom) }}</a>
                                                    @else
                                                        <a class="d-flex align-items-center"><i class="fas fa-map-marker-alt"></i>{{ Str::title($ads->user->commune->commune_nom.', '.$ads->user->commune->daira->daira_nom.', '.$ads->user->commune->daira->wilaya->wilaya_nom) }}</a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="msg">
                                        <input class="form-control" type="hidden" name="ad" value="{{ $ads->annonce_id }}">
                                        <input class="form-control" type="hidden" name="part" value="{{ $part }}">
                                        <label for="message">* {{__('Message')}}:</label>
                                        <textarea class="form-control form-control-sm" id="message" name="message" placeholder="{{__('Write your message..')}}" rows="0" spellcheck="false" wrap="soft" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <button class="btn btn-sm shadow-none" type="reset" data-dismiss="modal"><i class="far fa-times-circle"></i>{{__('Close')}}</button>
                                    <button class="btn btn-sm shadow-none" id="fsendMsg" type="submit"><i class="fa fa-send"></i>{{__('Send')}}</button>
                                </div>
                            </form>
                            <div id="success" style="display: none">
                                <div class="modal-body">
                                    <img class="d-block" src="/img/success.svg"/>
                                    <h4 class="text-center">{{__('Message Sent!')}}</h4>
                                    <p class="text-center">{{__('The ad owner should be in touch soon. Thank you')}}</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <button class="btn btn-sm shadow-none" type="button" data-dismiss="modal"><i class="fas fa-check"></i>{{__('Okey')}}</button>
                                </div>
                            </div>
                            <div id="fail" style="display: none">
                                <div class="modal-body">
                                    <img class="d-block" width='70px' src="/img/fail.svg"/>
                                    <h4 class="text-center">{{__('Oops! Something went wrong!')}}</h4>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <button class="btn btn-sm shadow-none" type="button" data-dismiss="modal"><i class="fas fa-check"></i>{{__('Okey')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row part-description">
            <div class="col-12">
                <div id="PartDesc">
                    <div class="table-responsive table-borderless">
                        <table class="table table-bordered table-sm" style="width: auto;">
                            <tbody>
                            <tr>
                                <td>{{__('Part category')}}:</td>
                                <td class="val">{{ Str::title($ads->pieces->where('piece_id', $part)->first()->cat->cat_nom) }}</td>
                            </tr>
                            <tr>
                                <td>{{__('Part name')}}:</td>
                                <td class="val">{{ Str::title($ads->pieces->where('piece_id', $part)->first()->piece_nom) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    @if ($ads->annonce_desc)
                        <h4><strong>{{__('Description')}}:</strong></h4>
                        <p class="text-justify">{{ $ads->annonce_desc }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>