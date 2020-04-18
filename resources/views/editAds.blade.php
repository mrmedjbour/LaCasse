@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="addAnn" class="p-4" action="{{route('annonce.update', $ad->annonce_id)}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="PUT" name="_method">
                            <div class="d-md-flex" id="top">
                                <div class="w-100">
                                    <label class="weight500">{{__('Ad type:')}} {{__(Str::title($ad->annonce_type))}}</label>
                                    <div class="form-group">
                                        <label for="Make" class="weight500">{{__('Select make')}}:</label>
                                        <select class="form-control" id="Make" name="make" required>
                                            <option selected disabled hidden>{{__('Select make')}}</option>
                                            <option value="1">Seat</option>
                                            <option value="2">Renault</option>
                                            <option value="3">Peugeot</option>
                                            <option value="4">Dacia</option>
                                            <option value="5">Citroen</option>
                                            <option value="6">Opel</option>
                                            <option value="7">Alfa romeo</option>
                                            <option value="8">Skoda</option>
                                            <option value="9">Chevrolet</option>
                                            <option value="10">Porsche</option>
                                            <option value="11">Honda</option>
                                            <option value="12">Subaru</option>
                                            <option value="13">Mazda</option>
                                            <option value="14">Mitsubishi</option>
                                            <option value="15">Lexus</option>
                                            <option value="16">Toyota</option>
                                            <option value="17">Bmw</option>
                                            <option value="18">Volkswagen</option>
                                            <option value="19">Suzuki</option>
                                            <option value="20">Mercedes benz</option>
                                            <option value="21">Saab</option>
                                            <option value="22">Audi</option>
                                            <option value="23">Kia</option>
                                            <option value="24">Land rover</option>
                                            <option value="25">Dodge</option>
                                            <option value="26">Chrysler</option>
                                            <option value="27">Ford</option>
                                            <option value="28">Hummer</option>
                                            <option value="29">Hyundai</option>
                                            <option value="30">Infiniti</option>
                                            <option value="31">Jaguar</option>
                                            <option value="32">Jeep</option>
                                            <option value="33">Nissan</option>
                                            <option value="34">Volvo</option>
                                            <option value="35">Daewoo</option>
                                            <option value="36">Fiat</option>
                                            <option value="37">Mini</option>
                                            <option value="38">Rover</option>
                                            <option value="39">Smart</option>
                                            <option value="40">Chery</option>
                                            <option value="41">Hino</option>
                                            <option value="42">Acura</option>
                                            <option value="43">Dfsk</option>
                                            <option value="44">Dfm</option>
                                            <option value="45">Great wall</option>
                                            <option value="46">Cadillac</option>
                                            <option value="47">Ssangyong</option>
                                            <option value="48">Am general</option>
                                            <option value="49">Avanti Motors</option>
                                            <option value="50">Asia</option>
                                            <option value="51">Baic yinxiang</option>
                                            <option value="52">Baic</option>
                                            <option value="53">Brilliance</option>
                                            <option value="54">Byd</option>
                                            <option value="55">Changan</option>
                                            <option value="56">Changhe</option>
                                            <option value="57">Daihatsu</option>
                                            <option value="58">Datsun</option>
                                            <option value="59">Faw</option>
                                            <option value="60">Foton</option>
                                            <option value="61">Geely</option>
                                            <option value="62">Gonow</option>
                                            <option value="63">Pontiac</option>
                                            <option value="64">Isuzu</option>
                                            <option value="65">Mahindra</option>
                                            <option value="{{$ad->modele->marque_id}}" hidden selected>{{Str::title($ad->modele->marque->marque_nom)}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="weight500">{{__('Select model')}}:</label>
                                        <select class="form-control" id="Modele" name="Modele_id" required disabled>
                                            <option disabled hidden selected>{{__("Select model")}}</option>
                                            <option value="{{$ad->modele_id}}" selected>{{$ad->modele->modele_nom}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ModeleYear" class="weight500">{{__('Select year')}}:</label>
                                        <select class="form-control" id="ModeleYear" name="ModeleYear" disabled>
                                            <option disabled hidden selected>{{__('Select year')}}</option>
                                            @for($y = 2020;$y > 1960;$y--)
                                                <option value="{{ $y }}" {{$ad->modele_annee == $y? 'selected':''}}>{{ $y }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                @if($ad->annonce_type == "sell")
                                    <div class="w-100">
                                        <label class="weight500" for="upInput">{{__('Upload picture')}}:</label>
                                        <div id="addAdsImgPreview"
                                             class="rounded border border-dark bg-white ml-md-2 mr-md-2">
                                            <div id="upImg">
                                                @foreach($ad->images as $img)
                                                    <div class="deleteAdsImgs">
                                                        <img id="deleteAdsImg" class="m-1" src="{{asset('files/annonce/' . $img->img_nom)}}" img="{{$img->img_id}}" loading="auto">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <input type="file" id="upInput" class="p-1 w-100 bg-success" name="images[]" accept="image/*" multiple="multiple" edit="">
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label class="weight500">{{__('Description')}}:</label>
                                <textarea class="form-control form-control-lg rounded border border-dark" name="ad_desc" rows="3">{{ $ad->annonce_desc ?? '' }}</textarea>
                            </div>
                            <div class="d-flex flex-column flex-wrap accordion md-accordion mt-3" id="accordionEx" role="tablist" aria-multiselectable="true">
                                <div class="mb-1">
                                    <a class="btn btn-link text-info font-weight-light p-0" id="SelectAllParts">{{__('Select All')}}</a>&nbsp;/&nbsp;<a class="btn btn-link text-info font-weight-light p-0" id="DeSelectAllParts">{{__('Deselect All')}}</a>
                                </div>
                                <?php
                                $Partscat = \App\PieceCat::with('pieces')->get();
                                $partIds = $ad->pieces->pluck('piece_id')->toArray();
                                ?>
                                @foreach($Partscat as $Parts)
                                    <div class="card shadow mb-2">
                                        <div id="head-{{ Str::camel($Parts->cat_nom) }}" class="card-header" role="tab">
                                            <?php $cat_partsIds = $Parts->pieces->pluck('piece_id')->toArray(); ?>
                                            <input type="checkbox" id="selectAll" class="m-1" title="Select All" value="{{ $Parts->cat_id }}" name="parts_cat" cat="{{ $Parts->cat_id }}" {{ count(array_diff($cat_partsIds, $partIds)) ? '':'checked'}}>
                                            <a class="text-decoration-none" href="#collapse-{{ Str::camel($Parts->cat_nom) }}" data-toggle="collapse" data-parent="#accordionEx" aria-expanded="false" aria-controls="collapse-{{ Str::camel($Parts->cat_nom) }}">
                                                <h6 class="mb-0">
                                                    {{ Str::title($Parts->cat_nom) }}&nbsp;
                                                    <i class="fa fa-angle-down rotate-icon m-1<"></i>
                                                </h6>
                                            </a>
                                        </div>
                                        <div id="collapse-{{ Str::camel($Parts->cat_nom) }}" class="collapse" role="tabpanel" aria-labelledby="head-{{ Str::camel($Parts->cat_nom) }}" data-parent="#accordionEx">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach($Parts->pieces as $Part)
                                                        <li class="form-check">
                                                            <input type="checkbox" id="{{ $Part->piece_id }}" name="parts[]" value="{{ $Part->piece_id }}" class="form-check-input" cat="{{ $Parts->cat_id }}" {{in_array($Part->piece_id, $partIds)?'checked':''}}>
                                                            <label class="form-check-label" for="{{ $Part->piece_id }}">{{ Str::title($Part->piece_nom) }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="text-center text-sm-right">
                                <button class="btn btn-success shadow-none m-2" type="submit">
                                    <i class="fa fa-file mr-1"></i>{{__('Edit')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection