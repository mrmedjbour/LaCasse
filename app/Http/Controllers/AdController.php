<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view("annonce", compact(['ads', 'part']));
    }


    public function adBuy($ad, $title = null)
    {
//        $ads = Annonce::findOrFail($ad);
//
//        if (($ads->annonce_type == "buy") && is_null($part)){
//            return view("annonce", compact('ads'));
//        }
        return "buy";
//        return view("annonce", compact('ads'));
    }












//    public function adBuy($ad, $part = null, $title = null){
//        $ads = Annonce::findOrFail($ad);
//
//        if (($ads->annonce_type == "buy") && is_null($part)){
//            return view("annonce", compact('ads'));
//        }
//        return "sell";
//        return view("annonce", compact('ads'));
//    }
}
