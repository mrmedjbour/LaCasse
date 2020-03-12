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
                                <h5 class="mb-2">Switch to professional account</h5>
                                <div class="form-group">
                                    <label class="weight500">Casse name: *</label>
                                    <input class="form-control" type="text" name="casse_name" required="" minlength="2">
                                </div>
                                <div class="form-group">
                                    <label class="weight500">Casse addresse: *</label>
                                    <input class="form-control" type="text" name="casse_address" required="" minlength="5">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="">
                                        <option value="" selected="" hidden="">Willya</option>
                                        <option value="35">Boumerdes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="">
                                        <option value="city" selected="" hidden="">City</option>
                                        <option value="35000">isser</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required="">
                                        <option value="commune" selected="" hidden="">Commune</option>
                                        <option value="0">isser</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput">
                                    <label class="weight500">Phone Numbers: *</label>
                                    <input class="form-control" type="tel" name="phone[]" minlength="9" maxlength="14" required="">
                                </div><a class="btn shadow-none" role="button" id="CassePhoneNumber" href="#" style="padding: 0;display: block;color: #007bff;">Add another phone number</a>
                                <hr>
                                <div class="form-group">
                                    <label class="weight500">trade register number: *</label>
                                    <input class="form-control" type="tel" name="phone" minlength="9" maxlength="14" required="">
                                </div>
                                <div class="form-group">
                                    <label class="weight500 d-block">Upload trade register document (pdf,img...): *</label>
                                    <input type="file" required="">
                                </div>
                            </div>
                            <div class="text-center text-sm-right">
                                <button class="btn btn-success shadow-none m-2 px-5 font-weight-bold" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection