@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-1 offset-lg-4 mx-auto form-div">
                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" class="form-control" name="email" value="{{ $email }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-row">
                            <div class="col-lg-12 col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="password"> <strong>{{ __('New Password') }} :</strong>
                                        <br>
                                    </label>
                                    <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required placeholder="{{ __('Password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="password-confirm"><strong>{{ __('Confirm New Password') }} :</strong></label>
                                    <input class="form-control" id="password-confirm" type="password" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col d-sm-flex d-md-flex d-lg-flex justify-content-sm-center justify-content-md-end justify-content-lg-end">
                                <button class="btn btn-success" type="submit">{{ __('Change Password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
