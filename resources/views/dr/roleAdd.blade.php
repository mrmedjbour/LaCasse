@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;">
                        <form method="post" action="{{ route('role.store') }}">
                            @csrf
                            <div class="w-100" style="padding: 5px 3%;">
                                <h6 style="margin-bottom: 1rem;">Add User Role</h6>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="userRole">User Role :</label>
                                    <select class="form-control ProfSelects" id="userRole" name="userRole" required>
                                        <option value="3">Seller</option>
                                        <option value="4">Buyer</option>
                                    </select>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="first-name">First name :</label>
                                    <input class="form-control ProfInputS" type="text" id="first-name" name="firstname" placeholder="First name" required>
                                </div>
                                <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                    <label class="text-nowrap" for="last-name">Last name :</label>
                                    <input class="form-control ProfInputS" type="text" id="last-name" name="lastname" placeholder="Last name" required>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="email">Email :</label>
                                    <input class="form-control ProfInputS" type="email" id="email" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password">Password :</label>
                                    <input class="form-control ProfInputS" type="password" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password_confirmation">Password Confirmation:</label>
                                    <input class="form-control ProfInputS" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>
                                </div>
                                <h6 class="mb-1">Address :</h6>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label class="m-0" id="willya" for="email"></label>
                                    <select class="form-control ProfSelects" id="Wilaya">
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
                                    <select class="form-control ProfSelects" id="Daira" disabled>
                                        <option hidden disabled selected>Daira</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <label id="commune" for="email" class="m-0"></label>
                                    <select class="form-control ProfSelects" id="Commune" name="commune" disabled required>
                                        <option hidden disabled selected>Commune</option>
                                    </select>
                                </div>
                                <h6 class="mb-1">Phone numbers (optional):</h6>
                                <div class="form-group">
                                    <input class="form-control form-control-sm d-block mx-auto mb-3 mt-3 ProfInputS" type="tel" placeholder="Phone Number" name="phone[]" inputmode="tel">
                                    <a class="btn shadow-none p-0 d-block" role="button" id="addPhoneNumber" style="color: #007bff;">Add another phone number</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mx-4 mb-3">
                                <a class="btn btn-danger btn-sm shadow-none" role="button" href="{{ route('role.index') }}"><i class="fa fa-remove m-1"></i>Cancel</a>
                                <button class="btn btn-success btn-sm shadow-none" type="submit"><i class="fa fa-user-plus m-1"></i>Add Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection