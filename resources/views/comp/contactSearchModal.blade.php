<div class="modal fade SendModel" role="dialog" tabindex="-1" id="contact_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"><span class="modal-title"><i class="fa fa-send fa-lg"></i>Send a message</span>
                <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #ff0000;"><strong>×</strong></span>
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