@extends('layouts.app')

@section('content')
    <section>
        <div class="container dashboard">
            <div class="row">
                <div class="col-lg-4" style="padding: 0px;">
                    @include('comp.sidebar')
                </div>
                <div class="col content-section">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <div class="Infobox"><i class="fa fa-user membership"></i><span class="heading"><strong>membership</strong></span><span class="value"><strong>Client</strong></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="Infobox"><i class="fa fa-folder-open-o an-statistic"></i>
                                <span class="heading"><strong>my ads</strong></span><span class="value"><strong>14</strong></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="Infobox"><i class="fa fa-comments msg-static"></i>
                                <span
                                        class="heading"><strong>messages</strong></span><span class="value"><strong>307</strong></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
