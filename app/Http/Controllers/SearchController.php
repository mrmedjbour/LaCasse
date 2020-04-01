<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        $result = \App\Annonce::whereHas('pieces', function (Builder $query) use ($request) {
            $query->where('piece.piece_id', '=', $request->part);
        })->where('annonce_type', '=', 'sell')->where('annonce_etat', '=', 1)->where('modele_id', '=', $request->model)->latest('annonce_date')->get();

        return view("search", compact('result'));
    }

}
