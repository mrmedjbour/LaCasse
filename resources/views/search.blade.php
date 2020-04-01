@extends('layouts.app')
@section('content')
    <section id="sectionContent">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="searchResultTitle">Search results for: {{ Str::title($request->partTitle.' '.$request->makeTitle.' '.$request->modeleTitle) }} {{ $request->year? "- $request->year":'' }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 order-2 order-md-1" id="content">
                    @foreach($result as $ad)
                        @include('comp.searchAd')
                    @endforeach
                    @auth()
                        @include('comp.contactSearchModal')
                    @endauth
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
                            <li class="list-inline-item"><a class="d-flex justify-content-center align-items-center" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="d-flex justify-content-center align-items-center" href="#">1</a>
                            </li>
                            <li class="list-inline-item"><a class="d-flex justify-content-center align-items-center" href="#">2</a>
                            </li>
                            <li class="list-inline-item"><a class="d-flex justify-content-center align-items-center" href="#">3</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="d-flex justify-content-center align-items-center" href="#">
                                    <br><i class="fa fa-angle-right"></i>
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