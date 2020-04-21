@extends('layouts.app')
@if ($ads->annonce_type == "buy")
@section('title'){{ trans_choice('I need for', $ads->pieces->count(), ['part' => Str::title($ads->pieces->first()->piece_nom)]) }} {{ Str::title($ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}@endsection
@elseif($ads->annonce_type == "sell")
@section('title'){{ Str::title($ads->pieces->where('piece_id', $part)->first()->piece_nom.' - '.$ads->modele->marque->marque_nom.' '.$ads->modele->modele_nom) }} {{ $ads->modele_annee ? '- '.$ads->modele_annee : ''}}@endsection
@else
@section('content')
    @if ($ads->annonce_type == "buy")
        @include('comp.annonceAchat')
    @elseif($ads->annonce_type == "sell")
        @include('comp.annonceVent')
    @else
    @endif
@endsection