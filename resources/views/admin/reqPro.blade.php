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
                            <div class="w-100">
                                <h5 class="mb-2">Demand information </h5>
                                <div class="form-group">
                                    <label class="weight500">First name:</label>
                                    <input class="form-control" type="text" name="casse_name" required="" minlength="2" readonly="">
                                </div>
                                <div class="form-group">
                                    <label class="weight500">Last name:</label>
                                    <input class="form-control" type="text" name="casse_name" required="" minlength="2" readonly="">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="weight500">Casse name:</label>
                                    <input class="form-control" type="text" name="casse_name" required="" minlength="2" readonly="">
                                </div>
                                <div class="form-group">
                                    <label class="weight500">Casse addresse:</label>
                                    <input class="form-control" type="text" name="casse_address" required="" minlength="5" readonly="">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="" readonly="" disabled="">
                                        <option value="" selected="" hidden="">Willya</option>
                                        <option value="35">Boumerdes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="" readonly="" disabled="">
                                        <option value="city" selected="" hidden="">City</option>
                                        <option value="35000">isser</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="" readonly="" disabled="">
                                        <option value="commune" selected="" hidden="">Commune</option>
                                        <option value="0">isser</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput">
                                    <label class="weight500">Phone Numbers:</label>
                                    <input class="form-control" type="tel" name="phone[]" minlength="9" maxlength="14" required="" readonly="">
                                </div>
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput-1">
                                    <label class="weight500">GPS coordinates, latitude and longitude:</label>
                                    <input class="form-control" type="text" name="casse_loc" value="0,0" required="" minlength="0,0">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="weight500">trade register number:</label>
                                    <input class="form-control" type="tel" name="phone" minlength="9" maxlength="14" required="" readonly="">
                                </div>
                                <div class="form-group">
                                    <label class="weight500 d-block">trade register document :&nbsp;</label><a class="text-decoration-none" href="#" target="_blank">rc-hamid.pdf<i class="fa fa-share-square-o ml-1"></i></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap"><a class="btn btn-danger shadow-none m-2 px-5 font-weight-bold" role="button" href="#"><strong>Reject</strong></a>
                                <button class="btn btn-success shadow-none m-2 px-5 font-weight-bold" type="submit">Validate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection