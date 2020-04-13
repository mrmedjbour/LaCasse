<?php

namespace App\Http\Controllers;

use App\Marque;
use App\Modele;
use Illuminate\Http\Request;

class ModelApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('allMarque')) {
            $marques = Marque::all();
            foreach ($marques as $mar) {
                echo "<li data-type=\"make\" data-id=\"" . $mar->marque_id . "\">" . $mar->marque_nom . "</li>";
            }
            return;
        }
        if ($request->filled(['marque', 'modele'])) {
            $model = Modele::findOrFail($request->modele);
            $marque = $model->marque()->get('marque_nom');
            $model['marque_nom'] = $marque[0]->marque_nom;
            return response()->json($model);

        } elseif ($request->filled(['marque'])) {
            $model = Marque::findOrFail($request->marque)->modeles()->get(['modele_id', 'modele_nom']);
            return response()->json($model);

        } else {
            return response()->json(Marque::get(['marque_id', 'marque_nom']));
        }
    }
}
