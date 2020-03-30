<section id="sectionContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="searchResultTitle">{{ Str::title($ads->pieces->where('piece_id', $part)[0]->piece_nom.' - '.$ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</h1>
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
                            <span class="text-nowrap">Posted by:</span>
                            @if($ads->user->role_id == 2)
                                <a class="text-nowrap" href="/casse/123"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->casse->casse_nom }}</a>
                            @else
                                <a class="text-nowrap"><i class="fas fa-address-card mr-1"></i>{{ $ads->user->user_prenom .' '. $ads->user->user_nom }}</a>
                            @endif
                        </div>
                        <div class="d-inline-block">
                            <span class="text-nowrap">Posted on:</span>
                            <a class="text-nowrap">{{ \Carbon\Carbon::parse($ads->annonce_date)->format('d M Y')}}</a>
                        </div>
                    </div>
                    <div id="CWays">
                        <p style="color: #555555;">For parts pricing, or other inquiries:</p>
                        @auth()
                            <button class="btn btn-lg shadow-none" id="fContactMsg" type="button" data-toggle="modal" data-target="#contact">
                                <i class="fas fa-comment-dots fa-lg"></i>Contact The Advertiser
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
                            <div class="modal-header"><span class="modal-title"><i class="fa fa-send fa-lg"></i>Send a message</span>
                                <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: red;"><strong>×</strong></span>
                                </button>
                            </div>
                            <form id="form_annonce_1" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <img class="img-thumbnail" src="{{asset('files/annonce/' . $ads->images[0]->img_nom)}}  " loading="auto" alt="Annonce">
                                        <div>
                                            <span>{{ Str::title($ads->pieces->where('piece_id', $part)[0]->piece_nom) }} - {{ Str::title($ads->modele->marque->marque_nom) }} {{ Str::title($ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</span>
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
                                        <label for="message">* Message:</label>
                                        <textarea class="form-control form-control-sm" id="message" name="message" placeholder="Write a message" rows="0" spellcheck="false" wrap="soft" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <button class="btn btn-sm shadow-none" type="reset" data-dismiss="modal"><i class="far fa-times-circle"></i>Close</button>
                                    <button class="btn btn-sm shadow-none" id="fsendMsg" type="submit"><i class="fa fa-send"></i>Send</button>
                                </div>
                            </form>
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
                                <td>Part category:</td>
                                <td class="val">{{ Str::title($ads->pieces->where('piece_id', $part)[0]->cat->cat_nom) }}</td>
                            </tr>
                            <tr>
                                <td>Part name:</td>
                                <td class="val">{{ Str::title($ads->pieces->where('piece_id', $part)[0]->piece_nom) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    @if ($ads->annonce_desc)
                        <h4><strong>Description:</strong></h4>
                        <p class="text-justify">{{ $ads->annonce_desc }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>