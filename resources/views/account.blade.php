@extends('layouts.app') @section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">@include('comp.sidebar')</div>
                <div class="col-lg-8 dash-info">
                    <div style="background-color: #f8f8f8;border: 1px solid #d5d5d5;border-radius: 3px;">
                        @if (Auth::user()->role_id == 2)
                            <div style="padding: 5px 3%;">
                                @if(session('success'))
                                    <div class="alert alert-success m-2">{{ session('success') }}</div>
                                @endif
                                <h6>{{__('Professional information')}} :</h6>
                                <form method="post" action="{{ route('user.updateCasseCover') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group d-sm-flex justify-content-between align-items-center">
                                        <label class="m-0" for="casseName">{{__('Casse name')}} :</label>
                                        <input type="text" class="form-control" id="casseName" value="{{ Auth::user()->casse->casse_nom }}" disabled style="max-width: 300px;"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="casseName">{{__('Address')}} :</label>
                                        <p class="text-black-50">{{ Str::title(Auth::user()->casse->casse_adr) }}<br>{{ Str::title(Auth::user()->casse->commune->commune_nom.' '.Auth::user()->casse->commune->daira->daira_nom.' '.Auth::user()->casse->commune->daira->wilaya->wilaya_nom) }}</p>
                                    </div>
                                    <div class="text-center p-2">
                                        @if ($cover_img = Auth::user()->casse->casse_image)
                                            <img class="img-fluid w-75" src="{{ asset('/files/casse/'.$cover_img) }}" style="max-height: 90px;"/>
                                        @else
                                            <img class="img-fluid w-75" src="{{ asset('/files/casse/casse.jpg') }}" style="max-height: 90px;"/>
                                        @endif
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-between align-items-center">
                                        <label class="m-0" for="cover">{{__('Casse Cover')}} : (720x90)</label>
                                        <input type="file" id="cover" style="max-width: 300px;" name="cover"/>
                                    </div>
                                    <div class="form-group text-center text-md-right">
                                        <button class="btn btn-success shadow-none" type="submit">{{__('Change Cover')}}</button>
                                    </div>
                                </form>
                            </div>
                            <hr/>
                        @endif
                        <form method="post" action="{{ route('user.updateAccount') }}" enctype="multipart/form-data">
                            @csrf
                            @if (Auth::user()->role_id != 2)
                                @if(session('success'))
                                    <div class="alert alert-success m-2">{{ session('success') }}</div>
                                @endif
                            @endif
                            <div class="d-md-flex justify-content-around w-100" style="padding: 5px 3%;">
                                <div class="w-100">
                                    <h6 class="mb-3">{{__('Personal information')}} :</h6>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="first-name">{{__('First Name')}} :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="first-name" value="{{ $user->user_prenom }}" disabled>
                                    </div>
                                    <div class="form-group d-sm-flex align-items-center justify-content-sm-between">
                                        <label class="text-nowrap" for="last-name">{{__('Last Name')}} :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="last-name" value="{{ $user->user_nom }}" disabled>
                                    </div>
                                    <div class="form-group d-sm-flex justify-content-sm-between">
                                        <label class="text-nowrap" for="email">{{__('E-Mail Address')}} :</label>
                                        <input class="form-control form-control-sm ProfInputS" type="text" id="email" value="{{ $user->email }}" disabled>
                                    </div>
                                    <h6 class="mb-1">{{__('Address')}} :</h6>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="Wilaya" for="email" class="m-0"></label>
                                        <select class="form-control form-control-sm form-control ProfSelects" id="Wilaya">
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
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="Daira" for="email" class="m-0"></label>
                                        <select class="form-control form-control-sm form-control ProfSelects" id="Daira" disabled>
                                            <option hidden disabled selected>Daira</option>
                                            <option value="{{$user->commune->daira->daira_id}}" selected>{{Str::title($user->commune->daira->daira_nom)}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label id="Commune" for="email" class="m-0"></label>
                                        <select class="form-control form-control-sm form-control ProfSelects" id="Commune" name="commune" required disabled>
                                            <option hidden disabled selected>Commune</option>
                                            <option value="{{$user->commune->commune_id}}" selected>{{Str::title($user->commune->commune_nom)}}</option>
                                        </select>
                                    </div>
                                    <h6 style="margin-bottom: 1rem;">{{__('Phone Numbers')}} :</h6>
                                    <div class="form-group ProfInputPhone">
                                        @if(empty($user->user_tel))
                                            <input class="form-control form-control-sm" type="tel" placeholder="Phone Number" name="phone[]" inputmode="tel">
                                        @endif
                                        @foreach($user->user_tel as $phone)
                                            <input class="form-control form-control-sm" type="tel" placeholder="Phone Number" value="{{ phone($phone, 'DZ') }}" name="phone[]" inputmode="tel">
                                        @endforeach
                                        <a class="btn shadow-none" role="button" id="addPhoneNumber">{{__('Add another phone number')}}</a>
                                    </div>
                                </div>

                                <div class="text-center" id="Profile" style="width: auto;padding: 2px;">
                                    <img class="rounded-circle img-fluid" id="AvatarProfile" src="{{ asset("/files/avatar/" . $user->user_avatar) }}" alt="Avatar" loading="auto" style="width: 200px;height: 200px;margin: 5px;">
                                    <div class="file btn btn-lg btn-primary" style="position: relative;overflow: hidden;">
                                        <span style="font-size: initial;">
                                            <i class="fa fa-upload" style="margin-right: 2px;"></i>{{__('Choose Avatar')}}
                                        </span>
                                        <input type="file" accept="image/*" name="avatar" style="position: absolute;opacity: 0;right: 0;top: 0;">
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-center justify-content-sm-end m-4">
                                <button class="btn btn-success shadow-none" type="submit"><i class="fa fa-pencil m-1"></i>{{__('Save Changes')}}</button>
                            </div>
                        </form>
                        <hr>
                        <fieldset class="mb-3" style="padding: 0 3%;">
                            @if ($errors->has('oldpassword'))
                                <div class="alert alert-danger m-2">{{__('Please Confirm Your Current Password')}}</div>
                            @endif
                            <form method="post" id="ChangePasswordForm" action="{{ route("user.updatePassword") }}">
                                @csrf
                                <input type="hidden" value="patch" name="_method">
                                <legend>{{__('Change Password')}}</legend>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="oldpassword">{{__('Current Password')}} :&nbsp;</label>
                                    <input class="form-control form-control-sm ProfInputS" type="text" id="oldpassword" name="oldpassword" placeholder="{{__('Current Password')}}" required>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password">{{__('New Password')}} :&nbsp;</label>
                                    <input class="form-control form-control-sm ProfInputS" type="text" id="password" name="password" placeholder="{{__('New Password')}}" required minlength="6">
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between">
                                    <label class="text-nowrap" for="password_confirmation">{{__('Confirm New Password')}} :&nbsp;</label>
                                    <input class="form-control form-control-sm ProfInputS" type="text" id="password_confirmation" name="password_confirmation" placeholder="{{__('Confirm New Password')}}" required minlength="6">
                                </div>
                                <button class="btn btn-success shadow-none float-right" type="submit"><i class="fa fa-key m-1"></i>{{__('Change Password')}}</button>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection