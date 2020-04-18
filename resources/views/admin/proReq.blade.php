@extends('layouts.app') @section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="GoPro" class="p-4" method="POST" action="{{ route("pro.update", $dem->dem_id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="w-100">
                                <h5 class="mb-2">{{__('Demand Information')}} ( @if($dem->dem_etat == 1)<span class="text-success">{{__('confirmed')}}</span>@elseif($dem->dem_etat == 2)<span class="text-danger">{{__('rejected')}}</span>@else<span class="text-warning">{{__('waiting')}}</span>@endif )
                                </h5>
                                <div class="form-group">
                                    <label class="weight500">{{__('First Name')}}:</label>
                                    <input class="form-control" type="text" value="{{ $dem->user->user_prenom }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="weight500">{{__('Last Name')}}:</label>
                                    <input class="form-control" type="text" value="{{ $dem->user->user_nom }}" readonly>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="weight500">{{__('Casse name')}}:</label>
                                    <input class="form-control" type="text" value="{{ $dem->casse->casse_nom }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="weight500">{{__('Casse address')}}:</label>
                                    <p class="font-weight-normal pl-2 text-dark">{{ $dem->casse->casse_adr }}</p>
                                    <p class="font-weight-normal pl-2 text-dark">{{ $dem->casse->commune->commune_nom }}, {{ $dem->casse->commune->daira->daira_nom }}, {{ $dem->casse->commune->daira->wilaya->wilaya_nom }}</p>
                                </div>
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput">
                                    <label class="weight500">{{__('Phone Numbers')}}:</label>
                                    @foreach($dem->user->user_tel as $phone)
                                        <input class="form-control mb-2" type="tel" value="{{ phone($phone, 'DZ') }}" readonly>
                                    @endforeach
                                </div>
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput-1">
                                    <label class="weight500">{{__('GPS coordinates')}}:</label>
                                    <input class="form-control" type="text" name="casse_loc" value="0,0" required minlength="3">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="weight500">{{__('trade register number')}}:</label>
                                    <input class="form-control" type="text" value="{{ $dem->casse->casse_rc }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="weight500 d-block">{{__('trade register document')}}:&nbsp;</label>
                                    <a class="text-decoration-none" href="{{ route("pro.doc", $dem->dem_id) }}" target="_blank">{{ $dem->dem_doc }}<i class="fa fa-share-square-o ml-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <a class="btn btn-danger shadow-none m-2 px-5 font-weight-bold text-white" id="BtnrejectDemPro" role="button">{{__('Reject')}}</a>
                                <button class="btn btn-success shadow-none m-2 px-5 font-weight-bold" type="submit">{{__('Validate')}}</button>
                            </div>
                        </form>
                        <form class="d-none" method="post" id="rejectDemPro" action="{{ route("pro.destroy", $dem->dem_id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection