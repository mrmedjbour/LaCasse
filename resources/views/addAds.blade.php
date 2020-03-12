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
                        <form id="addAnn" class="p-4">
                            <div class="d-md-flex" id="top">
                                <div class="w-100">
                                    <div class="form-group">
                                        <label class="weight500">Select Ad type:</label>
                                        <select class="form-control" required="">
                                            <option value="1">Sell</option>
                                            <option value="0">Buy</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="weight500">Select Make:</label>
                                        <select class="form-control" required="">
                                            <option value="" selected="" hidden="">Make</option>
                                            <option value="Cleo">Cleo</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="weight500">Select Model:</label>
                                        <select class="form-control" required="">
                                            <option value="" selected="" hidden="">Model</option>
                                            <option value="0">2X</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="weight500">Select Year:</label>
                                        <select class="form-control" required="">
                                            <option value="" selected="" hidden="">Year</option>
                                            <option value="0">2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <label class="weight500" for="upInput">Upload images:</label>
                                    <div id="addAdsImgPreview" class="rounded border border-dark bg-white ml-md-2 mr-md-2">
                                        <div id="upImg"></div>
                                        <input type="file" id="upInput" class="p-1 w-100 bg-success" name="partimg" multiple="" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="weight500">Description:</label>
                                <textarea class="form-control form-control-lg rounded border border-dark" rows="3"></textarea>
                            </div>
                            <div class="d-flex flex-column flex-wrap accordion md-accordion mt-3" id="accordionEx" role="tablist" aria-multiselectable="true">
                                <div class="card shadow mb-2">
                                    <div id="headingOne1" class="card-header" role="tab">
                                        <input type="checkbox" data-toggle="tooltip" data-bs-tooltip="" id="selectAll" class="m-1" title="Select All" value="carbody" name="parts" cat="carbody">
                                        <a class="text-decoration-none" href="#collapseOne1" data-toggle="collapse" data-parent="#accordionEx" aria-expanded="false" aria-controls="collapseOne1">
                                            <h6 class="mb-0">Car Body&nbsp;<i class="fa fa-angle-down rotate-icon m-1"></i></h6>
                                        </a>
                                    </div>
                                    <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="form-check">
                                                    <input type="checkbox" id="LeftDoor" class="form-check-input" cat="carbody">
                                                    <label class="form-check-label" for="LeftDoor">Left Door</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="Caapo" class="form-check-input" cat="carbody">
                                                    <label class="form-check-label" for="Caapo">Caapo</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="RightDoor" class="form-check-input" cat="carbody">
                                                    <label class="form-check-label" for="formCheck-1">Right Door</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-2">
                                    <div id="headingOne1" class="card-header" role="tab">
                                        <input type="checkbox" data-toggle="tooltip" data-bs-tooltip="" id="selectAll" class="m-1" title="Select All" value="carbody" name="parts" cat="cah">
                                        <a class="text-decoration-none" href="#collapse2" data-toggle="collapse" data-parent="#accordionEx" aria-expanded="false" aria-controls="collapse2">
                                            <h6 class="mb-0">Cooling and Heating<i class="fa fa-angle-down rotate-icon m-1"></i></h6>
                                        </a>
                                    </div>
                                    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="form-check">
                                                    <input type="checkbox" id="LeftDoor" class="form-check-input" cat="cah">
                                                    <label class="form-check-label" for="LeftDoor">Motor Oil Cooler</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="Caapo" class="form-check-input" cat="cah">
                                                    <label class="form-check-label" for="Caapo">AC Compressor</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="RightDoor" class="form-check-input" cat="cah">
                                                    <label class="form-check-label" for="formCheck-1">Radiator</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-2">
                                    <div id="headingOne1" class="card-header" role="tab">
                                        <input type="checkbox" data-toggle="tooltip" data-bs-tooltip="" id="selectAll" class="m-1" title="Select All" value="carbody" name="parts" cat="Engine">
                                        <a class="text-decoration-none" href="#collapse3" data-toggle="collapse" data-parent="#accordionEx" aria-expanded="false" aria-controls="collapse3">
                                            <h6 class="mb-0">Engine<i class="fa fa-angle-down rotate-icon m-1"></i></h6>
                                        </a>
                                    </div>
                                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="form-check">
                                                    <input type="checkbox" id="LeftDoor" class="form-check-input" cat="Engine">
                                                    <label class="form-check-label" for="LeftDoor">Motor</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="Caapo" class="form-check-input" cat="Engine">
                                                    <label class="form-check-label" for="Caapo">Starter Motor</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="RightDoor" class="form-check-input" cat="Engine">
                                                    <label class="form-check-label" for="formCheck-1">Cylinder Head</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-2">
                                    <div id="headingOne1" class="card-header" role="tab">
                                        <input type="checkbox" data-toggle="tooltip" data-bs-tooltip="" id="selectAll" class="m-1" title="Select All" value="carbody" name="parts" cat="Electrical">
                                        <a class="text-decoration-none" href="#collapse4" data-toggle="collapse" data-parent="#accordionEx" aria-expanded="false" aria-controls="collapse4">
                                            <h6 class="mb-0">Electrical<i class="fa fa-angle-down rotate-icon m-1"></i></h6>
                                        </a>
                                    </div>
                                    <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="form-check">
                                                    <input type="checkbox" id="LeftDoor" class="form-check-input" cat="Electrical">
                                                    <label class="form-check-label" for="LeftDoor">Alternator</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="Caapo" class="form-check-input" cat="Electrical">
                                                    <label class="form-check-label" for="Caapo">Battery</label>
                                                </li>
                                                <li class="form-check">
                                                    <input type="checkbox" id="RightDoor" class="form-check-input" cat="Electrical">
                                                    <label class="form-check-label" for="formCheck-1">Engine/Motor Control Module</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center text-sm-right">
                                <button class="btn btn-success shadow-none m-2" type="submit"><i class="fa fa-file mr-1"></i>Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection