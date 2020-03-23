@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-1 offset-lg-4 mx-auto form-div">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="user_prenom"><strong>First Name :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('user_prenom') is-invalid @enderror"
                                           id="user_prenom" name="user_prenom" type="text" placeholder="First Name"
                                           value="{{ old('user_prenom') }}" required>
                                    @error('user_prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="user_nom"><strong>Last Name :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('user_nom') is-invalid @enderror" id="user_nom"
                                           type="text" placeholder="Last Name" name="user_nom"
                                           value="{{ old('user_nom') }}" required>
                                    @error('user_nom')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email"><strong>Email Address :</strong>
                                        <br>
                                    </label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required placeholder="Email Address" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="user_tel"><strong>Phone Number :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('user_tel') is-invalid @enderror" id="user_tel"
                                           name="user_tel" value="{{ old('user_tel') }}" type="tel"
                                           placeholder="Phone Number" required>
                                    @error('user_tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Wilaya">
                                        <strong>Address:</strong>
                                    </label>
                                    <div class="d-md-flex justify-content-md-between align-items-md-center RegAdr">
                                        <select id="Wilaya" class="form-control d-md-inline-block">
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
                                        <select id="Daira" class="form-control d-md-inline-block" disabled>
                                            <option hidden disabled selected>Daira</option>
                                        </select>
                                        <select id="Commune" name="commune_id" class="form-control d-md-inline-block"
                                                disabled required>
                                            <option hidden disabled selected>Commune</option>
                                            <option value="1">Corso</option>
                                            <option value="2">AK fahem</option>
                                        </select>
                                        @error('commune_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="password"><strong>Password :</strong>
                                        <br>
                                    </label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="password-confirm"><strong>Confirm Password :</strong>
                                        <br>
                                    </label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required placeholder="Confirm Password :">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" id="termsCheck"
                                           required>
                                    <label class="form-check-label m-0" for="termsCheck">I agree to the <a href="#">Terms</a>
                                        of Use and Privacy Policy.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col d-sm-flex d-md-flex d-lg-flex justify-content-sm-center justify-content-md-center justify-content-lg-end">
                                <button class="btn btn-success" type="submit">Create account</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <span>Already registered?&nbsp;<a href="{{ route('login') }}">Login<br><br></a></span>
                </div>
            </div>
        </div>
    </section>
@endsection
