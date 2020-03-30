<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdController extends Controller
{
    public function adSell($ad, $part = null, $title = null)
    {
        $ads = Annonce::findOrFail($ad);
        if ($ads->annonce_type == "buy") {
            return redirect(route("index"));
        }
        if ($ads->pieces->where('piece_id', $part)->count() < 1) {
            return redirect(route("index"));
        }
        if (empty($title)) {
            // Uri Title For SEO ;)
            $title = $ads->modele->marque->marque_nom . ' ' . $ads->modele->modele_nom;
            if ($ads->modele_annee) {
                $title = $title . ' ' . $ads->modele_annee;
            }
            $title = Str::slug($title, '-');
            return redirect(route("ad.sell", [$ad, $part, $title]));
        }
        return view("annonce", compact(['ads', 'part']));
    }

    public function adBuy($ad, $title = null)
    {
        $ads = Annonce::findOrFail($ad);
        if ($ads->annonce_type == "sell") {
            return redirect(route("index"));
        }
        if ($ads->pieces->count() < 1) {
            return redirect(route("index"));
        }
        if (empty($title)) {
            // Uri Title For SEO ;)
            $title = $ads->modele->marque->marque_nom . ' ' . $ads->modele->modele_nom;
            if ($ads->modele_annee) {
                $title = $title . ' ' . $ads->modele_annee;
            }
            $title = Str::slug($title, '-');
            return redirect(route("ad.buy", [$ad, $title]));
        }
        return view("annonce", compact('ads'));
    }
}