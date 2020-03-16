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
                                    <label for="wilaya">
                                        <strong>Address:</strong>
                                    </label>
                                    <div class="d-md-flex justify-content-md-between align-items-md-center RegAdr">
                                        <select id="wilaya" class="form-control d-md-inline-block">
                                            <option value="0" selected>wilaya</option>
                                            <option value="1">Boumerdes</option>
                                            <option value="1">ak fahem</option>
                                        </select>
                                        <select id="daira" class="form-control d-md-inline-block" disabled>
                                            <option value="0" selected>daira</option>
                                            <option value="1">boumerdes</option>
                                            <option value="2">ak fahem</option>
                                        </select>
                                        <select id="commune_id" name="commune_id" class="form-control d-md-inline-block"
                                                required>
                                            <option value="0" selected>commune</option>
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
