@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;margin-bottom: 10vh;">
                        <form method="post" enctype="multipart/form-data">
                            <div class="w-100" style="padding: 5px 3%;">
                                <h6 style="margin-bottom: 1rem;">Add User Role</h6>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">User Role :</label>
                                    <select class="form-control form-control-sm"
                                            style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                        <option value="Seller">Seller</option>
                                        <option value="Buyer">Buyer</option>
                                    </select>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">First name :</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           placeholder="First name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">Last name :</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           placeholder="Last name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;" required="">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="email">Email :&nbsp;</label>
                                    <input class="form-control form-control-sm" type="text" id="first-name"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           placeholder="E-mail" required="">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password">Password :&nbsp; &nbsp; &nbsp;</label>
                                    <input class="form-control" type="password" id="password"
                                           style="color: #444;border: 1px solid #9a9a9a;max-width: 300px;"
                                           placeholder="Password" required="">
                                </div>
                                <h6 style="margin-bottom: 1rem;">Address :&nbsp;</h6>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="willya" for="email" style="margin: 0;"></label>
                                    <select class="form-control form-control-sm form-control" id="Wilaya"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;">
                                        <option hidden disabled selected>Wilaya</option>
                                        <option value="4">ALGER</option>
                                        <option value="13">BOUMERDES</option>
                                        <option value="47">Tizi Ouzou</option>
                                        <option value="1">ADRAR</option>
                                        <option value="2">AIN TEMOUCHENT</option>
                                        <option value="3">AIN-DEFLA</option>
                                        <option value="5">ANNABA</option>
                                        <option value="6">Bordj Bou Arreridj</option>
                                        <option value="7">BATNA</option>
                                        <option value="8">BECHAR</option>
                                        <option value="9">BEJAIA</option>
                                        <option value="10">BISKRA</option>
                                        <option value="11">BLIDA</option>
                                        <option value="12">BOUIRA</option>
                                        <option value="14">Chlef</option>
                                        <option value="15">CONSTANTINE</option>
                                        <option value="16">DJELFA</option>
                                        <option value="17">EL BAYADH</option>
                                        <option value="18">EL TARF</option>
                                        <option value="19">EL-OUED</option>
                                        <option value="20">GHARDAIA</option>
                                        <option value="21">GUELMA</option>
                                        <option value="22">ILLIZI</option>
                                        <option value="23">Jijel</option>
                                        <option value="24">KHENCHELA</option>
                                        <option value="25">LAGHOUAT</option>
                                        <option value="26">MASCARA</option>
                                        <option value="27">MEDEA</option>
                                        <option value="28">MILA</option>
                                        <option value="29">MOSTAGANEM</option>
                                        <option value="30">M&#039;SILA</option>
                                        <option value="31">NAAMA</option>
                                        <option value="32">ORAN</option>
                                        <option value="33">OUARGLA</option>
                                        <option value="34">Oum El Bouaghi</option>
                                        <option value="35">RELIZANE</option>
                                        <option value="36">SAIDA</option>
                                        <option value="37">SETIF</option>
                                        <option value="38">Sidi Bel Abbes</option>
                                        <option value="39">SKIKDA</option>
                                        <option value="40">SOUK AHRAS</option>
                                        <option value="41">Tamanrasset</option>
                                        <option value="42">TEBESSA</option>
                                        <option value="43">Tiaret</option>
                                        <option value="44">Tindouf</option>
                                        <option value="45">TIPAZA</option>
                                        <option value="46">Tissemsilt</option>
                                        <option value="48">TLEMCEN</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="daira" for="email" class="m-0"></label>
                                    <select class="form-control form-control-sm form-control" id="Daira"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;"
                                            disabled>
                                        <option hidden disabled selected>Daira</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="commune" for="email" class="m-0"></label>
                                    <select class="form-control form-control-sm form-control" id="Commune"
                                            style="color: #444;border: 1px solid #9a9a9a;width: auto !important;min-width: 223px;"
                                            disabled required>
                                        <option hidden disabled selected>Commune</option>
                                    </select>
                                </div>
                                <h6 style="margin-bottom: 1rem;">Phone numbers (optional):</h6>
                                <div class="form-group">
                                    <input class="form-control form-control-sm d-block mx-auto mb-2" type="tel"
                                           placeholder="Phone Number"
                                           style="border: 1px solid #9a9a9a;max-width: 300px;" name="phone[]"
                                           inputmode="tel"><a class="btn shadow-none" role="button" id="addPhoneNumber"
                                                              href="#"
                                                              style="padding: 0;display: block;color: #007bff;">Add
                                        another phone number</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mx-4 mb-3"><a
                                        class="btn btn-danger btn-sm shadow-none" role="button" href="#"><i
                                            class="fa fa-remove m-1"></i>Cancel</a>
                                <button class="btn btn-success btn-sm shadow-none" type="submit"><i
                                            class="fa fa-user-plus m-1"></i>Add Role
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection