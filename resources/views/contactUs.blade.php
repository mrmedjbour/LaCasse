@extends('layouts.app')
@section('title'){{ __('Contact us') }}@endsection
@section('content')
    <section>
        <div class="container contactUs">
            <div class="col-12 justify-content-xl-center p-3">
                <form class="mx-md-5 p-4" method="post" action="{{route("contact.store")}}">
                    @csrf
                    <h2 class="text-center font-weight-bold">{{__('Contact us')}}</h2>
                    @if(session('success'))
                        <div class="alert alert-success mb-3 text-center">{{ session('success') }}</div>
                    @endif
                    <input type="text" class="form-control d-block mb-3" name="email" placeholder="{{__('E-Mail Address')}}" required/>
                    <input type="tel" class="form-control d-block mb-4" name="phone" placeholder="{{__('Phone Number')}}"/>
                    <textarea class="form-control" placeholder="{{__('Enter Message')}}" rows="8" name="message" required></textarea>
                    <button class="btn btn-success my-3" type="submit"><i class="fa fa-send-o mr-2"></i>{{ __('SEND') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection