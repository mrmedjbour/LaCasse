@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4 p-0 HomeSideManU">
                    @include('comp.sidebar')
                </div>
                <div class="col-lg-8 dash-info">
                    <div id="PaddAnn">
                        <form id="GoPro" class="p-4">
                            <h5 class="mb-2">Switch to professional account</h5>
                            @if(session('success'))
                                <div class="alert alert-success m-2">{{ session('success') }}</div>
                            @endif
                            <div class="text-center w-100"><i class="far fa-clock fa-8x m-3" style="color: #ff8b02;"></i>
                                <p><span class="text-center d-block font-weight-bold mb-2" style="color: #393939;"><strong>Your demand is awaiting approval</strong></span>Please wait 24 hour to 7 days, we will contact you soon
                                    <br>Thank you for your understanding</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection