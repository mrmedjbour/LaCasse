<div class="modal fade SendModel" role="dialog" tabindex="-1" id="SrContactModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"><span class="modal-title"><i class="fa fa-send fa-lg"></i>Send a message</span>
                <button class="btn shadow-none close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: red;"><strong>×</strong></span>
                </button>
            </div>
            <form id="AdContactAdvForm" method="post" action="{{ route('contactAd') }}">
                <div class="modal-body">
                    <div class="d-flex">
                        <div>
                            <span id="mtitle"></span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-flex align-items-center" id="name"></a>
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
                    <input type="hidden" name="ad" required>
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