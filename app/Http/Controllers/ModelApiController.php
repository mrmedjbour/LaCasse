<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled(['marque', 'modele'])) {
            $model = \App\Modele::findOrFail($request->modele);
            $marque = $model->marque()->get('marque_nom');
            $model['marque_nom'] = $marque[0]->marque_nom;
            return response()->json($model);

        } elseif ($request->filled(['marque'])) {
            $model = \App\Marque::findOrFail($request->marque)->modeles()->get(['modele_id', 'modele_nom']);
            return response()->json($model);

        } else {
            return response()->json(\App\Marque::get(['marque_id', 'marque_nom']));
        }
    }
}
