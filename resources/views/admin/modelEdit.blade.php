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
                        <form id="GoPro" class="p-4" method="post" action="{{ route('model.update', $model->modele_id) }}">
                            @csrf
                            @method('PUT')
                            <h5 class="mb-2">Edit vehicle model</h5>
                            <div class="w-100 px-md-5">
                                <div class="form-group">
                                    <label id="marque" class="weight500" for="make">Select Make: *</label>
                                    <select class="form-control" id="marque" name="marque" required>
                                        <option disabled selected hidden>Make</option>
                                        @foreach($marques as $marque)
                                            <option value="{{ $marque->marque_id }}" @if($marque->marque_id == $model->marque_id) selected @endif>{{ $marque->marque_nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="weight500" for="modele_nom">Model name: *</label>
                                    <input class="form-control" type="text" id="modele" name="modele" required value="{{ $model->modele_nom }}" placeholder="Model Name">
                                </div>
                                <hr>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-danger shadow-none m-2 px-4" role="button" href="{{ route('model.index') }}">Cancel</a>
                                <button class="btn btn-success shadow-none m-2 px-4" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection