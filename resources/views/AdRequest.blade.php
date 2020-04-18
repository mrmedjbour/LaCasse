@extends('layouts.app')
@section('content')
    <section id="sectionContent">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="searchResultTitle"><strong>{{__('Purchase requests')}}</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 order-2 order-md-1" id="content">
                    @if($result->count() == 0)
                        <div class="text-center py-5">
                            <img width="120" class="mb-2 d-inline-block" src="{{ asset('/img/no-result.svg') }}"/>
                            <h3 class="text-black-50">{{__('Sorry, No Requests found')}}</h3>
                        </div>
                    @endif
                    @foreach($result as $ad)
                        @include('comp.ReqAd')
                    @endforeach
                    @auth()
                        @include('comp.contactReqModal')
                    @endauth
                    {{ $result->appends($_GET)->links('vendor.pagination.searchPagination') }}
                </div>
                @if($result->count() != 0)
                    <div class="col-12 col-md-4 order-1 order-md-2" id="sideFilter">
                        <div class="sideFilter">
                            <div id="sort">
                                <form class="form-inline" method="get">
                                    @if(isset($request->show))
                                        <input type="hidden" name="show" value="{{ request()->query('show') }}"/>
                                    @endif
                                    <div class="form-group d-flex justify-content-around align-items-center sortByG">
                                        <label for="sortBy"><i class="fas fa-sort-amount-down fa-lg"></i>{{__('Sort By')}}&nbsp;</label>
                                        <select class="form-control form-control-sm widthAuto" id="sortBy" name="sortBy">
                                            <option value="desc">{{__('Date Desc')}}</option>
                                            <option value="asc" @if ($request->sortBy == "asc") selected @endif>{{__('Date Asc')}}</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            {{--                        <div id="filter">--}}
                            {{--                            <div class="d-flex justify-content-between align-items-center filterHead" id="filterHead">--}}
                            {{--                                <div class="text-center width100"><span><i class="fa fa-filter fa-lg" style="color: #0078c3;margin-right: 3px;"></i>Filter</span>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="d-flex justify-content-center align-items-center navbar-toggler toggler-example" id="idFilterCollapse" data-toggle="collapse" aria-controls="filterBody" data-target="#filterBody" aria-expanded="false"><i class="fas fa-plus"></i>--}}
                            {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div id="filterBody" class="collapse navbar-collapse">--}}
                        {{--                                <form method="get">--}}
                        {{--                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">--}}
                        {{--                                        <label for="Willya">Willya</label>--}}
                        {{--                                        <select class="form-control form-control-sm widthAuto" name="Willya">--}}
                        {{--                                            <option value="35">Boumerdes</option>--}}
                        {{--                                            <option value="15">Tizi ouzou</option>--}}
                        {{--                                            <option value="16">Alger</option>--}}
                        {{--                                            <option value="" selected="" disabled="" hidden="">Willya</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">--}}
                        {{--                                        <label for="Willya">Daira</label>--}}
                        {{--                                        <select class="form-control form-control-sm widthAuto" name="Daira">--}}
                        {{--                                            <option value="35009">ISSER</option>--}}
                        {{--                                            <option value="35000">Boumerdes</option>--}}
                        {{--                                            <option value="35030" disabled="" hidden="">Borj Menail</option>--}}
                        {{--                                            <option value="" selected="" hidden="" disabled="">Daira</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group d-flex justify-content-between align-items-center flex-wrap width100">--}}
                        {{--                                        <label for="Willya">Commune</label>--}}
                        {{--                                        <select class="form-control form-control-sm widthAuto" name="Daira">--}}
                        {{--                                            <option value="35009">ISSER</option>--}}
                        {{--                                            <option value="" selected="" disabled="" hidden="">COMMUNE</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </div>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection