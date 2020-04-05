<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Marque;
use App\Modele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $models = Modele::orderBy('modele_id', 'DESC')->paginate(20);
        return view('admin.model', compact('models'));
    }


    public function create()
    {
        $marques = Marque::all();
        return view('admin.modelAdd', compact(['marques']));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), array(
            'marque' => 'required|exists:marque,marque_id',
            'modele' => 'required',
        ))->validate();
        $inset_model = Marque::findOrFail($request->marque);
        $inset_model = $inset_model->modeles()->create([
            'modele_nom' => $request->modele,
        ]);
        return response()->json($inset_model);
    }

    public function show($id)
    {
        return redirect(route('model.edit', $id));
    }

    public function edit($id)
    {
        $model = Modele::findOrFail($id);
        $marques = Marque::all();
        return view('admin.modelEdit', compact(['marques', 'model']));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), array(
            'marque' => 'required|exists:marque,marque_id',
            'modele' => 'required',
        ))->validate();
        $model = Modele::findOrFail($id);
        $model->modele_nom = $request->modele;
        $model->save();
        return redirect(route('model.index'))->with('success', 'Model Successfully edited');
    }

    public function destroy(Request $request, $id)
    {
        Validator::make($request->all(), array(
            'modele_id' => 'required|exists:modele,modele_id',
        ))->validate();
        Modele::findOrFail($request->modele_id)->delete();
        return redirect(route('model.index'))->with('success', 'Model Successfully deleted');
    }
}
