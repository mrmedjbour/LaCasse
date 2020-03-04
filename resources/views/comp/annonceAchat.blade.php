<section id="sectionContent">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="searchResultTitle"><strong>i need a radiator for Peugeot 307 - 2011</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <div id="PartDesc" class="ToBuy">
                    <h4>Part(s) that i need :</h4>
                    <div class="table-responsive table-borderless">
                        <table class="table table-bordered table-sm partToBuy">
                            <tbody>
                            <tr>
                                <td class="val">Radiator</td>
                            </tr>
                            <tr>
                                <td class="val"><strong>Car engine 1.6</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="val">Car door</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div id="partSideCont" style="overflow: hidden;">
                    <div id="postedBy">
                        <div class="d-inline-block"><span class="text-nowrap">Posted by:</span><a class="text-nowrap" href="{{ route('profile','hamid medjbour') }}"><i class="fas fa-address-card"></i>Hamid Medjbour</a>
                        </div>
                        <div class="d-inline-block"><span class="text-nowrap">Posted on:</span><a class="text-nowrap" href="#">26 Jan 2020</a>
                        </div>
                    </div>
                    <div id="CWays">
                        <p style="color: #555555;">For parts offers, or other inquiries:</p>
                        @auth()
                        <button class="btn btn-lg shadow-none" id="fContactMsg" type="button" data-toggle="modal" data-target="#contact"><i class="fas fa-comment-dots fa-lg"></i>Contact</button>
                        @endauth
                        <div class="table-responsive table-borderless">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <td><a class="text-nowrap partPhones" href="tel:+213512345678"><i class="fas fa-phone-square-alt fa-lg"></i>0512 345 678</a>
                                    </td>
                                    <td>(Hamid)</td>
                                </tr>
                                </tbody>
                            </table>
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
                            <form id="form_annonce_1" method="post">
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <div><span>i need a radiator for Peugeot 307 - 2011</span>
                                            <ul class="list-unstyled">
                                                <li><a class="d-flex align-items-center" href="#"><i class="fas fa-address-card"></i>Hamid Medjbour<br></a>
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
                @endauth
            </div>
        </div>
    </div>
</section>