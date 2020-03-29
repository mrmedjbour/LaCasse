<section id="sectionContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="searchResultTitle"><strong>{{ Str::title($ads->pieces->where('piece_id', $part)[0]->piece_nom) }} - {{ Str::title($ads->modele->marque->marque_nom) }} {{ Str::title($ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}</strong></h1>
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
                                <a class="text-nowrap" href="#"><i class="fas fa-address-card mr-1"></i>Casse De Moh Dezairi</a>
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
                                        <td>
                                            <a class="text-nowrap partPhones" href="tel:+213512345678"><i class="fas fa-phone-square-alt fa-lg"></i>{{ $phone }}</a>
                                        </td>
                                        <td>( {{ Str::title($ads->user->user_prenom) }} )</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-bottom: 1.5em;"><a class="d-flex align-items-center" href="#" style="color: #444;padding-left: .75rem;" target="_blank"><i class="fas fa-map-marker-alt fa-2x" style="color: #0078c3;margin-right: 6px;"></i><span style="font-size: 1rem;">En Face Rue Nationnel N5<br>Tijelabine, Boumerdes 35000</span></a>
                        </div>
                    </div>
                </div>
                <div class="modal fade SendModel" role="dialog" tabindex="-1" id="contact" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><span class="modal-title"><i class="fa fa-send fa-lg"></i>Send a message</span>
                                <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: red;"><strong>×</strong></span>
                                </button>
                            </div>
                            <form id="form_annonce_1" method="post">
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <img class="img-thumbnail" src="{{asset('img/annonce-img.png')}}" loading="auto" alt="Annonce picture">
                                        <div><span>Radiator Peugeot 307 - 2011</span>
                                            <ul class="list-unstyled">
                                                <li><a class="d-flex align-items-center" href="#"><i class="fas fa-address-card"></i>Casse De Moh Dezairi<br></a>
                                                </li>
                                                <li><a class="d-flex align-items-center" href="#"><i class="fas fa-map-marker-alt"></i>Tijelabine, Boumerdes<br></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="msg">
                                        <input class="form-control" type="hidden" name="annonce_id">
                                        <label for="message">* Message:</label>
                                        <textarea class="form-control form-control-sm" id="message" name="message" placeholder="Write a message" rows="0" spellcheck="false" wrap="soft" required=""></textarea>
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
                                <td class="val">Cooling and Heating</td>
                            </tr>
                            <tr>
                                <td>Part name:</td>
                                <td class="val">Radiator</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h4><strong>Description:</strong></h4>
                    <p class="text-justify">&nbsp; &nbsp;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        <br>
                        <br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        <br>
                        <br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                </div>
            </div>
        </div>
    </div>
</section>