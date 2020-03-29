@extends('layouts.app')

@section('content')
    @if ($ads->annonce_type == "buy")
        @include('comp.annonceAchat')
    @elseif($ads ?? ''->annonce_type == "sell")
        @include('comp.annonceVent')
    @endif
@endsection