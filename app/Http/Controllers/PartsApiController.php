<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartsApiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('all')) {
            $partsCat = \App\PieceCat::with('pieces')->get();
            echo "<option disabled hidden selected>Select Part</option>";
            foreach ($partsCat as $parts) {
                echo "<optgroup label=\"" . Str::title($parts->cat_nom) . "\">";
                foreach ($parts->pieces as $part) {
                    $piece_nom = Str::title($part->piece_nom);
                    echo "<option value=\"$part->piece_id\">$piece_nom</option>";
                }
                echo "</optgroup>";
            }
            return;
        } else {
            if ($request->filled(['cat', 'part'])) {
                $part = \App\Piece::findOrFail($request->part);
                $cat_nom = $part->cat()->get('cat_nom')[0]->cat_nom;
                $part['cat_nom'] = $cat_nom;
                return response()->json($part);
            } elseif ($request->filled(['cat'])) {
                $parts = \App\PieceCat::findOrFail($request->cat)->pieces()->get(['piece_id', 'piece_nom']);
                return response()->json($parts);
            } else {
                return response()->json(\App\PieceCat::get(['cat_id', 'cat_nom']));
            }
        }
    }
}
