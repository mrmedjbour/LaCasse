<section id="sectionContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="searchResultTitle">
                    @if ($ads->pieces->count() <= 1)I Need {{ Str::title($ads->pieces[0]->piece_nom) }} -@else I Need Parts For @endif {{ Str::title($ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <div id="PartDesc" class="ToBuy">
                    <h4>Part(s) that i need :</h4>
                    <div class="table-responsive table-borderless">
                        <table class="table table-bordered table-sm partToBuy">
                            <tbody>
                            @foreach($ads->pieces as $part)
                                <tr>
                                    <td class="val">{{ $part->piece_nom }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($ads->annonce_desc)
                        <p class="text-justify">{{ $ads->annonce_desc }}</p>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div id="partSideCont" style="overflow: hidden;">
                    <div id="postedBy">
                        <div class="d-inline-block">
                            <span class="text-nowrap">Posted by:</span>
                            @if($ads->user->role_id == 2)
                                <a class="text-nowrap" href="/casse/123"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->casse->casse_nom }}</a>
                            @else
                                <a class="text-nowrap"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->user_prenom .' '. $ads->user->user_nom }}</a>
                            @endif
                        </div>
                        <div class="d-inline-block">
                            <span class="text-nowrap">Posted on:</span>
                            <a class="text-nowrap">{{ \Carbon\Carbon::parse($ads->annonce_date)->format('d M Y') }}</a>
                        </div>
                    </div>
                    <div id="CWays">
                        <p style="color: #555555;">For parts offers, or other inquiries:</p>
                        @auth()
                            <button class="btn btn-lg shadow-none" id="fContactMsg" type="button" data-toggle="modal" data-target="#contact">
                                <i class="fas fa-comment-dots fa-lg"></i>Contact
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
                                        <td>({{ $ads->user->user_prenom }})</td>
                                    </tr>
                                @endforeach
                                @if ($ads->user->role_id == 2)
                                    @foreach($ads->user->casse->buyer as $employee)
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
                @auth()
                    <div class="modal fade SendModel" role="dialog" tabindex="-1" id="contact" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header"><span class="modal-title"><i class="fa fa-send fa-lg"></i>Send a message</span>
                                    <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: red;"><strong>×</strong></span>
                                    </button>
                                </div>
                                <form id="AdContactAdvForm" method="post" action="{{ route('contactAd') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="d-flex">
                                            <div>
                                                <span>@if ($ads->pieces->count() <= 1)I Need {{ Str::title($ads->pieces[0]->piece_nom) }} -@else I Need Parts
                                                    For @endif {{ Str::title($ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</span>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        @if($ads->user->role_id == 2)
                                                            <a class="d-flex align-items-center"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->casse->casse_nom }}</a>
                                                        @else
                                                            <a class="d-flex align-items-center"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->user_prenom .' '. $ads->user->user_nom }}</a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="msg">
                                            <input class="form-control" type="hidden" name="ad" value="{{ $ads->annonce_id }}">
                                            <label for="message">* Message:</label>
                                            <textarea class="form-control form-control-sm" id="message" name="message" placeholder="Write a message" rows="0" spellcheck="false" wrap="soft" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button class="btn btn-sm shadow-none" type="reset" data-dismiss="modal"><i class="far fa-times-circle"></i>Close</button>
                                        <button class="btn btn-sm shadow-none" id="fsendMsg" type="submit"><i class="fa fa-send"></i>Send</button>
                                    </div>
                                </form>
                                <div id="success" style="display: none">
                                    <div class="modal-body">
                                        <img class="d-block" src="/img/success.svg"/>
                                        <h4 class="text-center">Message Sent!</h4>
                                        <p class="text-center">The part owner should be in touch soon. Thank you</p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button class="btn btn-sm shadow-none" type="button" data-dismiss="modal"><i class="fas fa-check"></i>Okey</button>
                                    </div>
                                </div>
                                <div id="fail" style="display: none">
                                    <div class="modal-body">
                                        <img class="d-block" width='70px' src="/img/fail.svg"/>
                                        <h4 class="text-center">Oops! Something went wrong!</h4>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button class="btn btn-sm shadow-none" type="button" data-dismiss="modal"><i class="fas fa-check"></i>Okey</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</section>