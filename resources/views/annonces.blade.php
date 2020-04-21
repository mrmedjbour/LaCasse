@extends('layouts.app')
@section('title'){{ __('Ads') }}@endsection
@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">@include('comp.sidebar')</div>
                <div class="col-lg-8 dash-info">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (Auth::user()->role_id != 3)
                        <div class="text-center text-sm-right">
                            <a class="btn btn-success btn-sm shadow-none m-2" role="button" href="{{route('annonce.create')}}"> <i class="fa fa-plus mr-1"></i>{{__('Add ad')}}</a>
                        </div>
                    @endif
                    <div class="table-responsive table-borderless" style="font-size: 14px;">
                        <table class="table table-striped table-bordered table-sm">
                            <thead style="background-color: #0078c3;color: white;">
                            <tr>
                                <th style="width: 8%;">#</th>
                                <th>{{__('Title')}}</th>
                                <th style="width: 16%;">{{__('Date')}}</th>
                                <th>{{__('Type')}}</th>
                                <th class="text-center" style="width: 10%;"><strong>{{__('Delete')}}</strong>
                                </th>
                                <th class="text-center" style="width: 10%;">{{__('Edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{ $ad->annonce_id }}</td>
                                    <td>{{ Str::title($ad->modele->marque->marque_nom.' '.$ad->modele->modele_nom) }}{{$ad->modele_annee?" - $ad->modele_annee":''}}</td>
                                    <td>{{ $ad->annonce_date->format('d/m/y H:i')}}</td>
                                    <td> {{__(Str::title($ad->annonce_type))}}</td>
                                    <td class="text-center p-0">
                                        <button class="btn btn-sm shadow-none" id="DeleteAdBtn" type="button" a_id="{{ $ad->annonce_id }}">
                                            <i class="fa fa-remove shadow-none text-danger"></i>
                                        </button>
                                    </td>
                                    <td class="text-center p-0">
                                        <a class="btn btn-link btn-sm" role="button" href="{{ route('annonce.edit', $ad->annonce_id) }}">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center text-sm-right">
                        <nav class="d-inline-block m-2 pagin">
                            {{ $ads->links() }}
                        </nav>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="DeleteAdModel">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header py-1" style="background-color: #0078c3;color: white;">
                                    <h4 class="modal-title font-weight-normal" style="font-size: medium;">{{__('Delete Confirmation')}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body text-center pb-0"><i class="fas fa-exclamation-circle fa-5x" style="color: red;"></i>
                                    <p class="pt-3">{{__('Are you sure you want to delete this ad?')}}</p>
                                </div>
                                <div class="modal-footer p-2 px-sm-3">
                                    <form class="d-flex justify-content-between m-0 w-100" action="{{route('annonce.destroy', "delete")}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" id="a_id" name="ad_id">
                                        <button class="btn btn-secondary shadow-none" type="button" data-dismiss="modal">{{__('No')}}</button>
                                        <button class="btn btn-danger shadow-none" type="submit">{{__('Yes, Delete')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection