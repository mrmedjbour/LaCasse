<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled(['wilaya', 'daira','commune']))
        {
            $region = \App\Commune::findOrFail($request->commune);
            $daira = $region->daira()->get();
            $wilaya_nom = \App\Wilaya::findOrFail($daira[0]->wilaya_id)->wilaya_nom;
            $region['daira_nom'] = $daira[0]->daira_nom;
            $region['wilaya_nom'] = $wilaya_nom;
            return response()->json($region);
        }elseif ($request->filled(['wilaya', 'daira']))
        {
            $commune = \App\Daira::findOrFail($request->daira)->communes()->get(['commune_id','commune_nom']);
            return response()->json($commune);
        }elseif ($request->filled('wilaya'))
        {
            $daira = \App\Wilaya::findOrFail($request->wilaya)->dairas()->get(['daira_id','daira_nom']);
            return response()->json($daira);
        }else{
            return response()->json(\App\Wilaya::all());
        }
    }
}
