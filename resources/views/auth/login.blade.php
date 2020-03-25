@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-1 offset-lg-4 mx-auto form-div">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-12 col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>
                                        <strong>E-mail :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required autocomplete="email" placeholder="Email@example.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12 col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>
                                        <strong>Password :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')

                                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col marge">
                                <div>
                                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col d-sm-flex d-md-flex d-lg-flex justify-content-sm-center justify-content-xs-center justify-content-md-end justify-content-lg-end">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <span>Don't have an account?&nbsp;
                <a href="{{ route('register') }}">Create an Account
                  <br>
                  </a>
            </span>
                </div>
            </div>
        </div>
    </section>
@endsection
