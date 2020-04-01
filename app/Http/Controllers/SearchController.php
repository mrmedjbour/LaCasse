<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        if ($request->partTitle = \App\Piece::where('piece_id', $request->part)->first()) {
            $request->partTitle = $request->partTitle->piece_nom;
        }
        if ($request->modeleTitle = \App\Modele::where('modele_id', $request->model)->first()) {
            $request->modeleTitle = $request->modeleTitle->modele_nom;
        }
        if ($request->makeTitle = \App\Marque::where('marque_id', $request->make)->first()) {
            $request->makeTitle = $request->makeTitle->marque_nom;
        }

        $result = \App\Annonce::whereHas('pieces', function (Builder $query) use ($request) {
            $query->where('piece.piece_id', '=', $request->part);
        })->whereHas('modele', function (Builder $query) use ($request) {
            $query->where('modele.modele_id', '=', $request->model)->where('modele.marque_id', '=', $request->make);
        })->where('annonce_type', '=', 'sell')->where('annonce_etat', '=', 1)->where('modele_id', '=', $request->model);

        if ($request->year) {
            $result = $result->where('modele_annee', '=', $request->year);
        }


        $result = $result->latest('annonce_date');
        $result = $result->get();

        return view("search", compact(['result', 'request']));
    }

}
