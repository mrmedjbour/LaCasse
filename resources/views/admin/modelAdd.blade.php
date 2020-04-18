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
                        <form action="{{ route('model.store') }}" class="p-4" id="GoPro" method="post">
                            @csrf
                            <h5 class="mb-2">{{__('Add vehicle model')}}</h5>
                            <div class="w-100 px-md-5">
                                <div class="form-group">
                                    <label id="marque" class="weight500" for="make">{{__('Select Make')}}: *</label>
                                    <select class="form-control" id="marque" name="marque" required>
                                        <option disabled selected hidden>{{__('Make')}}</option>
                                        @foreach($marques as $marque)
                                            <option value="{{ $marque->marque_id }}">{{ Str::title($marque->marque_nom) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="weight500" for="modele_nom">{{__('Model name')}}: *</label>
                                    <input class="form-control" id="modele" name="modele" placeholder="{{__('Model name')}}" required type="text">
                                </div>
                                <hr>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-danger shadow-none m-2 px-4" role="button" href="{{ route('model.index') }}">{{__('Cancel')}}</a>
                                <button class="btn btn-success shadow-none m-2 px-4" type="submit">{{__('Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection