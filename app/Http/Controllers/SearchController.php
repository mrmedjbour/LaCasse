<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Marque;
use App\Modele;
use App\Piece;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        if ($request->partTitle = Piece::where('piece_id', $request->part)->first()) {
            $request->partTitle = $request->partTitle->piece_nom;
        }
        if ($request->modeleTitle = Modele::where('modele_id', $request->model)->first()) {
            $request->modeleTitle = $request->modeleTitle->modele_nom;
        }
        if ($request->makeTitle = Marque::where('marque_id', $request->make)->first()) {
            $request->makeTitle = $request->makeTitle->marque_nom;
        }

        $result = Annonce::whereHas('pieces', function (Builder $query) use ($request) {
            $query->where('piece.piece_id', '=', $request->part);
        })->whereHas('modele', function (Builder $query) use ($request) {
            $query->where('modele.modele_id', '=', $request->model)->where('modele.marque_id', '=', $request->make);
        })->where('annonce_type', '=', 'sell')->where('annonce_etat', '=', 1)->where('modele_id', '=', $request->model);

        if ($request->year) {
            $result = $result->where('modele_annee', '=', $request->year);
        }

        if ($request->sortBy == "asc") {
            $result = $result->oldest('annonce_date');
        } else {
            $result = $result->latest('annonce_date');
        }

        $perPage = intval(request('show', 10));
        if (!in_array($perPage, [10, 15, 20, 30])) {
            $perPage = 10;
        }

        $result = $result->paginate($perPage);

        return view("search", compact(['result', 'request']));
    }

    public function searchQuery(Request $request)
    {
        Validator::make($request->all(), array(
            'make' => 'required|exists:marque,marque_id',
            'modele' => 'required|exists:modele,modele_id',
            'ModeleYear' => 'between:1,5',
            'ModelePart' => 'required|exists:piece,piece_id',
        ))->validate();
        return redirect(route("search.result", [$request->make, $request->modele, $request->ModelePart, $request->ModeleYear]));
    }

    public function AdRequest(Request $request)
    {
        $result = Annonce::has('pieces')->where('annonce_type', '=', 'buy')->where('annonce_etat', '=', 1);
        if ($request->sortBy == "asc") {
            $result = $result->oldest('annonce_date');
        } else {
            $result = $result->latest('annonce_date');
        }

        $perPage = intval(request('show', 10));
        if (!in_array($perPage, [10, 15, 20, 30])) {
            $perPage = 10;
        }

        $result = $result->paginate($perPage);
        return view("AdRequest", compact(['result', 'request']));
    }
}