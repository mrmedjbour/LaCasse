@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 p-0" style="font-family: Montserrat, sans-serif;font-size: 14px;">
                    @include('comp.sidebar')
                </div>
                    @include('comp.msgframe')
            </div>
        </div>
    </section>
@endsection