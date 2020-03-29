@extends('layouts.app') @section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="GoPro" class="p-4" action="{{ route("pro.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="w-100">
                                <h5 class="mb-2">Switch to professional account</h5>
                                <div class="form-group">
                                    <label for="casse_name" class="weight500">Casse name: *</label>
                                    <input class="form-control" type="text" id="casse_name" name="casse_name" required minlength="2">
                                </div>
                                <div class="form-group">
                                    <label for="casse_adr" class="weight500">Casse addresse: *</label>
                                    <input class="form-control" type="text" id="casse_adr" name="casse_adr" required minlength="5">
                                </div>
                                <div class="form-group">
                                    <select id="Wilaya" class="form-control">
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
                                        <option value="{{$user->commune->daira->wilaya_id}}" hidden selected>{{Str::title($user->commune->daira->wilaya->wilaya_nom)}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="Daira" class="form-control" disabled>
                                        <option hidden disabled selected>Daira</option>
                                        <option value="{{$user->commune->daira->daira_id}}" selected>{{Str::title($user->commune->daira->daira_nom)}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="Commune" name="commune" class="form-control" required disabled>
                                        <option hidden disabled selected>Commune</option>
                                        <option value="{{$user->commune->commune_id}}" selected>{{Str::title($user->commune->commune_nom)}}</option>
                                    </select>
                                </div>
                                @error('commune')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <hr>
                                <div class="form-group" id="CassePhoneNumberinput">
                                    <label class="weight500">Phone Numbers: *</label>
                                    @if(empty($user->user_tel))
                                        <input class="form-control mt-2" type="tel" name="phone[]" placeholder="Phone Number" minlength="9" maxlength="14" inputmode="tel" required>
                                    @endif
                                    @foreach($user->user_tel as $phone)
                                        <input class="form-control mt-2" type="tel" name="phone[]" placeholder="Phone Number" value="{{ phone($phone, 'DZ') }}" minlength="9" maxlength="14" inputmode="tel">
                                    @endforeach
                                </div>
                                <a class="btn shadow-none p-0 d-block" role="button" id="CassePhoneNumber" style="color: #007bff;">Add another phone number</a>
                                <hr>
                                <div class="form-group">
                                    <label for="casse_rc" class="weight500">trade register number: *</label>
                                    <input class="form-control" type="tel" id="casse_rc" name="casse_rc" minlength="9" maxlength="14" required>
                                </div>
                                <div class="form-group">
                                    <label for="casse_doc" class="weight500 d-block">Upload trade register document (pdf,img...): *</label>
                                    <input type="file" id="casse_doc" name="casse_doc" required>
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