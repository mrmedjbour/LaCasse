<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Daira;
use App\Wilaya;
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
        if ($request->filled(['wilaya', 'daira','commune'])) {
            $region = Commune::findOrFail($request->commune);
            $daira = $region->daira()->get();
            $wilaya_nom = Wilaya::findOrFail($daira[0]->wilaya_id)->wilaya_nom;
            $region['daira_nom'] = $daira[0]->daira_nom;
            $region['wilaya_nom'] = $wilaya_nom;
            return response()->json($region);
        }elseif ($request->filled(['wilaya', 'daira'])) {
            $commune = cache()->remember('CommuneOf' . $request->daira . 'Daira', 60 * 60 * 24 * 30, function () use ($request) {
                return Daira::findOrFail($request->daira)->communes()->get(['commune_id', 'commune_nom']);
            });
            return response()->json($commune);
        }elseif ($request->filled('wilaya')) {
            $daira = cache()->remember('dairasOf' . $request->wilaya . 'Willaya', 60 * 60 * 24 * 30, function () use ($request) {
                return Wilaya::findOrFail($request->wilaya)->dairas()->get(['daira_id', 'daira_nom']);
            });
            return response()->json($daira);
        }else {
            $allWilaya = cache()->remember('allWilayas', 60 * 60 * 48, function () {
                return Wilaya::all();
            });
            return response()->json($allWilaya);
        }
    }
}
