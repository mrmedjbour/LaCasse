@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="GoPro" class="p-4">
                            <h5 class="mb-2">Edit vehicle model</h5>
                            <div class="w-100 px-md-5">
                                <div class="form-group">
                                    <label id="marque" class="weight500" for="make">Select Make: *</label>
                                    <select class="form-control" id="marque" required="" name="marque">
                                        <option value="" selected="" hidden="">Make</option>
                                        <option value="Cleo">Cleo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="weight500" for="modele_nom">Model name: *</label>
                                    <input class="form-control" type="text" id="modele_nom" name="modele_nom"
                                           required="" placeholder="Model Name">
                                </div>
                                <hr>
                            </div>
                            <div class="d-flex justify-content-between"><a class="btn btn-danger shadow-none m-2 px-4"
                                                                           role="button" href="#">Cancel</a>
                                <button class="btn btn-success shadow-none m-2 px-4" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection