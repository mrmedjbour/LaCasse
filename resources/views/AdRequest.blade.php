@extends('layouts.app')
@section('content')
    <section id="sectionContent">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="searchResultTitle"><strong>Purchase requests</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 order-2 order-md-1" id="content">
                    <div class="d-flex" id="annonceSearch">
                        <div id="right" class="width100">
                            <div class="d-flex justify-content-between align-items-center" id="annonce_top">
                                <h2 id="annonce_title"><strong>I need a radiator for Peugeot 307 -2011</strong></h2><span class="d-none d-lg-inline-block">26 Jan 2020</span>
                            </div>
                            <div id="annonce_info">
                                <ul class="list-unstyled" style="margin: 5px 0px;">
                                    <li class="d-lg-none">&nbsp;<span class="annonce_date">26 Jan 2020</span>
                                    </li>
                                    <li class="annonceClientName"><a class="d-flex align-items-center" href="#"><i class="fas fa-address-card"></i>&nbsp;Hamid Medjbour&nbsp;<br></a>
                                    </li>
                                </ul>
                                <p class="text-justify annoncePar">convallis tellus id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet...</p>
                            </div>
                            <div class="d-flex justify-content-between justify-content-lg-end" id="annonce_btn"><a class="btn btn-sm shadow-none contact" role="button" id="fContactMsg" data-toggle="modal" data-target="#contact_1"><i class="fas fa-comment-dots"></i>Contact</a><a
                                        class="btn btn-sm shadow-none details" role="button" href="detail-achat.html"><i class="fa fa-clone"></i>Details</a>
                            </div>
                        </div>
                        <div class="modal fade SendModel" role="dialog" tabindex="-1" id="contact_1" aria-hidden="true">
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
                    </div>
                    <div class="d-flex justify-content-around align-items-center justify-content-sm-between sPage" style="padding: 2px 10px;">
                        <div class="show">
                            <form class="form-inline d-inline-flex" method="get">
                                <div class="form-group d-flex align-items-xl-center">
                                    <label class="d-flex align-items-center" for="show">Show</label>
                                    <select class="form-control form-control-sm widthAuto" name="show">
                                        <option value="10">10</option>
                                        <option value="15" selected="">15</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <ul class="list-inline d-inline-flex align-items-center" id="pagination">
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#">1</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#">2</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#">3</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#"><i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-1 order-md-2" id="sideFilter">
                    <div class="sideFilter" style="/*margin: 0px;*/">
                        <div id="sort">
                            <form class="form-inline" method="get" action="#">
                                <div class="form-group d-flex justify-content-around align-items-center sortByG">
                                    <label for="sortBy"><i class="fas fa-sort-amount-down fa-lg"></i>Sort By&nbsp;</label>
                                    <select class="form-control form-control-sm widthAuto" id="sortBy" name="sortBy">
                                        <option value="date" selected="">Date Asc</option>
                                        <option value="date">Date Desc</option>
                                        <option value="location">Location Asc</option>
                                        <option value="location Desc">Location Desc</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div id="filter">
                            <div class="d-flex justify-content-between align-items-center filterHead" id="filterHead">
                                <div class="text-center width100"><span><i class="fa fa-filter fa-lg" style="color: #0078c3;margin-right: 3px;"></i>Filter</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center navbar-toggler toggler-example" id="idFilterCollapse" data-toggle="collapse" aria-controls="filterBody" data-target="#filterBody" aria-expanded="false"><i class="fas fa-plus"></i>
                                </div>
                            </div>
                            <div id="filterBody" class="collapse navbar-collapse">
                                <form method="get">
                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">
                                        <label for="Willya">Willya</label>
                                        <select class="form-control form-control-sm widthAuto" name="Willya">
                                            <option value="35">Boumerdes</option>
                                            <option value="15">Tizi ouzou</option>
                                            <option value="16">Alger</option>
                                            <option value="" selected="" disabled="" hidden="">Willya</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">
                                        <label for="Willya">Daira</label>
                                        <select class="form-control form-control-sm widthAuto" name="Daira">
                                            <option value="35009">ISSER</option>
                                            <option value="35000">Boumerdes</option>
                                            <option value="35030" disabled="" hidden="">Borj Menail</option>
                                            <option value="" selected="" hidden="" disabled="">Daira</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">
                                        <label for="Willya">Commune</label>
                                        <select class="form-control form-control-sm widthAuto" name="Daira">
                                            <option value="35009">ISSER</option>
                                            <option value="" selected="" disabled="" hidden="">COMMUNE</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection