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
                        <form id="addAnn" class="p-4" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="PUT" name="_method">
                            <div class="d-md-flex" id="top">
                                <div class="w-100">
                                    <label class="weight500">Ad type: {{Str::title($ad->annonce_type)}}</label>
                                    <div class="form-group">
                                        <label for="Make" class="weight500">Select Make:</label>
                                        <select class="form-control" id="Make" disabled required>
                                            <option value="{{$ad->modele->marque_id}}" hidden selected>{{Str::title($ad->modele->marque->marque_nom)}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="weight500">Select Model:</label>
                                        <select class="form-control" id="Modele" disabled>
                                            <option disabled hidden selected>Select Model</option>
                                            <option value="{{$ad->modele_id}}" selected>{{$ad->modele->modele_nom}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ModeleYear" class="weight500">Select Year:</label>
                                        <select class="form-control" id="ModeleYear" name="ModeleYear" disabled>
                                            <option disabled hidden selected>Select Year</option>
                                            @for($y = 2020;$y > 1960;$y--)
                                                <option value="{{ $y }}" {{$ad->modele_annee == $y? 'selected':''}}>{{ $y }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                @if($ad->annonce_type == "sell" && empty($ad->images))
                                    <div class="w-100">
                                        <label class="weight500" for="upInput">Upload images:</label>
                                        <div id="addAdsImgPreview"
                                             class="rounded border border-dark bg-white ml-md-2 mr-md-2">
                                            <div id="upImg">
                                                @foreach($ad->images as $img)
                                                    <div class="deleteAdsImgs">
                                                        <img id="deleteAdsImg" class="m-1" src="{{asset('files/annonce/' . $img->img_nom)}}" img="{{$img->img_id}}" loading="auto">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <label class="weight500">Description:</label>
                                <textarea class="form-control form-control-lg rounded border border-dark" disabled rows="3">{{ $ad->annonce_desc ?? '' }}</textarea>
                            </div>
                            <div class="d-flex flex-column flex-wrap accordion md-accordion mt-3" id="accordionEx" role="tablist" aria-multiselectable="true">
                                <?php
                                $Partscat = \App\PieceCat::with('pieces')->get();
                                $partIds = $ad->pieces->pluck('piece_id')->toArray();
                                ?>
                                @foreach($Partscat as $Parts)
                                    <div class="card shadow mb-2">
                                        <div id="head-{{ Str::camel($Parts->cat_nom) }}" class="card-header" role="tab">
                                            <?php $cat_partsIds = $Parts->pieces->pluck('piece_id')->toArray(); ?>
                                            <input type="checkbox" id="selectAll" disabled class="m-1" title="Select All" value="{{ $Parts->cat_id }}" name="parts_cat" cat="{{ $Parts->cat_id }}" {{ count(array_diff($cat_partsIds, $partIds)) ? '':'checked'}}>
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
                                                            <input type="checkbox" disabled id="{{ $Part->piece_id }}" name="parts[]" value="{{ $Part->piece_id }}" class="form-check-input" cat="{{ $Parts->cat_id }}" {{in_array($Part->piece_id, $partIds)?'checked':''}}>
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
                            <div class="text-center text-sm-left">
                                <a class="btn btn-dark shadow-none m-2" type="button" href="{{ route('annonce.index') }}">
                                    <i class="fa fa-file mr-1"></i>Return
                                </a>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection