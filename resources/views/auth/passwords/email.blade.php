@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-1 offset-lg-4 mx-auto form-div">
                    <div class="row">
                        <div class="col">
                            <p>Please enter your email address below. You will receive a link to reset your password.</p>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-12 col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email@example.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col d-sm-flex d-md-flex d-lg-flex justify-content-sm-center justify-content-md-end justify-content-lg-end"><button class="btn btn-success" type="submit">Submit</button></div>
                        </div>
                    </form>
                    <hr><span style="font-size: 14px;">Don't have an account?&nbsp;<a href="{{ route('register') }}">Create an Account<br></a></span></div>
            </div>
        </div>
    </section>
@endsection
