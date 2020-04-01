<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        $result = Annonce::with('pieces')->where('annonce_type', '=', 'sell')->get();
//        where('modele_id', $request->model)->get();


        return response()->json($result);
//        return view("search");
    }

}
